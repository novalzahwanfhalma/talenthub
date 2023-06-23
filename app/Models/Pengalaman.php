<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;

    protected $table = 'pengalaman';
    protected $primaryKey = 'id_pengalaman';

    protected $fllable = array(
        'id_pengalaman', 'nim', 'judul', 'tipe', 'perusahaan', 'lokasi', 'tgl_mulai', 'tgl_selesai', 'updated_at', 'created_at',
    );

    public function mahasiswa(){
        return belongsTo(mahasiswa::class, 'nim', 'nim');
    }
}
