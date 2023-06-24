<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidang_industri extends Model
{
    use HasFactory;

    protected $table = 'bidang_industri';
    protected $primaryKey = 'id_bidang';


    protected $fllable = array(
        'id_bidang', 'nama_bidang'
    );
}