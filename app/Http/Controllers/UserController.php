<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Auth;
use Storage;
use File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $admin = Auth::user();
        $users = User::all();

        // $users = User::sortable()->paginate(5)->onEachSide(1)->fragment('users');

        return view('admin.manage-user.data-user')->with([
            'admin' => $admin,
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $admin = Auth::user();

        return view('admin.manage-user.add-user')->with([
            'admin' => $admin,
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
            'penempatan' => $data['penempatan'],
            'foto' => $fotoName,
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
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
            'penempatan' => $data['penempatan'],
            'foto' => $fotoName,
            'username' => $data['username'],
            'password' => $password,
            'role' => $data['role'],
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

        return redirect()->route('manage-users.index')->with('success', 'Data User Berhasil Dihapus!');
    }

    /**
     * Export resource to pdf.
     */
    public function exportPDF()
    {
        $users = User::all();
        
    }
}
