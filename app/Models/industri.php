<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industri extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $table = 'industri';
    protected $primaryKey = 'id_industri';

    protected $fillable = ['username', 'password', 'nama_industri', 'alamat', 'contact', 'foto', 'deskripsi_industri'];
    protected $hidden = ['password']; 
}