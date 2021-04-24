<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * function geting user
     * @param id
     */
    public function getUser($id)
    {
        $user = User::where('email', $id)->first();

        return ['status' => 'ok', 'data' => $user];
    }

    /**
     * function call viewregister
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewLogin()
    {
        return view('register', ['title' => 'Halaman | Login']);
    }

    /**
     * function proceesing login
     * @param Request
     */
    public function Login(Request $req)
    {
        $validate = $this->getUser($req->email);

        if ($validate == null) {
            return response()->json(['pesan' => 'email tidak terdaftar']);
        }

        $this->createSession($req, $validate);

        return password_verify($req->password, $validate['password']) ? response()->json(['pesan' => 'login sukses']) : response()->json(['pesan' => 'login gagal']);
    }
    
    /**
     * function proceesing register
     * @param Request
     * @return json data
     */
    public function Register(Request $req)
    {
        $validate = User::insert([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'level' => 1
        ]);

        return $validate ? response()->json(['pesan' => 'register sukses']) : response()->json(['pesan' => 'register gagal']);
    }

    /**
     * function create session
     * @param Request
     * @return void
     */
    public function createSession($req, $validate)
    {
        $req->session()->put('username', $validate['name']);
        $req->session()->put('email', $validate['email']);
        $req->session()->put('user_id', $validate['id']);
    }
    
}
