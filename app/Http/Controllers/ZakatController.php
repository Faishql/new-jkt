<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Kering;
use App\Models\Penerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZakatController extends Controller
{   
    /**
     * get data detail gabah
     * @return json data detail
     */
    public function getChart($id)
    {
        $data = Detail::where('kode_penerimaan',$id)->get();
        return response()->json(['pesan' => 'success', 'data' => $data]);
    }

    /**
     * get data gabah kering 
     * @return json data gabah kering
     */
    public function getGabahk()
    {
        $data = Kering::get();
        return response()->json(['pesan' => 'success', 'data' => $data]);
    }


    /**
     * add data detail gabah
     * @param Request
     * @return json data
     */
    public function addChart(Request $req)
    {
        $insert = Detail::insert([
            'kode_penerimaan' => $req->kode_penerimaan,
            'berat' => $req->berat,
            'potongan' => $req->pot,
            'potongan_zak' => 0.5,
            'berat_total' => $req->berat,
            'bayar' => $req->bayar,
            'tgl_data' => now()
        ]);

        if ($insert) {
            return response()->json('sukses');
        } return response()->json('gagal');
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
            'total_pot_zak' => 0,
            'total_berat' => 0,
            'total_bayar' => 0,
            'tgl_data' => now()
        ]);

        if ($insert) {
            return response()->json(['pesan' => 'success', 'status' => 200]);
        } return response()->json(['pesan' => 'failed']);
    }


    /**
     * function calculate mastering data
     * @return Renderable & array
     */
    public function updateGabah(Request $req)
    {
        $dataList = [];
        $totalkotor = 0;
        $totalpot = 0;
        $afterpotongan = 0;
        $data = Detail::where('kode_penerimaan', $req->kode)->get();
        $countdata = count($data);
        $pot = 0.5;

        $no = 1;
        foreach ($data as $item) {
            $dataList[] = [
                'no' => $no++,
                'berat' => $item['berat'],
                'potongan' => $item['potongan'],
                'total' => $this->calculate($item['berat'],$item['potongan'])
            ];
            $totalpot += $this->topot($item['berat'],$item['potongan']);
            $totalkotor += $item['berat'];
            $afterpotongan += $this->calculate($item['berat'],$item['potongan']);
        }

        $potonganakhir = $countdata * $pot;
        $alldata = [
            'datalist' => $dataList,
            'total_kotor' => $totalkotor,
            'afterpotongan' => $afterpotongan,
            'countdata' => $countdata,
            'potongan_zak' => $pot,
            'final_potongan' => $potonganakhir,
            'total_gabah' => $afterpotongan - $potonganakhir,
            'bayar' => ($afterpotongan - $potonganakhir) * 4600
        ];

        $update = Penerimaan::where('kode_penerimaan', $req->kode)->update([
            'berat_kotor' => $alldata['total_kotor'],
            'total_potongan' => $totalpot,
            'total_pot_zak' => $potonganakhir,
            'total_berat' => $alldata['afterpotongan'],
            'total_bayar' => $alldata['bayar'],
        ]);

        if($update) { 
            return view('invoice',$alldata);
         }return redirect('/home');
    }

    public function calculate($berat, $item)
    {
        $res1 = $berat * $item/100;
        $finalres = $berat - $res1;

        return $finalres;
    }

    public function topot($berat, $item)
    {
        return $berat * $item/100;
    }
}
