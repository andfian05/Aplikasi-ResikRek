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
use Auth;
use Storage;
use File;

class PenempatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $admin = Auth::user();
        $penempatans = Penempatan::with(['user', 'kabupaten'])->get();

        return view('admin.penempatan.data-penempatan')->with([
            'admin' => $admin,
            'penempatans' => $penempatans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $admin = Auth::user();
        $users = User::all();
        $kabupatens = Kabupaten::all();

        return view('admin.penempatan.add-penempatan')->with([
            'admin' => $admin,
            'users' => $users,
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
            'user_id' => $data['user_id'],
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
        $penempatan = Penempatan::with(['user', 'kabupaten', 'kecamatan', 'desa'])
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
        $penempatan = Penempatan::with(['user', 'kabupaten', 'kecamatan', 'desa'])
            ->findOrFail($id);
        $users = User::all();
        $kabupatens = Kabupaten::all();
        $kecamatans = Kecamatan::all();
        $desas = Desa::all();

        return view('admin.penempatan.edit-penempatan')->with([
            'admin' => $admin,
            'users' => $users,
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
                'user_id' => $data['user_id'],
                'kab_id' => $data['kab_id'],
                'kec_id' => $data['kec_id'],
                'desa_id' => $data['desa_id'],
                'alamat' => $data['alamat'],
            ]);

        return redirect()->route('penempatan.index')->with('success', 'Data Penempatan Berhasil Diubah!');
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
}
