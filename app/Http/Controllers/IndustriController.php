<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    public function create()
    {
        return view('regisind');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_industri' => 'required',
            'username' => 'required|unique:industri,username',
            'contact' => 'required',
            'password' => 'required|min:8'
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $industri = Industri::create([
            'nama_industri' => $request->input('nama'),
            'username' => $request->input('username'),
            'contact' => $request->input('contact'),
            'password' => bcrypt($request->input('password'))
        ]);

        if ($industri) {
            return redirect()->back()->with('success', 'Registrasi berhasil');
        } else {
            return "gagal";
        }
    }
    private function validateInd(Request $request)
    {
        return $request->validate([
            'nama_industri' => 'required',
            'username' => 'required|unique:industri,username',
            'contact' => 'required',
            'password' => 'required|min:8'
        ]);
    }
}