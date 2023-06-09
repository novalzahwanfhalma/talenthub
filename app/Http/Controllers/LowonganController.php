<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\Industri;
use App\Models\Tipe_lowongan;
use App\Models\Level_lowongan;
use App\Models\Bidang_lowongan;

class LowonganController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::all();

        return view('industri/lowongan_ind', ['lowongan' => $lowongan]);
    }

    public function index2()
    {
        $lowongan = Lowongan::simplePaginate(5);

        return view('mahasiswa/lowongan2', ['lowongan' => $lowongan]);
    }

    public function create()
    {
        return view('/inputind');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'judul' => 'required',
            'daya_tampung' => 'required',
            'kriteria' => 'required',
            'lokasi' => 'required',
            'tanggal_buka' => 'required',
            'tanggal_tutup' => 'required',
            'minimal_gaji' => 'required',
            'maksimal_gaji' => 'required',
            'id_tipe' => 'required',
            'id_level' => 'required',
            'id_bidang' => 'required',

        ], [

            'judul.required' => 'Judul harus diisi.',
            'daya_tampung.required' => 'Daya Tampung harus diisi.',
            'kriteria.required' => 'Deskripsi harus diisi.',
            'lokasi.required' => 'Lokasi harus diisi.',
            'tanggal_buka.required' => 'Tanggal buka harus diisi.',
            'tanggal_tutup.required' => 'Tanggal tutup harus diisi.',
            'minimal_gaji.required' => 'Minimal gaji harus diisi.',
            'maksimal_gaji.required' => 'Maksimal gaji harus diisi.',
            'id_tipe.required' => 'Tipe harus diisi.',
            'id_level.required' => 'Level harus diisi.',
            'id_bidang.required' => 'Bidang harus diisi.',

        ]);



        $user = auth()->guard('industri')->user();
        if ($user) {
            $industri = Industri::where('id_industri', $user->id_industri)->first();


            if ($industri) {
                $lowongan = new Lowongan();
                $lowongan->id_industri = industri::where('id_industri', auth()->guard('industri')->user()->id_industri)->value('id_industri');

                $lowongan->judul = $request->judul;
                $lowongan->daya_tampung = $request->daya_tampung;
                $lowongan->kriteria = $request->kriteria;
                $lowongan->lokasi = $request->lokasi;
                $lowongan->tanggal_buka = $request->tanggal_buka;
                $lowongan->tanggal_tutup = $request->tanggal_tutup;
                $lowongan->minimal_gaji = $request->minimal_gaji;
                $lowongan->maksimal_gaji = $request->maksimal_gaji;
                $lowongan->id_tipe = $request->id_tipe;
                $lowongan->id_level = $request->id_level;
                $lowongan->id_bidang = $request->id_bidang;


                if ($lowongan->save()) {
                    return redirect('industri/lowongan_ind')->with([
                        'notifikasi' => 'Data Berhasil disimpan !',
                        'type' => 'success'
                    ]);
                } else {
                    return redirect('industri/lowongan_ind')->with([
                        'notifikasi' => 'Data gagal disimpan !',
                        'type' => 'error'
                    ]);
                }
            } else {
                return redirect('industri/lowongan_ind')->with([
                    'notifikasi' => 'Data industri tidak ditemukan!',
                    'type' => 'error'
                ]);
            }
        }
    }

    public function destroy(string $id_lowongan)
    {
        // Menambahkan fungsi firstOrFail
        $lowongan = Lowongan::where(['id_lowongan' => $id_lowongan])->firstOrFail();

        // Mengambil data foto
        // $bukti = $lowongan->bukti;

        if ($lowongan->count() < 1) {
            return redirect()->back()->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

        if ($lowongan->delete()) {

            // Hapus file foto jika ada
            // if (!empty($bukti) && Storage::exists($bukti)) {
            //     Storage::delete($bukti);
            // }
            return redirect()->route('lowongan.index')->with([
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

    public function edit(string $id_lowongan)
    {
        $lowongan = Lowongan::where(['id_lowongan' => $id_lowongan]);

        if ($lowongan->count() < 1) {
            return redirect('/lowongan_ind')->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

        return view('/industri/edit_lowongan', ['lowongan' => $lowongan->first()]);
    }

    public function update(Request $request, string $id_lowongan)
    {
        $lowongan = Lowongan::where('id_lowongan', $id_lowongan)->firstOrFail();

        // ddd($request->old_nim, $request->nim);
        $validatedData = $request->validate([

            'judul' => 'required',
            'daya_tampung' => 'required',
            'kriteria' => 'required',
            'lokasi' => 'required',
            'tanggal_buka' => 'required',
            'tanggal_tutup' => 'required',
            'minimal_gaji' => 'required',
            'maksimal_gaji' => 'required',
            'id_tipe' => 'required',
            'id_level' => 'required',
            'id_bidang' => 'required',
        ], [


            'judul.required' => 'Judul harus diisi.',
            'daya_tampung.required' => 'Daya Tampung harus diisi.',
            'kriteria.required' => 'Deskripsi harus diisi.',
            'lokasi.required' => 'Lokasi harus diisi.',
            'tanggal_buka.required' => 'Tanggal buka harus diisi.',
            'tanggal_tutup.required' => 'Tanggal tutup harus diisi.',
            'minimal_gaji.required' => 'Minimal gaji harus diisi.',
            'maksimal_gaji.required' => 'Maksimal gaji harus diisi.',
            'id_tipe.required' => 'Tipe harus diisi.',
            'id_level.required' => 'Level harus diisi.',
            'id_bidang.required' => 'Bidang harus diisi.',

        ]);


        $lowongan->judul = $request->judul;
        $lowongan->daya_tampung = $request->daya_tampung;
        $lowongan->kriteria = $request->kriteria;
        $lowongan->lokasi = $request->lokasi;
        $lowongan->tanggal_buka = $request->tanggal_buka;
        $lowongan->tanggal_tutup = $request->tanggal_tutup;
        $lowongan->minimal_gaji = $request->minimal_gaji;
        $lowongan->maksimal_gaji = $request->maksimal_gaji;
        $lowongan->id_tipe = $request->id_tipe;
        $lowongan->id_level = $request->id_level;
        $lowongan->id_bidang = $request->id_bidang;


        if ($lowongan->save()) {
            return redirect('/industri/lowongan_ind')->with([
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