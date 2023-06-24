<?php

namespace App\Http\Controllers;

use App\Models\industri;
use App\Models\bidang_industri;
use App\Models\tipe_industri;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class IndustriController extends Controller
{
    public function create()
    {
        return view('regis');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_industri' => 'required',
            'username' => 'required|unique:industri,username',
            'contact' => 'required',
            'password' => 'required|min:8',
            'alamat' => '-',
            'foto' => '-',
            'deskripsi_industri' => '-',
            'id_bidang' => '-',
            'id_tipe' => '-',
            'email' => '-',
            'website' => '-',
            'facebook' => '-',
            'instagram' => '-',
            'twitter' => '-',

            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $industri = Industri::create([
            'nama_industri' => $request->input('nama_industri'),
            'username' => $request->input('username'),
            'contact' => $request->input('contact'),
            'password' => bcrypt($request->input('password')),
            'alamat' => '-',
            'foto' => '-',
            'deskripsi_industri' => '-',
            'id_bidang' => '-',
            'id_tipe' => '-',
            'email' => '-',
            'website' => '-',
            'facebook' => '-',
            'instagram' => '-',
            'twitter' => '-',

        ]);

        if ($industri->save()) {
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
    private function validateInd(Request $request)
    {
        return $request->validate([
            'nama_industri' => 'required',
            'username' => 'required|unique:industri,username',
            'contact' => 'required',
            'password' => 'required|min:8'
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $nim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * {{ Auth::guard('industri')->user()->nama_industri }}
     */
    public function edit()
    {
        $username = Auth::guard('industri')->user()->username;
        $bidang_industri = bidang_industri::all();
        $tipe_industri = tipe_industri::all();

        $industri = industri::where(['username' => $username])->first();

        if (!$industri) {
            return redirect()->back()->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

        return view('/industri/profil/profil_ind', compact(['industri', 'bidang_industri', 'tipe_industri']));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_industri)
    {
        $industri = industri::where('id_industri', $id_industri)->firstOrFail();
        $validatedData = $request->validate([
            'nama_industri' => 'required',
            'id_tipe' => 'required',
            'id_bidang' => 'required',
            'deskripsi_industri' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'contact' => 'required',
            'website' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',

        ], [
            'nama_industri.required' => 'Nama harus diisi.',
            'ipk.required' => 'IPK harus diisi.',
            'id_tipe.required' => 'Tipe harus diisi.',
            'id_bidang.required' => 'Bidang harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'alamat.required' => 'Alamat harus diisi.',
            'contact.required' => 'Nomor telepon harus diisi.',
            'deskripsi_industri.required' => 'Deskripsi harus diisi.',
            'website.required' => 'Website harus diisi.',
            'facebook.required' => 'Facebook harus diisi.',
            'instagram.required' => 'Instagram harus diisi.',
            'twitter.required' => 'Twitter harus diisi.'

        ]);

        if ($request->ganti_foto == 1) {
            $request->validate([
                'foto' => 'required'
            ], [
                'foto.required' => 'Foto harus diupload'
            ]);

            //new line
            if ($request->hasFile('foto')) {
                $foto = $request->file('foto')->store('public/foto');
                $foto = basename($foto);
                $foto = 'foto/' . $foto;
            } else {
                $foto = null;
            }
        } else {
            $foto = $industri->foto;
        }

        $industri = industri::where('id_industri', $id_industri)->first();
        $old_foto = $industri->foto;
        $industri->nama_industri = $request->nama_industri;
        $industri->email = $request->email;
        $industri->id_tipe = $request->id_tipe;
        $industri->id_bidang = $request->id_bidang;
        $industri->alamat = $request->alamat;
        $industri->contact = $request->contact;
        $industri->deskripsi_industri = $request->deskripsi_industri;
        $industri->website = $request->website;
        $industri->facebook = $request->facebook;
        $industri->instagram = $request->instagram;
        $industri->twitter = $request->twitter;
        $industri->foto = $foto ?? null;

        if ($industri->save()) {

            // hapus file foto lama jika ada dan jika ganti foto
            if ($request->ganti_foto == 1) {
                if (!empty($old_foto) && Storage::exists($old_foto)) {
                }
            }

            return redirect('/indprof')->with([
                'notifikasi' => 'Data Berhasil Diedit !',
                'type' => 'success'
            ]);
        } else {
            return redirect('/indprof')->with([
                'notifikasi' => 'Data gagal diedit !',
                'type' => 'error'
            ]);
        }
    }
}