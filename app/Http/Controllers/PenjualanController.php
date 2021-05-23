<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Customer;
use App\Models\DPenjualan;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        return view('penjualan');
    }

    public function addPenjualan(Request $req)
    {
        return Penjualan::insert([
            'invoice_penjualan' => $req->inv,
            'total_harga' => 0,
            'customer' => $req->customer,
            'tanggal_penjualan' => $req->tgl,
            'tgl_data' => now(),
            'updated_at' => now()
        ]) ? response()->json(['status' => 'ok']) : response()->json(['status' => 'no']);
    }

    public function addDetail(Request $req)
    {
        $insert = DPenjualan::insert([
            'invoice_penjualan' => $req->inv,
            'id_barang' => $req->barang,
            'id_customer' => $req->customer,
            'jumlah' => $req->jumlah,
            'total_harga' => $req->tothar,
            'tgl_detail' => $req->tgl,
            'tgl_data' => now()
        ]);

        if ($insert) {
            return Penjualan::where('invoice_penjualan', $req->inv)->update([
                'total_harga' => Penjualan::select('total_harga')->where('invoice_penjualan', $req->inv)->first()['total_harga'] += $req->jumlah * $req->tothar
            ]) ? response()->json(['status' => 'ok']) : response()->json(['status' => 'no']);
        } else {
            return response()->json(['status' => 'no']);
        }
    }

    public function getDetail($inv)
    {
        $data = DPenjualan::where('invoice_penjualan', $inv)->get();
        $final = array();
        foreach ($data as $item) {
            $final[] = [
                'namab' => Barang::select('nama')->where('id_barang', $item->id_barang)->first()['nama'],
                'namac' => Customer::select('nama')->where('id_customer', $item->id_customer)->first()['nama'],
                'jumlah' => $item->jumlah,
                'harga' => $item->total_harga
            ];
        }
        return response()->json(['data' => $final]);
    }

    public function getCustomer()
    {
        return response()->json([
            'data' => Customer::get()
        ]);
    }

    public function getBarang()
    {
        return response()->json([
            'data' => Barang::get()
        ]);
    }

    public function printInv($inv)
    {
        $datalist = array();
        $list = DPenjualan::where('invoice_penjualan', $inv)->get();
        foreach ($list as $item) {
            $nama = Barang::select('nama', 'satuan', 'kemasan')->where('id_barang', $item->id_barang)->first();
            $datalist[] = [
                'banyak_barang' => $item->jumlah,
                'nama_barang' => $nama['nama'] . ' ' . $nama['kemasan'] . ' ' . $nama['satuan'],
                'harga' => $item->total_harga,
                'jumlah' => $item->total_harga * $item->jumlah
            ];
        }
        $nama = Customer::select('nama')->where('id_customer', Penjualan::select('customer')->where('invoice_penjualan', $inv)->first()['customer'])->first()['nama'];
        return view('invpenjualan', [
            'list' => $datalist,
            'total' => $this->sum($datalist),
            'inv' => $inv,
            'nama' => $nama
        ]);
    }

    public function sum(array $arr)
    {
        $jumlah = 0;
        foreach ($arr as $item) {
            $jumlah += $item['jumlah'];
        }
        return $jumlah;
    }

    public function getAll()
    {
        return response()->json(['data' => Penjualan::get()]);
    }
}
