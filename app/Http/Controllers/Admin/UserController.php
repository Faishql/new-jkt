<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateUser(array $req, $id)
    {
        return User::where('id', $id)->update($req)
            ? redirect('/admin')->with('pesan', 'sukses update user dengan id ' . $id)
            : redirect('/admin')->with('pesan', 'gagal mengupdate data user');
    }

    public function getUser()
    {
        return User::get();
    }

    public function deleteUser($id)
    {
        return User::where('id', $id)->delete()
            ? redirect('/admin')->with('pesan', 'sukses delete user dengan id ' . $id)
            : redirect('/admin')->with('pesan', 'gagal delete data user');
    }
}
