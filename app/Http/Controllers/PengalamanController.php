<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengalaman;
use App\Models\Mahasiswa;

use Illuminate\Support\Facades\Storage;

class PengalamanController extends Controller
{
    public function index()
    {
        $pengalaman = Pengalaman::all();

        return view('mahasiswa/cv/input3', ['pengalaman' => $pengalaman]);
    }

    public function create()
    {
        return view('store_pengalaman');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'judul' => 'required',
            'perusahaan' => 'required',
            'lokasi' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'tipe' => 'required',
            

        ], [

            'judul.required' => 'Judul sudah digunakan.',
            'perusahaan.required' => 'Nama Perusahaan harus diisi.',
            'lokasi.required' => 'Lokasi harus diisi.',
            'tgl_mulai.required' => 'Tanggal mulai harus diisi.',
            'tgl_selesai.required' => 'Tanggal selesai harus diisi.',
            'tipe.required' => 'Tipe pengalaman harus diisi.',
            
        ]);
        

        $user = auth()->user();
        if ($user) {
            $mahasiswa = Mahasiswa::where('nim', $user->nim)->first();

        
            if ($mahasiswa) {
                $pengalaman = new Pengalaman();
                $pengalaman->nim = mahasiswa::where('nim', auth()->user()->nim)->value('nim');
                // Menggunakan model Mahasiswa untuk mendapatkan NIM
                // $pengalaman->nim = Mahasiswa::user()->nim;
                
                $pengalaman->judul = $request->judul;
                $pengalaman->perusahaan = $request->perusahaan;
                $pengalaman->lokasi = $request->lokasi;
                $pengalaman->tgl_mulai = $request->tgl_mulai;
                $pengalaman->tgl_selesai = $request->tgl_selesai;
                $pengalaman->tipe = $request->tipe;
                

            // $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();
            // if ($mahasiswa) {
            //     $pengalaman->nim = $mahasiswa->nim;
            //     $pengalaman->save();
            // } else {
            //     // Tangani kasus ketika data mahasiswa tidak ditemukan
            //     throw new \Exception('Data Mahasiswa tidak ditemukan');
            // }


                if ( $pengalaman->save() ) {
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

    public function destroy(string $id_pengalaman)
    {
        // Menambahkan fungsi firstOrFail
        $pengalaman = Pengalaman::where(['id_pengalaman' => $id_pengalaman])->firstOrFail();
        
        if ($pengalaman->count() < 1) {
            return redirect()->back()->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

            if ($pengalaman->delete()) {

                // // Hapus file foto jika ada
                // if (!empty($lampiran_pendidikan) && Storage::exists($lampiran_pendidikan)) {
                //     Storage::delete($lampiran_pendidikan);
                // }
                return redirect()->route('pengalaman.index')->with([
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

    public function update(Request $request, string $id_pengalaman)
    {
        $pengalaman = Pengalaman::where('id_pengalaman', $id_pengalaman)->firstOrFail();

        // ddd($request->old_nim, $request->nim);
        $validatedData = $request->validate([
            'nim' => [
                'required',
                // 'unique:pengalaman,nim,' . $request->old_nim . ',nim',
            ],
            'judul' => 'required',
            'perusahaan' => 'required',
            'lokasi' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'tipe' => 'required',
            

        ], [

            'nim.required' => 'NIM harus diisi.',
            'judul.required' => 'Judul sudah digunakan.',
            'perusahaan.required' => 'Nama Perusahaan harus diisi.',
            'lokasi.required' => 'Lokasi harus diisi.',
            'tgl_mulai.required' => 'Tanggal mulai harus diisi.',
            'tgl_selesai.required' => 'Tanggal selesai harus diisi.',
            'tipe.required' => 'Tipe pengalaman harus diisi.',
            
        ]);
        

        $pengalaman->nim = $request->nim;
        $pengalaman->judul = $request->judul;
        $pengalaman->perusahaan = $request->perusahaan;
        $pengalaman->lokasi = $request->lokasi;
        $pengalaman->tgl_mulai = $request->tgl_mulai;
        $pengalaman->tgl_selesai = $request->tgl_selesai;
        $pengalaman->tipe = $request->tipe;

        // $pengalaman->bukti = $bukti ?? null;
        
        if ($pengalaman->save()) {
            
            // // Hapus file bukti lama jika ada dan jika ganti bukti
            // if ($request->ganti_bukti == 1) {

            //     if (!empty($old_bukti) && Storage::exists($old_bukti)) {
            //         Storage::delete($old_bukti);
            //     }
            // }
            
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
