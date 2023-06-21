<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Storage;
// use App\Http\Controllers\Mahasiswa;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolio = Portofolio::all();

        return view('mahasiswa/cv/input1', ['portofolio' => $portofolio]);
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


        if ( $request->hasFile('bukti')) {
            $bukti = $request->file('bukti')->store('public/bukti');
            $bukti = basename($bukti);
        } else {
            $bukti = null;
        }

        $user = auth()->user();
        if ($user) {
            $mahasiswa = Mahasiswa::where('nim', $user->nim)->first();


            if ($mahasiswa) {
                $portofolio = new Portofolio();
                $portofolio->nim = mahasiswa::where('nim', auth()->user()->nim)->value('nim');
                // Menggunakan model Mahasiswa untuk mendapatkan NIM
                // $portofolio->nim = Mahasiswa::user()->nim;

                $portofolio->judul = $request->judul;
                $portofolio->deskripsi = $request->deskripsi;

                $portofolio->bukti = $bukti ? 'bukti/' . $bukti : null;
                $portofolio->link = $request->link;

            // $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();
            // if ($mahasiswa) {
            //     $portofolio->nim = $mahasiswa->nim;
            //     $portofolio->save();
            // } else {
            //     // Tangani kasus ketika data mahasiswa tidak ditemukan
            //     throw new \Exception('Data Mahasiswa tidak ditemukan');
            // }


                if ( $portofolio->save() ) {
                    return back()->with([
                        'notifikasi' => 'Data Berhasil disimpan !',
                        'type' => 'success'
                    ]);
                } else {
                    return redirect()->back()->with([
                        'notifikasi' => 'Data gagal disimpan !',
                        'type' => 'error'
                    ]);
                }

            } else {
                return redirect()->back()->with([
                    'notifikasi' => 'Data mahasiswa tidak ditemukan!',
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

    public function destroy(string $id_portofolio)
    {
        // Menambahkan fungsi firstOrFail
        $portofolio = Portofolio::where(['id_portofolio' => $id_portofolio])->firstOrFail();

        // Mengambil data foto
        $bukti = $portofolio->bukti;

        if ($portofolio->count() < 1) {
            return redirect()->back()->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

            if ($portofolio->delete()) {

                // Hapus file foto jika ada
                if (!empty($bukti) && Storage::exists($bukti)) {
                    Storage::delete($bukti);
                }
                return redirect()->route('portofolio.index')->with([
                    'notifikasi' => 'Data berhasil dihapus! ',
                    'type' => 'success'
                ]);
        } else {
            return redirect()->back()->with([
                'notifikasi' => 'Data gagal dihapus! ',
                'type' => 'error'
            ]);
        }
    } 

    public function edit(string $id)
    {
        $portofolio = Portofolio::where(['nim' => $nim ]);

        if ( $portofolio->count() < 1 ) {
            return redirect('/cv1/edit-modal')->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);

        }

        return view('portofolio.index', ['portofolio' => $portofolio->first() ]);
    }

    public function update(Request $request, string $nim)
    {
        $portofolio = Portofolio::where('nim', $nim)->firstOrFail();

        // ddd($request->old_nim, $request->nim);
        $validatedData = $request->validate([
            'nim' => [
                'required',
                'unique:portofolios,nim,' . $request->old_nim . ',nim',
            ],
            'judul' => 'required',
            'deskripsi' => 'required',
            'bukti' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'link' => '-',
        ], [
            'judul.required' => 'Judul harus diisi.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'bukti.required' => 'Bukti harus di-upload.',
            'bukti.image' => 'Bukti harus berupa gambar.',
            'bukti.mimes' => 'Tipe file yang diizinkan adalah JPEG, JPG, dan PNG.',
            'bukti.max' => 'Ukuran file tidak boleh lebih dari 2 MB.',
        ]);


        // Cek Apakah Ganti Foto
        if ($request->ganti_foto == 1) {
            $request->validate([
                'foto' => [
                'required',
                // validasi 
                'mimes:jpeg,jpg,png',
                'max:2048'

                ]
            ], [
                'foto.required' => 'Foto harus di-upload.',
                // lanjutan validasi
                'foto.mimes' => 'Foto harus berformat jpeg, jpg, atau png.',
                'foto.max' => 'Foto tidak boleh lebih dari 2 MB.',
            ]);

            if ($request->hasFile('foto')) {
                $foto = $request->file('foto')->store('public/foto');
                $foto = basename($foto);
                $foto = 'foto/' . $foto;
            } else {
                $foto = null;
            }
        } else {
            $foto = $portofolio->foto;
        }

        // Foto Lama
        $old_foto = $portofolio->foto;
        
        $portofolio->nim = $request->nim;
        $portofolio->judul = $request->judul;
        $portofolio->deskripsi = $request->deskripsi;
        $portofolio->bukti = $request->bukti;
        $portofolio->link = $request->link;

        $portofolio->foto = $foto ?? null;
        
        if ($portofolio->save()) {
            
            // Hapus file foto lama jika ada dan jika ganti foto
            if ($request->ganti_foto == 1) {

                if (!empty($old_foto) && Storage::exists($old_foto)) {
                    Storage::delete($old_foto);
                }
            }
            
            return redirect('/cv1')->with([
                'notifikasi' => 'Data Berhasil diedit !',
                'type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                    'notifikasi' => 'Data gagal diedit !',
                    'type' => 'error'
                ]);
        }
    }

}