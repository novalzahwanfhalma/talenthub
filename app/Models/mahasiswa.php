<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fllable = array(
        'user_id', 'nim', 'username', 'password', 'nama_mhs', 'email', 'ipk', 'no.hp', 'alamat', 'status', 'id_prodi', 'foto'
    );

    public function portofolio(){
        return $this->hasMany(mhs_portofolio::class, 'nim');
    }
    public function sertifikasi(){
        return $this->hasMany(mhs_sertifikasi::class, 'nim');
    }
    public function pendidikan(){
        return $this->hasMany(mhs_pendidikan::class, 'nim');
    }
    public function pengalaman(){
        return $this->hasMany(mhs_pengalaman::class, 'nim');
    }
    public function prestasi(){
        return $this->hasMany(mhs_prestasi::class, 'nim');
    }
    public function bahasa(){
        return $this->hasMany(mhs_bahasa::class, 'nim');
    }

}
