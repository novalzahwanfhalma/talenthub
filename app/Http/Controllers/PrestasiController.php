<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use App\Models\Mahasiswa;

use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::all();

        return view('mahasiswa/cv/input4', ['prestasi' => $prestasi]);
    }

    public function create()
    {
        return view('store_prestasi');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'judul_prestasi' => 'required',
            'penyelenggara' => 'required',
            'deskripsi' => 'required',
            'tgl' => 'required',
            'lampiran_dokumen' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            

        ], [

            'judul_prestasi.required' => 'Judul Prestasi harus diisi.',
            'penyelenggara.required' => 'Nama Penyelenggara harus diisi.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'tgl.required' => 'Tanggal harus diisi.',
            'lampiran_dokumen.required' => 'Lampiran dokumen harus diisi',
            'lampiran_dokumen.image' => 'Lampiran harus berupa gambar.',
            'lampiran_dokumen.mimes' => 'Tipe file yang diizinkan adalah JPEG, JPG, dan PNG.',
            'lampiran_dokumen.max' => 'Ukuran file tidak boleh lebih dari 2 MB.',
            


        ]);
        

        if ( $request->hasFile('lampiran_dokumen')) {
            $lampiran_dokumen = $request->file('lampiran_dokumen')->store('public/lampiran_dokumen');
            $lampiran_dokumen = basename($lampiran_dokumen);
        } else {
            $lampiran_dokumen = null;
        }

        $user = auth()->user();
        if ($user) {
            $mahasiswa = Mahasiswa::where('nim', $user->nim)->first();

        
            if ($mahasiswa) {
                $prestasi = new Prestasi();
                $prestasi->nim = mahasiswa::where('nim', auth()->user()->nim)->value('nim');
                // Menggunakan model Mahasiswa untuk mendapatkan NIM
                // $prestasi->nim = Mahasiswa::user()->nim;
                
                $prestasi->judul_prestasi = $request->judul_prestasi;
                $prestasi->penyelenggara = $request->penyelenggara;
                $prestasi->deskripsi = $request->deskripsi;
                $prestasi->tgl = $request->tgl;
                $prestasi->lampiran_dokumen = $lampiran_dokumen ? 'lamp_dok/' . $lampiran_dokumen : null;
                

                

            // $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();
            // if ($mahasiswa) {
            //     $prestasi->nim = $mahasiswa->nim;
            //     $prestasi->save();
            // } else {
            //     // Tangani kasus ketika data mahasiswa tidak ditemukan
            //     throw new \Exception('Data Mahasiswa tidak ditemukan');
            // }


                if ( $prestasi->save() ) {
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

    public function destroy(string $id_prestasi)
    {
        
        // Menambahkan fungsi firstOrFail
        $prestasi = Prestasi::where(['id_prestasi' => $id_prestasi])->firstOrFail();
        
        // Mengambil data $lampiran_dokumen
        $lampiran_dokumen = $prestasi->lampiran_dokumen;

        if ($prestasi->count() < 1) {
            return redirect()->back()->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

            if ($prestasi->delete()) {

                // Hapus file foto jika ada
                if (!empty($lampiran_dokumen) && Storage::exists($lampiran_dokumen)) {
                    Storage::delete($lampiran_dokumen);
                }
                return redirect()->route('prestasi.index')->with([
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
