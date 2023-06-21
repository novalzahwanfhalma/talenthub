<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view('Login.login');
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



        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/lowongan ')->with([
                'notifikasi' => 'Selamat datang di Talent hub !',
                'type' => 'success'
            ]);
        } else {
            return back()->with([
                'notifikasi' => 'Login gagal, username atau password salah !',
                'type' => 'error'
            ]);
        }
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/login')->with([
            'notifikasi' => 'Logout berhasil !',
            'type' => 'success'
        ]);
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
        return view('Login.registrasi');
    }

    public function simpanregistrasi(Request $request)
    {
    }
}
