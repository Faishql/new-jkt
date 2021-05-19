<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\UserController;

class IndexController extends Controller
{
    private $user, $barang, $customer;

    public function __construct()
    {
        $this->user = new UserController();
        $this->barang = new BarangController();
        $this->customer = new CustomerController();
    }

    public function index()
    {
        $data = $this->user->getUser();
        return view('admin.index', ['user_data' => $data]);
    }

    public function barang()
    {
        $data = $this->barang->getBarang();
        return view('admin.barang', ['barang' => $data]);
    }

    public function customer()
    {
        $data = $this->customer->getCustomer();
        return view('admin.customer', ['customer' => $data]);
    }

    public function delUser($id)
    {
        return $this->user->deleteUser($id);
    }
}
