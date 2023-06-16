<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikasi;
use App\Models\Mahasiswa;

use Illuminate\Support\Facades\Storage;

class SertifikasiController extends Controller
{
    public function index()
    {
        $sertifikasi = Sertifikasi::all();

        return view('mahasiswa/cv/input5', ['sertifikasi' => $sertifikasi]);
    }

    public function create()
    {
        return view('store_sertifikasi');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'judul' => 'required',
            'tahun' => 'required',
            'institusi' => 'required',
            'deskripsi' => 'required',
            'link' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            

        ], [

            'judul.required' => 'Judul harus diisi.',
            'tahun.required' => 'Tahun Sertifikat harus diisi.',
            'institusi.required' => 'Nama Institusi harus diisi.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'link.required' => 'Lampiran dokumen harus diisi',
            'link.image' => 'Lampiran harus berupa gambar.',
            'link.mimes' => 'Tipe file yang diizinkan adalah JPEG, JPG, dan PNG.',
            'link.max' => 'Ukuran file tidak boleh lebih dari 2 MB.',
    

        ]);
        

        if ( $request->hasFile('link')) {
            $link = $request->file('link')->store('public/link');
            $link = basename($link);
        } else {
            $link = null;
        }

        $user = auth()->user();
        if ($user) {
            $mahasiswa = Mahasiswa::where('nim', $user->nim)->first();

        
            if ($mahasiswa) {
                $sertifikasi = new Sertifikasi();
                $sertifikasi->nim = mahasiswa::where('nim', auth()->user()->nim)->value('nim');
                // Menggunakan model Mahasiswa untuk mendapatkan NIM
                // $sertifikasi->nim = Mahasiswa::user()->nim;
                
                $sertifikasi->judul = $request->judul;
                $sertifikasi->tahun = $request->tahun;
                $sertifikasi->institusi = $request->institusi;
                $sertifikasi->deskripsi = $request->deskripsi;
                $sertifikasi->link = $link ? 'lamp_stf/' . $link : null;
                

                

            // $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();
            // if ($mahasiswa) {
            //     $sertifikasi->nim = $mahasiswa->nim;
            //     $sertifikasi->save();
            // } else {
            //     // Tangani kasus ketika data mahasiswa tidak ditemukan
            //     throw new \Exception('Data Mahasiswa tidak ditemukan');
            // }


                if ( $sertifikasi->save() ) {
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

    public function destroy(string $id_sertifikasi)
    {
        
        // Menambahkan fungsi firstOrFail
        $sertifikasi = Sertifikasi::where(['id_sertifikasi' => $id_sertifikasi])->firstOrFail();
        
        // Mengambil data $link
        $link = $sertifikasi->link;

        if ($sertifikasi->count() < 1) {
            return redirect()->back()->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

            if ($sertifikasi->delete()) {

                // Hapus file foto jika ada
                if (!empty($link) && Storage::exists($link)) {
                    Storage::delete($link);
                }
                return redirect()->route('sertifikasi.index')->with([
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
