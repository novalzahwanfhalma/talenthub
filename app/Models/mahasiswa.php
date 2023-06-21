<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';

    protected $fillable = ['nim', 'username', 'password', 'nama_mhs', 'ipk', 'foto', 'no_hp', 'email', 'alamat', 'id_prodi'];
    protected $hidden = ['password'];

    public function mahasiswa()
    {
        return $this->hasOne(prodi::class, 'nim');
    }

    public function portofolio()
    {
        return $this->hasMany(portofolio::class, 'nim');
    }

    public function pendidikan()
    {
        return $this->hasMany(pendidikan::class, 'nim');
    }
    public function pengalaman()
    {
        return $this->hasMany(pengalaman::class, 'nim');
    }
    public function prestasi()
    {
        return $this->hasMany(prestasi::class, 'nim');
    }
    public function sertifikasi()
    {
        return $this->hasMany(sertifikasi::class, 'nim');
    }
    public function bahasa()
    {
        return $this->hasMany(bahasa::class, 'nim');
    }
    

}