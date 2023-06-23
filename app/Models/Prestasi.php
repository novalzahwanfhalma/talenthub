<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasi';
    protected $primaryKey = 'id_prestasi';


    protected $fllable = array(
        'id_prestasi', 'nim', 'judul_prestasi', 'penyelenggara', 'deskripsi', 'tgl', 'lampiran_dokumen', 'updated_at', 'created_at',
    );

    public function mahasiswa(){
        return belongsTo(mahasiswa::class, 'nim');
    }
}
