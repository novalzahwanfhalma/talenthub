<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function halaman_register() {
        return view('auth/register');
    }

    public function proses_register( Request $request) {
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'password_confirm' => 'required|same:password'

        ], [
            'nama.required' => 'Kolom Nama tidak boleh kosong!',
            'email.required' => 'Kolom Email tidak boleh kosong!',
            'email.unique' => 'Email sudah digunakan!',
            'password.required' => 'Kolom Password tidak boleh kosong!',
            'password_confirm.required' => 'Kolom Konfirmasi Password tidak boleh kosong!',
            'password_confirm.same' => 'Password tidak sama!',

        ]);

        $user = new User();

        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ( $user->save() ) {
            return redirect()->back()->with([
                'notifikasi' => 'Register Berhasil !',
                'type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'notifikasi' => 'Register Gagal, Silahkan Coba Lagi !',
                'type' => 'error'
            ]);
        }
    }
}
