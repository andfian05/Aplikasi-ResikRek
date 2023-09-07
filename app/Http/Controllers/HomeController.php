<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Auth;

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
        return view('sadmin.dashboard')->with([
            'sadmin' => $sadmin,
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
