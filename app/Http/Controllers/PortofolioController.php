<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolio = Portofolio::all();

        return view('mahasiswa/cv/input1', ['mhs_portofolio' => $portofolio]);
    }

    public function create()
    {
        return view('store_porto');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([


            'judul' => 'required',
            'deskripsi' => 'required',
            'bukti' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'link' => ''

        ], [

            'judul.required' => 'Judul sudah digunakan.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'bukti.required' => 'Bukti harus di-upload.',
            'bukti.image' => 'Bukti harus berupa gambar.',
            'bukti.mimes' => 'Tipe file yang diizinkan adalah JPEG, JPG, dan PNG.',
            'bukti.max' => 'Ukuran file tidak boleh lebih dari 2 MB.',
            


        ]);

        $portofolio = new Portofolio();
            $portofolio->nim = "4342211017";
            $portofolio->judul = $request->judul;
            $portofolio->deskripsi = $request->deskripsi;
            $portofolio->bukti = 'afagagfag';
            $portofolio->link = $request->link;


        if ( $portofolio->save() ) {
            return redirect('/mahasiswa/cv/input1')->with([
                'notifikasi' => 'Data Berhasil disimpan !',
                'type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'notifikasi' => 'Data gagal disimpan !',
                'type' => 'error'
            ]);
        }
        // if ($mahasiswa) {
        //     return redirect()->back()->with('success', 'Registrasi berhasil');
        // } else {
        //     return "gagal";
        // }
    }
}