<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fllable = array(
        'user_id', 'id_industri', 'nama_industri', 'username', 'password', 'deskripsi_industri', 'kontak', 'alamat', 'foto'
    );

}
