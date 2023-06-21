<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';

    protected $fllable = array(
        'id_prodi', 'nama_prodi', 'updated_at', 'created_at',
    );

    public function mahasiswa(){
        return belongsTo(mahasiswa::class, 'nim');
    }
}
