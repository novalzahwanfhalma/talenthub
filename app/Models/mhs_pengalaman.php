<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fllable = array(
        'id_pengalaman', 'nim', 'judul', 'tipe', 'perusahaan', 'lokasi', 'tgl_mulai', 'tgl_selesai'
    );

    public function mahasiswa(){
        return belongsTo(mahasiswa::class, 'nim');
    }
}
