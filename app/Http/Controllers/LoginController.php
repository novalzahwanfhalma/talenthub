<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view('Login.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/lowongan');
        }
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function registrasi()
    {
        return view('Login.registrasi');
    }

    public function simpanregistrasi(Request $request)
    {
        dd($request->all());

        User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        return view('lowongan');
    }
}
