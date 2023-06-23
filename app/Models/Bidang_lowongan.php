<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang_lowongan extends Model
{
    use HasFactory;

    protected $table = 'bidang_lowongan';
    protected $primaryKey = 'id_bidang';

    protected $fllable = array(
        'id_bidang', 'nama_bidang', 'updated_at', 'created_at',
    );

}
