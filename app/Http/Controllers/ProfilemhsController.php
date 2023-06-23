<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Mahasiswa = Mahasiswa::where(['nim' => $id]);
        if ($Mahasiswa->count() < 1) {
            return redirect('/student')->with([
                'notifikasi' => 'Data siswa tidak ditemukan !',
                'type' => 'error'
            ]);
        }

        return view('student.edit', ['student' => $student->first()]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::where('nim', $id)->firstOrFail();
        $validatedData = $request->validate([
            'nim' => [
                'required',
                'unique:students,nim,' . $request->old_nim . ',nim',

            ],
            'nama' => 'required',
            'email' => 'required|email',
            'prodi' => 'required'

        ], [
                'nim.required' => 'NIM harus diisi.',
                'nim.unique' => 'NIM sudah digunakan.',
                'nama.required' => 'Nama harus diisi.',
                'email.required' => 'Email harus diisi.',
                'email.email' => 'Format email tidak valid.',
                'prodi.required' => 'Program studi harus diisi.'

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
            $foto = $student->foto;
        }

        $student = Student::where('nim', $id)->first();
        $old_foto = $student->foto;
        $student->nim = $request->nim;
        $student->nama = $request->nama;
        $student->email = $request->email;
        $student->prodi = $request->prodi;
        $student->foto = $foto ?? null;

        if ($student->save()) {

            // hapus file foto lama jika ada dan jika ganti foto
            if ($request->ganti_foto == 1) {
                if (!empty($old_foto) && Storage::exists($old_foto)) {

                }
            }

            return redirect('/student')->with([
                'notifikasi' => 'Data Berhasil Diedit !',
                'type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'notifikasi' => 'Data gagal diedit !',
                'type' => 'error'
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::where(['nim' => $id])->firstOrFail();

        //mengambil data foto
        $foto_siswa = $student->foto;

        if ($student->delete()) {

            if (!empty($foto_siswa) && Storage::exists($foto_siswa)) {
                Storage::delete($foto_siswa);
            }

            return redirect('/student')->with([
                'notifikasi' => 'Data Berhasil Dihapus !',
                'type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'notifikasi' => 'Data gagal dihapus !',
                'type' => 'error'

            ]);
        }
    }

    public function download(string $id)
    {
        $student = Student::where('nim', $id)->firstOrFail();

        $file_path = public_path('storage/' . $student->foto);
        $file_name = 'foto-' . $student->nim . '.' . pathinfo($file_path, PATHINFO_EXTENSION);

        return response()->download($file_path, $file_name);
    }

    public function preview(string $id)
    {
        $student = Student::where('nim', $id)->firstOrFail();

        $file_path = public_path('storage/' . $student->foto);

        return response()->file($file_path);
    }
}