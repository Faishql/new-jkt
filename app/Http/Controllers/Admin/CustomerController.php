<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getCustomer()
    {
        return Customer::get();
    }

    public function updateCustomer($data, $id)
    {
        return Customer::where('id_customer', $id)->update($data)
            ? redirect('/customer')->with('success', 'update Customer berhasil')
            : redirect('/customer')->with('error', 'update Customer gagal');
    }

    public function addCustomer(array $data)
    {
        return Customer::insert($data)
            ? redirect('/customer')->with('success', 'tambah Customer berhasil')
            : redirect('/customer')->with('error', 'tambah Customer gagal');
    }

    public function deleteCustomer($id)
    {
        return Customer::where('id_customer', $id)->delete()
            ? redirect('/customer')->with('success', 'hapus Customer berhasil')
            : redirect('/customer')->with('error', 'hapus Customer gagal');
    }

    public function getUpdate($id)
    {
        return response()->json([
            'data' => Customer::where('id_customer', $id)->first()
        ]);
    }
}
