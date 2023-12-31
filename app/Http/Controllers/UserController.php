<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use App\Models\User;
use App\Models\Penempatan;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Storage;
use App\Exports\ExportUsers;
use App\Imports\ImportUsers;
use Excel;
use PDF;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $admin = Auth::user();
        // $users = User::all();

        $users = User::sortable()->paginate(5)->onEachSide(1)->fragment('users');

        $cari = $request->query('cari');
        
        if(!empty($cari)){
            $users = User::sortable()
            ->where('users.nama','like','%'. $cari .'%')
            ->orWhere('users.role','like','%'. $cari .'%')
            ->orWhere('users.username','like','%'. $cari .'%')
            ->paginate(5)->onEachSide(1)->fragment('users');
        } else {
            $users = User::sortable()->paginate(5)->onEachSide(1)->fragment('users');
        }

        return view('admin.manage-user.data-user')->with([
            'admin' => $admin,
            'users' => $users,
            'cari' => $cari,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $admin = Auth::user();
        $penempatans = Penempatan::all();

        return view('admin.manage-user.add-user')->with([
            'admin' => $admin,
            'penempatans' => $penempatans,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();

        $foto = $request->file('foto');
        $fotoName = time().'-'.$foto->getClientOriginalName();
        $path = 'img/'.$fotoName;
        
        Storage::disk('public')->put($path, file_get_contents($foto));

        User::create([
            'nama' => $data['nama'],
            'foto' => $fotoName,
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'penempatan' => $data['penempatan'],
        ]);

        return redirect()->route('manage-users.index')->with('success', 'Data Management User Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = Auth::user();
        $user = User::findOrFail($id);

        return view('admin.manage-user.detail-user')->with([
            'user' => $user,
            'admin' => $admin
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Auth::user();
        $user = User::findOrFail($id);

        return view('admin.manage-user.edit-user')->with([
            'admin' => $admin,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $data = $request->all();
        $user = User::findOrFail($id);
        $penempatan = Penempatan::where('alamat', $user->penempatan)->first();

        if ($request->foto == "") {
            $fotoName = $user->foto;
        } else {
            $foto = $request->file('foto');
            $fotoName = time().'-'.$foto->getClientOriginalName();
            $path = 'img/'.$fotoName;
            
            Storage::disk('public')->put($path, file_get_contents($foto));
            if(!empty($user->foto)) File::delete('storage/img/'.$user->foto);
        }

        if ($request->password == "") {
            $password = $user->password;
        } else {
            $password = Hash::make($data['password']);
        }
        
        
        User::where('id', $user->id)
            ->update([
            'nama' => $data['nama'],
            'foto' => $fotoName,
            'username' => $data['username'],
            'password' => $password,
            'role' => $data['role'],
            'penempatan' => $data['penempatan'],
        ]);

        Penempatan::where('id', $penempatan->id)
            ->update([
                'alamat' => $data['penempatan'],
            ]);

        return redirect()->route('manage-users.index')->with('success', 'Data User Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        if(!empty($user->foto)) File::delete('storage/img/'.$user->foto);
        $user->delete();
        $penempatan = Penempatan::where('alamat', $user->penempatan)->first();
        $penempatan->delete();

        return redirect()->route('manage-users.index')->with('success', 'Data User Berhasil Dihapus!');
    }

    /**
     * Export list user to PDF of the resource Users.
     */
    public function exportPDF()
    {
        $users = User::all();
        $data = [
            'users' => $users
        ]; 

        $pdf = PDF::loadView('admin.manage-user.pdf-user', $data)->setPaper('a4', 'landscape')->setOption(['dpi' => 300]);
        return $pdf->download('Data-Users-ResikRek.pdf');
        // return $pdf->stream('Data-Users-ResikRek.pdf');
        // return view('admin.manage-user.pdf-users')->with([
        //     'users' => $users,
        // ]);
    }

    /**
     * Export list user to PDF of the resource Users.
     */
    public function exportPDFID(string $id)
    {
       
        $user = User::findOrFail($id);
        $admin = Auth::user();
        $data = [
            'users' => $users,
            'admin' => $admin,
        ]; 

        $pdf = PDF::loadView('admin.manage-user.pdf-users', $data)->setPaper('a4', 'landscape')->setOption(['dpi' => 300]);
        return $pdf->download('Data-Users-ResikRek.pdf');
        // return $pdf->stream('Data-Users-ResikRek.pdf');
        // return view('admin.manage-user.pdf-users')->with([
        //     'users' => $users,
        // ]);
    }

    /**
     * Export list user to Excel of the resource Users.
     */
    public function exportExcel()
    {
        return Excel::download(new ExportUsers, 'Data-Users-ResikRek.xlsx');
    }

}
