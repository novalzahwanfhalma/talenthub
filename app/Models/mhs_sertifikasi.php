<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fllable = array(
        'id_sertifikat', 'nim', 'judul', 'institusi', 'tahun', 'deskripsi', 'link'
    );

    public function mahasiswa(){
        return belongsTo(mahasiswa::class, 'nim');
    }
}
