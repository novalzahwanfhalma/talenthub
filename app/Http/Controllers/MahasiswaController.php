<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Memanggil seluruh data dari table student
        $Mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', ['mahasiswa' => $Mahasiswa]);
    }
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
            'alamat' => 'required',
            'ipk' => '',
            'foto' => '',
            'id_prodi' => '',
            'deskripsi' => '',
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
            'id_prodi' => '0',
            'foto' => '-',
            'deskripsi' => '-',

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
            'alamat' => 'required',
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
     */
    public function edit()
    {

        $username = Auth::user()->username;
        $prodi = Prodi::all();
        $mahasiswa = Mahasiswa::where(['username' => $username])->first();
        if ($mahasiswa->count() < 1) {
            return redirect()->back()->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }
        return view('mahasiswa/profil/editprofil', compact(['mahasiswa', 'prodi']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        $validatedData = $request->validate([
            'nim' => [
                'unique:mahasiswa,nim,' . $request->old_nim . ',nim',

            ],
            'nama_mhs' => 'required',
            'ipk' => 'required',
            'id_prodi' => 'required',
            'status' => 'required',
            'email' => 'required|email',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'deskripsi' => 'required',



        ], [
            'nama_mhs.required' => 'Nama harus diisi.',
            'ipk.required' => 'IPK harus diisi.',
            'id_prodi.required' => 'Prodi harus diisi.',
            'status.required' => 'Status harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi.',
            'alamat.required' => 'Nama harus diisi.',
            'no_hp.required' => 'Nomor telepon harus diisi.',
            'deskripsi.required' => 'Deskripsi harus diisi.'

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
            $foto = $mahasiswa->foto;
        }

        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        $old_foto = $mahasiswa->foto;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_mhs = $request->nama_mhs;
        $mahasiswa->email = $request->email;
        $mahasiswa->ipk = $request->ipk;
        $mahasiswa->id_prodi = $request->id_prodi;
        $mahasiswa->status = $request->status;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->no_hp = $request->no_hp;
        $mahasiswa->deskripsi = $request->deskripsi;
        $mahasiswa->foto = $foto ?? null;

        if ($mahasiswa->save()) {

            // hapus file foto lama jika ada dan jika ganti foto
            if ($request->ganti_foto == 1) {
                if (!empty($old_foto) && Storage::exists($old_foto)) {
                }
            }

            return redirect('/mhsprof')->with([
                'notifikasi' => 'Data Berhasil Diedit !',
                'type' => 'success'
            ]);
        } else {
            return redirect('/mhsprof')->with([
                'notifikasi' => 'Data gagal diedit !',
                'type' => 'error'
            ]);
        }
    }
}