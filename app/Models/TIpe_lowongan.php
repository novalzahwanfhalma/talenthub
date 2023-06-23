<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe_lowongan extends Model
{
    use HasFactory;

    protected $table = 'tipe_lowongan';
    protected $primaryKey = 'id_tipe';

    protected $fllable = array(
        'id_tipe', 'nama_tipe', 'updated_at', 'created_at'
    );

}
