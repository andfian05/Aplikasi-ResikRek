<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use Redirect;

use App\Models\User;
use DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('login/masuk');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            $account = DB::table('users')->where('username', $request->username)->first();
  
            if ($account->role == 'Superadmin') {
                Auth::guard('superadmin')->LoginUsingId($account->id);
                return redirect('sadmin');
            } elseif ($account->role == 'Admin') {
                Auth::guard('admin')->LoginUsingId($account->id);
                return redirect('admin');
            } elseif ($account->role == 'Karyawan') {
                Auth::guard('karyawan')->LoginUsingId($account->id);
                return redirect('karyawan');
            } 
        }

        return redirect('/login')->with('status', 'Username atau Password Anda Salah');
    }

    public function logout()
    {
        if (Auth::guard('superadmin')->check()) {
            Auth::guard('superadmin')->logout();
        } elseif (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('karyawan')->check()) {
            Auth::guard('karyawan')->logout();
        } 

        return redirect('/login');
    }
}
