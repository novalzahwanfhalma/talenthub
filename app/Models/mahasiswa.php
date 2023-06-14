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

    protected $fillable = ['nim', 'username', 'password', 'nama_mhs', 'ipk', 'foto', 'no_hp', 'email', 'alamat'];
    protected $hidden = ['password'];
}
