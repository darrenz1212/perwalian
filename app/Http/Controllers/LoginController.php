<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            "nrp" => "required",
            "password" => "required"
        ]);

        $data = [
            'nrp' => $request->nrp,
            "password" => $request->password
        ];

        $x = $request->role;

        if(Auth::attempt($data)){
            dd($x);
        }else{
            dd('Login Gagal');
        }
    }
}
