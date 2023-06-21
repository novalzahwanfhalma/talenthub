<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level_lowongan extends Model
{
    use HasFactory;

    protected $table = 'level_lowongan';
    protected $primaryKey = 'id_level';

    protected $fllable = array(
        'id_level', 'nama_level', 'updated_at', 'created_at'
    );

}
