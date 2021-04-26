<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZakatController extends Controller
{
    public function getGabah()
    {
        $data = Penerimaan::get();
        return response()->json(['pesan' => 'sukses', 'data' => $data]);
    }

    public function addGabah(Request $req)
    {
        $insert = Penerimaan::insert([
            'kode_penerimaan' => $req->kode,
            'nama_gabah' => $req->nama,
            'tanggal' => now(),
            'berat_kotor' => 0.0,
            'total_potongan' => 0.5,
            'total_pot_zakat' => 0.0,
            'total_berat' => 0.0,
            'total_bayar' => 0.0,
            'tgl_data' => now()
        ]);

        if ($insert) {
            return response()->json(['pesan' => 'success', 'status' => 200]);
        }
    }
}
