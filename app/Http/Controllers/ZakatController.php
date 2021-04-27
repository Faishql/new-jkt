<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Penerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZakatController extends Controller
{   

    public function addChart(Request $req)
    {
        $insert = Detail::insert([
            'kode_penerimaan' => $req->kode_penerimaan,
            'tanggal' => now(),
            'berat' => $req->berat,
            'potongan' => 5,
            'potongan_zak' => 0.5,
            'berat_total' => $req->berat,
            'bayar' => $req->bayar,
            'tgl_data' => now()
        ]);

        $insert ? response()->json('sukses') : response()->json('gagal');
    }
    /**
     * @return json data
     */
    public function getGabah()
    {
        if(validate()) {
            abort('401', 'login required');
        } 

        $data = Penerimaan::get();
        return response()->json(['pesan' => 'sukses', 'data' => $data]);
    }

    public function getGkering()
    {
        return view('drying');
    }

    /**
     * @return Renderable
     */
    public function viewAdd()
    {
        if(validate()) {
            abort('401', 'login required');
        }

        return view('add', ['title' => 'Halaman | Tambah Data']);
    }

    /**
     * @param Request
     * @return json data
     */
    public function addGabah(Request $req)
    {
        if(validate()) {
            abort('401', 'login required');
        }

        $insert = Penerimaan::insert([
            'kode_penerimaan' => $req->kode,
            'nama_gabah' => $req->nama,
            'tanggal' => now(),
            'berat_kotor' => 0,
            'total_potongan' => 5,
            'total_pot_zakat' => 0,
            'total_berat' => 0,
            'total_bayar' => 0,
            'tgl_data' => now()
        ]);

        if ($insert) {
            return response()->json(['pesan' => 'success', 'status' => 200]);
        } return response()->json(['pesan' => 'failed']);
    }
}
