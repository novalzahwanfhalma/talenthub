<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Industri extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    public function getAuthIdentifierName()
    {
        return 'username';
    }

    public function getAuthIdentifier()
    {
        return $this->username;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    protected $table = 'industri';
    protected $primaryKey = 'id_industri';



    protected $fllable = array(
        'id_industri', 'username', 'password', 'nama_industri', 'alamat', 'contact', 'foto', 'deskripsi_industri', 'id_bidang', 'id_tipe', 'email', 'website', 'instagram', 'facebook', 'twitter', 'updated_at', 'created_at'
    );

    public function lowongan()
{
    return $this->hasMany(Lowongan::class, 'id_industri');
}

}