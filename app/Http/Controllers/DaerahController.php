<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kecamatan;
use App\Models\Desa;

class DaerahController extends Controller
{
    /**
     * get kecamatam
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
     * get Desa
     */
    public function getDesa(Request $request)
    {
        $id_kec = $request->id_kec;
        $desas = Desa::where('kec_id', $id_kec)->get();

        foreach ($desas as $desa) {
            echo "<option value='$desa->id_desa'>$desa->nama</option>";
        }
    }
}
