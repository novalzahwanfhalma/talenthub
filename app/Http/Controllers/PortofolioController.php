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
            'bukti' => 'required|file|mimes:pdf|max:2048',
            'link' => 'nullable|url',

        ], [

            'judul.required' => 'Judul sudah digunakan.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'bukti.required' => 'Bukti harus di-upload.',
            'bukti.image' => 'Bukti harus berupa file.',
            'bukti.mimes' => 'Tipe file yang diizinkan adalah PDF.',
            'bukti.max' => 'Ukuran file tidak boleh lebih dari 2 MB.',
            'link.url' => 'Link harus berupa URL',



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

        // Mengambil data bukti
        $bukti = $portofolio->bukti;

        if ($portofolio->count() < 1) {
            return redirect()->back()->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

            if ($portofolio->delete()) {

                // Hapus file bukti jika ada
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

    public function update(Request $request, string $id_portofolio)
    {
        $portofolio = Portofolio::where('id_portofolio', $id_portofolio)->firstOrFail();

        // ddd($request->old_nim, $request->nim);
        $validatedData = $request->validate([
            'nim' => [
                'required',
                'unique:portofolio,nim,' . $request->old_nim . ',nim',
            ],
            'judul' => '',
            'deskripsi' => '',
            'link' => '',
        ], [
            'nim.required' => 'NIM harus diisi.',
            'judul.required' => 'Judul harus diisi.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
        ]);


        // Cek Apakah Ganti Foto
        if ($request->ganti_bukti == 1) {
            $request->validate([
                'bukti' => [
                    'required',
                    'mimes:jpeg,jpg,png',
                    'max:2048'
                ]
            ], [
                'bukti.required' => 'Bukti harus di-upload.',
                'bukti.mimes' => 'Bukti harus berformat JPEG, JPG, dan PNG.',
                'bukti.max' => 'Bukti tidak boleh lebih dari 2 MB.',
            ]);

            if ($request->hasFile('bukti')) {
                $bukti = $request->file('bukti')->store('public/storage/bukti');
                $bukti = basename($bukti);
                $bukti = 'bukti/' . $bukti;
            } else {
                $bukti = null;
            }
        } else {
            $bukti = $portofolio->bukti;
        }

        // Bukti Lama
        $old_bukti = $portofolio->bukti;

        
        $portofolio->nim = $request->nim;
        $portofolio->judul = $request->judul;
        $portofolio->deskripsi = $request->deskripsi;
        $portofolio->bukti = $bukti ?? null;;
        $portofolio->link = $request->link;

        // $portofolio->bukti = $bukti ?? null;
        
        if ($portofolio->save()) {
            
            // Hapus file bukti lama jika ada dan jika ganti bukti
            if ($request->ganti_bukti == 1) {

                if (!empty($old_bukti) && Storage::exists($old_bukti)) {
                    Storage::delete($old_bukti);
                }
            }
            
            return back()->with([
                'notifikasi' => 'Data Berhasil diedit !',
                'type' => 'success'
            ]);
        } else {
            return back()->with([
                    'notifikasi' => 'Data gagal diedit !',
                    'type' => 'error'
                ]);
        }
    }

}