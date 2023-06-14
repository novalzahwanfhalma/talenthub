<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustriController extends Controller
{
    public function create()
    {
        return view('regis');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_industri' => 'required',
            'username' => 'required|email|unique:industri',
            'contact' => 'required',
            'password' => 'required|min:12',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $industri = new Industri();
        $industri->nama_industri = $validatedData['nama'];
        $industri->username = $validatedData['email'];
        $industri->password = Hash::make($validatedData['password']);
        $industri->contact = $validatedData['contact'];
        // tambahkan atribut lainnya
        $industri->save();

        return redirect()->back()->with('success', 'Registrasi berhasil');
    }
}
