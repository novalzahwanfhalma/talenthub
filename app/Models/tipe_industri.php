<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipe_industri extends Model
{
    use HasFactory;

    protected $table = 'tipe_industri';

    protected $fllable = array(
        'id_tipe', 'nama_tipe'
    );

}
