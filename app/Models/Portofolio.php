<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'portofolio';
    protected $primaryKey = 'id_portofolio';

    protected $fllable = array(
        'id_portofolio', 'nim', 'judul', 'link', 'bukti', 'deskripsi'
    );

    public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class, 'nim', 'nim');
    }

    // public function save(array $options = [])
    // {
    //     // Lakukan pengecekan terlebih dahulu sebelum menyimpan data
    //     if ($this->mahasiswa()->exists()) {
    //         return parent::save($options);
    //     } else {
    //         // Tangani kasus ketika data mahasiswa tidak ditemukan
    //         throw new \Exception('Data Mahasiswa tidak ditemukan');
    //     }
    // }
}
