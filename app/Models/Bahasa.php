<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahasa extends Model
{
    use HasFactory;

    protected $table = 'bahasa';
    protected $primaryKey = 'id_bahasa';


    protected $fllable = array(
        'id_bhs', 'nim', 'nama_bahasa', 'status', 'score', 'lampiran_bahasa', 'updated_at', 'created_at',
    );

    public function mahasiswa(){
        return belongsTo(mahasiswa::class, 'nim');
    }
}
