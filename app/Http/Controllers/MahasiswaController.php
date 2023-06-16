<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function create()
    {
        return view('regis');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim',
            'nama' => 'required',
            'username' => 'required|unique:mahasiswa,username',
            'no_hp' => 'required',
            'password' => 'required|min:8',
            'email' => 'email|unique:mahasiswa',
            'alamat' => 'required'
        ]);


        $mahasiswa = Mahasiswa::create([
            'nim' => $request->input('nim'),
            'nama_mhs' => $request->input('nama'),
            'username' => $request->input('username'),
            'no_hp' => $request->input('no_hp'),
            'password' => bcrypt($request->input('password')),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'ipk' => '-',
            'foto' => '-',

        ]);


        if ($mahasiswa->save()) {
            return redirect()->back()->with([
                'notifikasi' => 'Register berhasil !',
                'type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'notifikasi' => 'Register gagal, silahkan coba lagi !',
                'type' => 'error'
            ]);
        }
    }
    private function validateMhs(Request $request)
    {
        return $request->validate([
            'nim' => 'required|unique:mahasiswa,nim',
            'nama_mhs' => 'required',
            'username' => 'required|unique:mahasiswa,username',
            'no_hp' => 'required',
            'password' => 'required|min:8',
            'email' => 'email|unique:mahasiswa',
            'alamat' => 'required'
        ]);
    }
}
