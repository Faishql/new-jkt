<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;

class IndexController extends Controller
{
    private $user, $barang, $customer, $auth;

    public function __construct()
    {
        $this->user = new UserController();
        $this->barang = new BarangController();
        $this->customer = new CustomerController();
        $this->auth = new AuthController();
    }

    /**
     * controller route index admin
     */
    public function index()
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        $data = $this->user->getUser();
        return view('admin.index', ['user_data' => $data]);
    }

    /**
     * controller route barang admin
     */
    public function barang()
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        $data = $this->barang->getBarang();
        return view('admin.barang', ['barang' => $data]);
    }

    /**
     * controller route customer admin
     */
    public function customer()
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        $data = $this->customer->getCustomer();
        return view('admin.customer', ['customer' => $data]);
    }

    // ========================================================== //

    // ====================== actions user ====================== //

    public function delUser($id)
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        return $this->user->deleteUser($id);
    }

    public function upUser(Request $req, $id)
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        return $this->user->updateUser([
            'name' => $req->nama,
            'email' => $req->email
        ], $id);
    }

    public function getIdu($id)
    {
        return $this->user->getUpdate($id);
    }

    public function addUser(Request $req)
    {
        return $this->auth->Register($req);
    }

    // ===================== end actions user ==================== //

    // ====================== actions barang ===================== //

    public function upBarang(Request $req, $id)
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        return $this->barang->updateBarang([
            'nama' => $req->nama,
            'satuan' => $req->satuan,
            'kemasan' => $req->kemasan,
            'jenis' => $req->jenis,
            'hrg_jual' => $req->harga
        ], $id);
    }

    public function getIdb($id)
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        return $this->barang->getUpdate($id);
    }

    public function addBarang(Request $req)
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        return $this->barang->addBarang([
            'nama' => $req->nama,
            'satuan' => $req->satuan,
            'kemasan' => $req->kemasan,
            'jenis' => $req->jenis,
            'hrg_jual' => $req->harga
        ]);
    }

    public function delBarang($id)
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        return $this->barang->deleteBarang($id);
    }

    // ==================== end actions barang =================== //

    // ===================== actions customer ==================== //

    /* function add data customer */
    public function addCustomer(Request $req)
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        return $this->customer->addCustomer([
            'nama' => $req->nama,
            'alamat' => $req->alamat,
            'no_telp' => $req->no
        ]);
    }

    /** function get data update **/
    public function getIdc($id)
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        return $this->customer->getUpdate($id);
    }

    /* function update data customer */
    public function upCustomer(Request $req, $id)
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        return $this->customer->updateCustomer([
            'nama' => $req->nama,
            'alamat' => $req->alamat,
            'no_telp' => $req->no
        ], $id);
    }

    /* function delete data customer */
    public function delCustomer($id)
    {
        (!isAdmin()) ? abort('401', 'cant access this page') : '';
        return $this->customer->deleteCustomer($id);
    }

    // =================== end actions customer ================== //

}
