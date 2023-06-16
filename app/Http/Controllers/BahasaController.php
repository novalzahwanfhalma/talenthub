<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahasa;
use App\Models\Mahasiswa;

use Illuminate\Support\Facades\Storage;

class BahasaController extends Controller
{
    public function index()
    {
        $bahasa = Bahasa::all();

        return view('mahasiswa/cv/input6', ['bahasa' => $bahasa]);
    }

    public function create()
    {
        return view('store_bahasa');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'nama_bahasa' => 'required',
            'status' => 'required',
            'score' => 'required',
            'lampiran_bahasa' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            

        ], [

            'nama_bahasa.required' => 'Judul harus diisi.',
            'status.required' => 'Tahun Sertifikat harus diisi.',
            'score.required' => 'Nama Institusi harus diisi.',
            'lampiran_bahasa.required' => 'Lampiran dokumen harus diisi',
            'lampiran_bahasa.image' => 'Lampiran harus berupa gambar.',
            'lampiran_bahasa.mimes' => 'Tipe file yang diizinkan adalah JPEG, JPG, dan PNG.',
            'lampiran_bahasa.max' => 'Ukuran file tidak boleh lebih dari 2 MB.',
    

        ]);
        

        if ( $request->hasFile('lampiran_bahasa')) {
            $lampiran_bahasa = $request->file('lampiran_bahasa')->store('public/lampiran_bahasa');
            $lampiran_bahasa = basename($lampiran_bahasa);
        } else {
            $lampiran_bahasa = null;
        }

        $user = auth()->user();
        if ($user) {
            $mahasiswa = Mahasiswa::where('nim', $user->nim)->first();

        
            if ($mahasiswa) {
                $bahasa = new Bahasa();
                $bahasa->nim = mahasiswa::where('nim', auth()->user()->nim)->value('nim');
                // Menggunakan model Mahasiswa untuk mendapatkan NIM
                // $bahasa->nim = Mahasiswa::user()->nim;
                
                $bahasa->nama_bahasa = $request->nama_bahasa;
                $bahasa->status = $request->status;
                $bahasa->score = $request->score;
                $bahasa->lampiran_bahasa = $lampiran_bahasa ? 'lamp_stf/' . $lampiran_bahasa : null;
                

                

            // $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();
            // if ($mahasiswa) {
            //     $bahasa->nim = $mahasiswa->nim;
            //     $bahasa->save();
            // } else {
            //     // Tangani kasus ketika data mahasiswa tidak ditemukan
            //     throw new \Exception('Data Mahasiswa tidak ditemukan');
            // }


                if ( $bahasa->save() ) {
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

    public function destroy(string $id_bahasa)
    {
        
        // Menambahkan fungsi firstOrFail
        $bahasa = Bahasa::where(['id_bahasa' => $id_bahasa])->firstOrFail();
        
        // Mengambil data $lampiran_bahasa
        $lampiran_bahasa = $bahasa->lampiran_bahasa;

        if ($bahasa->count() < 1) {
            return redirect()->back()->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

            if ($bahasa->delete()) {

                // Hapus file foto jika ada
                if (!empty($lampiran_bahasa) && Storage::exists($lampiran_bahasa)) {
                    Storage::delete($lampiran_bahasa);
                }
                return redirect()->route('bahasa.index')->with([
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
