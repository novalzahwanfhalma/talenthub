<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Mahasiswa;
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
                $portofolio->bukti = 'afagagfag';
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

    public function destroy(string $nim)
    {
        // Menambahkan fungsi firstOrFail
        $student = Portofolio::where(['nim' => $nim])->firstOrFail();

        // Mengambil data foto
        $bukti = $portofolio->bukti;

        if ($portofolio->count() < 1) {
            return redirect('/student')->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

            if ($portofolio->delete()) {

                // Hapus file foto jika ada
                if (!empty($bukti) && Storage::exists($bukti)) {
                    Storage::delete($bukti);
                }
                return redirect('/student')->with([
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
}
