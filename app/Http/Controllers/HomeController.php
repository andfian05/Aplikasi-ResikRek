<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardSuperAdmin(Request $request)
    {
        $sadmin = Auth::user();
        $users = User::all();
        return view('sadmin.dashboard')->with([
            'sadmin' => $sadmin,
            'users' => $users
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardAdmin(Request $request)
    {
        $admin = Auth::user();
        
        return view('admin.dashboard')->with([
            'admin' => $admin,
            
        ]);
    }

}
