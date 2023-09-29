<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LaporanRequest;

use App\Models\Laporan;
use App\Models\User;
use App\Models\Penempatan;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Storage;
use Illuminate\Support\Facades\File;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $admin = Auth::user();
        $users = User::all();

        $cari = $request->query('cari');
        
        if(!empty($cari)){
            $reports = Laporan::with(['user'])->sortable()
            ->where('laporan.lokasi', 'like', '%'. $cari .'%')
            ->paginate(5)->onEachSide(1)->fragment('reports');
        } else {
            $reports = Laporan::with(['user'])->sortable()->paginate(5)->onEachSide(1)->fragment('reports');
        }

        return view('admin.laporan.data-laporan')->with([
            'admin' => $admin,
            'users' => $users,
            'reports' => $reports,
            'cari' => $cari,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $admin = Auth::user();
        $users = User::where('role', 'karyawan')->get();

        return view('admin.laporan.add-laporan')->with([
            'admin' => $admin,
            'users' => $users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LaporanRequest $request)
    {
        $data = $request->all();

        $beforefoto = $request->file('before_foto');
        $beforefotoName = time().'-before.'. $request->before_foto->extension();
        $path = 'img/laporan/'.$beforefotoName;
        Storage::disk('public')->put($path, file_get_contents($beforefoto));
        
        $afterfoto = $request->file('after_foto');
        $afterfotoName = time().'-after.'. $request->after_foto->extension();
        $path = 'img/laporan/'.$afterfotoName;
        Storage::disk('public')->put($path, file_get_contents($afterfoto));

        // dd($data);
        Laporan::create([
            'user_id' => $data['user_id'],
            'before_foto' => $beforefotoName,
            'after_foto' => $afterfotoName,
            'deskripsi' => $data['deskripsi'],
            'lokasi' => $data['lokasi'],
            'catatan' => $data['catatan'],
        ]);

        return redirect()->route('laporan.index')->with('success', 'Data Laporan Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $admin = Auth::user();
        $report = Laporan::with(['user'])->findOrFail($id);

        return view('admin.laporan.detail-laporan')->with([
            'admin' => $admin,
            'report' => $report,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LaporanRequest $request, string $id)
    {
        $admin = Auth::user();
        $report = Laporan::with(['user'])->findOrFail($id);
        $users = User::where('role', 'karyawan')->get();

        return view('admin.laporan.edit-laporan')-> with([
            'admin' => $admin,
            'report' => $report,
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LaporanRequest $request, string $id)
    {
        $data = $request->all();
        $report = Laporan::findOrFail($id);

        if ($request->before_foto == "") {
            $beforefotoName = $report->before_foto;
        } else {
            $beforefoto = $request->file('before_foto');
            $beforefotoName = time().'-before.'. $request->before_foto->extension();
            $path = 'img/laporan/'.$beforefotoName;
            Storage::disk('public')->put($path, file_get_contents($beforefoto));
            if(!empty($report->before_foto)) File::delete('storage/img/laporan/'.$report->before_foto);
        }

        if ($request->after_foto == "") {
            $afterfotoName = $report->after_foto;
        } else {
            $afterfoto = $request->file('after_foto');
            $afterfotoName = time().'-after.'. $request->after_foto->extension();
            $path = 'img/laporan/'.$afterfotoName;
            Storage::disk('public')->put($path, file_get_contents($afterfoto));
            if(!empty($report->after_foto)) File::delete('storage/img/laporan/'.$report->after_foto);
        }

        if ($request->lokasi == "") {
            $lokasi = $report->lokasi;
        } else {
            $lokasi = $data['lokasi'];
        }
        

        Laporan::where('id', $report->id)
            ->update([
                'user_id' => $data['user_id'],
                'before_foto' => $beforefotoName,
                'after_foto' => $afterfotoName,
                'deskripsi' => $data['deskripsi'],
                'lokasi' => $lokasi,
                'catatan' => $data['catatan'],
            ]);

        return redirect()->route('laporan.index')->with('success', 'Data Laporan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = Laporan::findOrFail($id);
        dd(Storage::delete(['storage/img/laporan'.$report->before_foto, 'storage/img/laporan'.$report->after_foto]));
        $report->delete();

        // File::delete('storage/img/laporan/'.$report->after_foto);
        // if(!empty($report->before_foto)) File::delete(['storage/img/laporan/'.$report->before_foto, 'storage/img/laporan/'.$report->after_foto]);

        return redirect()->route('laporan.index')->with('success', 'Data Laporan Berhasil Dihapus!');
    }
}
