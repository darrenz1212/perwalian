<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->nrp = $request->nrp;
        $user->nama = $request->nama;
        $user->prodi = $request->prodi;
        $user->fakultas = $request->fakultas;
        $user->password = bcrypt($request->password);
        $user->role = 0;
        $user->save();
        return redirect('/')->with(["message"=>"tambah siswa berhasil"]);
    }
}
