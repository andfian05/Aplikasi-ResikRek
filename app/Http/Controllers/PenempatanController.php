<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PenempatanRequest;

use App\Models\User;
use App\Models\Penempatan;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Desa;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Storage;
use App\Exports\ExportPenempatan;
use App\Imports\ImportUsers;
use PDF;
use Excel;
use Illuminate\Support\Facades\File;

class PenempatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $admin = Auth::user();
        $penempatans = Penempatan::with(['kabupaten'])->get();

        $cari = $request->query('cari');
        
        if(!empty($cari)){
            $penempatans = Penempatan::sortable()
            ->where('penempatan.alamat','like','%'. $cari .'%')
            ->orWhere('penempatan.kab_id','like','%'. $cari .'%')
            ->paginate(5)->onEachSide(1)->fragment('penempatans');

           
        } else {
            $penempatans = Penempatan::sortable()->paginate(5)->onEachSide(1)->fragment('penempatans');

            
        }

        

        return view('admin.penempatan.data-penempatan')->with([
            'admin' => $admin,
            'penempatans' => $penempatans,
            'cari' => $cari,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $admin = Auth::user();
        $kabupatens = Kabupaten::all();

        return view('admin.penempatan.add-penempatan')->with([
            'admin' => $admin,
            'kabupatens' => $kabupatens,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PenempatanRequest $request)
    {
        $data = $request->all();

        Penempatan::create([
            'kab_id' => $data['kab_id'],
            'kec_id' => $data['kec_id'],
            'desa_id' => $data['desa_id'],
            'alamat' => $data['alamat'],
        ]);

        return redirect()->route('penempatan.index')->with('success', 'Data Penempatan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $admin = Auth::user();
        $penempatan = Penempatan::with(['kabupaten', 'kecamatan', 'desa'])
            ->findOrFail($id);

        return view('admin.penempatan.detail-penempatan')->with([
            'admin' => $admin,
            'penempatan' => $penempatan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $admin = Auth::user();
        $penempatan = Penempatan::with(['kabupaten', 'kecamatan', 'desa'])
            ->findOrFail($id);
        $kabupatens = Kabupaten::all();
        $kecamatans = Kecamatan::all();
        $desas = Desa::all();

        return view('admin.penempatan.edit-penempatan')->with([
            'admin' => $admin,
            'penempatan' => $penempatan,
            'kabupatens' => $kabupatens,
            'kecamatans' => $kecamatans,
            'desas' => $desas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PenempatanRequest $request, string $id)
    {
        $data = $request->all();
        $penempatan = Penempatan::findOrFail($id);

        Penempatan::where('id', $penempatan->id)
            ->update([
                'kab_id' => $data['kab_id'],
                'kec_id' => $data['kec_id'],
                'desa_id' => $data['desa_id'],
                'alamat' => $data['alamat'],
            ]);

        return redirect()->route('penempatan.index')->with('success', 'Data Penempatan Berhasil Diubah!');
    }


    /**
     * Export list user to PDF of the resource Users.
     */
    public function exportPDF()
    {
        $penempatan = Penempatan::all();
        $data = [
            'penempatan' => $penempatan,
        ]; 

      

        $pdf = PDF::loadView('admin.penempatan.pdf-penempatan', $data)->setPaper('a4', 'landscape')->setOption(['dpi' => 300]);
        return $pdf->download('Data-Penempatan-ResikRek.pdf');
        
    }


    /**
     * Export list user to Excel of the resource Users.
     */
    public function exportExcel()
    {
        return Excel::download(new ExportPenempatan, 'Data-Penempatan-ResikRek.xlsx');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penempatan = Penempatan::findOrFail($id);
        $penempatan->delete();

        return redirect()->route('penempatan.index')->with('success', 'Data Penempatan Berhasil Dihapus!');
    }

    /**
     * Display a listing of the resource to Dasboard Superadmin.
     */
    public function indexs(Request $request)
    {
        $sadmin = Auth::user();
        $penempatans = Penempatan::with(['kabupaten'])->get();

        $cari = $request->query('cari');
        
        if(!empty($cari)){
            $penempatans = Penempatan::sortable()
            ->where('penempatan.alamat','like','%'. $cari .'%')
            ->orWhere('penempatan.kab_id','like','%'. $cari .'%')
            ->paginate(5)->onEachSide(1)->fragment('penempatans');
        } else {
            $penempatans = Penempatan::sortable()->paginate(5)->onEachSide(1)->fragment('penempatans');
        }

        return view('sadmin.penempatan.data-penempatan')->with([
            'sadmin' => $sadmin,
            'penempatans' => $penempatans,
            'cari' => $cari,
        ]);
    }

    /**
     * Display the specified resource to Dasboard Superadmin.
     */
    public function shows(Request $request, string $id)
    {
        $sadmin = Auth::user();
        $penempatan = Penempatan::with(['kabupaten', 'kecamatan', 'desa'])
            ->findOrFail($id);

        return view('sadmin.penempatan.detail-penempatan')->with([
            'sadmin' => $sadmin,
            'penempatan' => $penempatan,
        ]);
    }

}
