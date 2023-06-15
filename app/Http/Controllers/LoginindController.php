<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User2;
use Illuminate\Http\Request;

class LoginindController extends Controller
{
    public function halamanlogin()
    {
        return view('Loginind.loginind');
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username harus ada',
            'password.required' => 'Password harus diisi',
        ]);

        $credentials = $request->only('username', 'password');

        if (auth()->guard('industri')->attempt($credentials)) {
            return redirect('/lowonganind');
        }


        return back()->withErrors('Invalid credentials');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function proses_logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/index');
    }

    public function registrasi()
    {
        return view('Loginind.registrasiind');
    }

    public function simpanregistrasi(Request $request)
    {
    }
}
