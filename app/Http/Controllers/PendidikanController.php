<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;
use App\Models\Mahasiswa;

use Illuminate\Support\Facades\Storage;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::all();

        return view('mahasiswa/cv/input2', ['pendidikan' => $pendidikan]);
    }

    public function create()
    {
        return view('store_pendidikan');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'institusi' => 'required',
            'tahun_mulai' => 'required',
            'tahun_selesai' => 'required',
            'jurusan' => 'required',
            'lampiran_pendidikan' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            

        ], [

            'institusi.required' => 'Institusi harus diisi.',
            'tahun_mulai.required' => 'Tahun mulai harus diisi.',
            'tahun_selesai.required' => 'Tahun selesai harus diisi.',
            'jurusan.required' => 'Jurusan harus diisi.',
            'lampiran.required' => 'Lampiran harus di-upload.',
            'lampiran_pendidikan.image' => 'Bukti harus berupa gambar.',
            'lampiran_pendidikan.mimes' => 'Tipe file yang diizinkan adalah JPEG, JPG, dan PNG.',
            'lampiran_pendidikan.max' => 'Ukuran file tidak boleh lebih dari 2 MB.',
            


        ]);
        

        if ( $request->hasFile('lampiran_pendidikan')) {
            $lampiran_pendidikan = $request->file('lampiran_pendidikan')->store('public/lampiran_pendidikan');
            $lampiran_pendidikan = basename($lampiran_pendidikan);
        } else {
            $lampiran_pendidikan = null;
        }

        $user = auth()->user();
        if ($user) {
            $mahasiswa = Mahasiswa::where('nim', $user->nim)->first();

        
            if ($mahasiswa) {
                $pendidikan = new Pendidikan();
                $pendidikan->nim = mahasiswa::where('nim', auth()->user()->nim)->value('nim');
                // Menggunakan model Mahasiswa untuk mendapatkan NIM
                // $pendidikan->nim = Mahasiswa::user()->nim;
                
                $pendidikan->institusi = $request->institusi;
                $pendidikan->tahun_mulai = $request->tahun_mulai;
                $pendidikan->tahun_selesai = $request->tahun_selesai;
                $pendidikan->jurusan = $request->jurusan;
                $pendidikan->lampiran_pendidikan = $lampiran_pendidikan ? 'lamp_pddk/' . $lampiran_pendidikan : null;
                

                

            // $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();
            // if ($mahasiswa) {
            //     $pendidikan->nim = $mahasiswa->nim;
            //     $pendidikan->save();
            // } else {
            //     // Tangani kasus ketika data mahasiswa tidak ditemukan
            //     throw new \Exception('Data Mahasiswa tidak ditemukan');
            // }


                if ( $pendidikan->save() ) {
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

    public function destroy(string $id_pendidikan)
    {
        // Menambahkan fungsi firstOrFail
        $pendidikan = Pendidikan::where(['id_pendidikan' => $id_pendidikan])->firstOrFail();
        
        // Mengambil data $lampiran_pendidikan
        $lampiran_pendidikan = $pendidikan->lampiran_pendidikan;

        if ($pendidikan->count() < 1) {
            return redirect()->back()->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

            if ($pendidikan->delete()) {

                // Hapus file foto jika ada
                if (!empty($lampiran_pendidikan) && Storage::exists($lampiran_pendidikan)) {
                    Storage::delete($lampiran_pendidikan);
                }
                return redirect()->route('pendidikan.index')->with([
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
