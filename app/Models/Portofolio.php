<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'portofolio';

    protected $fllable = array(
        'id_portofolio', 'nim', 'judul', 'link', 'bukti', 'deskripsi'
    );

    public function portofolio(){
        return belongsTo(mahasiswa::class, 'nim');
    }
}
