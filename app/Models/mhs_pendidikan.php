<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fllable = array(
        'id_pendidikan', 'nim', 'gelar', 'institusi', 'tahun_selesai', 'tahun_mulai', 'lampiran_pendidikan'
    );

    public function mahasiswa(){
        return belongsTo(mahasiswa::class, 'nim');
    }
}
