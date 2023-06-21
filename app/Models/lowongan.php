<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';
    protected $primaryKey = 'id_lowongan';

    protected $fllable = array(
        'id_lowongan', 'id_industri', 'judul', 'daya_tampung', 'deskripsi', 'lokasi', 
        'tanggal_buka', 'tanggal_tutup', 'minimal_gaji', 'maksimal_gaji', 'id_level', 'id_tipe',
        'id_bidang', 'updated_at', 'created_at'
    );

}
