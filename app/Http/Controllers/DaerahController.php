<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\User;
use App\Models\Penempatan;

class DaerahController extends Controller
{
    /**
     * Displaying districts data based on regency id.
     */
    public function getKecamatan(Request $request)
    {
        $id_kab = $request->id_kab;
        $kecamatans = Kecamatan::where('kab_id', $id_kab)->get();

        foreach ($kecamatans as $kecamatan) {
            echo "<option value='$kecamatan->id_kec'>$kecamatan->nama</option>";
        }
    }

    /**
     * Displaying villages data based on district id.
     */
    public function getDesa(Request $request)
    {
        $id_kec = $request->id_kec;
        $desas = Desa::where('kec_id', $id_kec)->get();

        foreach ($desas as $desa) {
            echo "<option value='$desa->id_desa'>$desa->nama</option>";
        }
    }

    /** 
     * Displaying location data based on user id in placement data.
     */
    public function getLokasi(Request $request)
    {
        $id_user = $request->id_user;
        $user = User::where('id', $id_user)->first();
        $lokasis = Penempatan::where('alamat', $user->penempatan)->get();
        foreach ($lokasis as $lokasi) {
            echo "<option value='$lokasi->alamat'>$lokasi->alamat</option>";
        }
    }
}
