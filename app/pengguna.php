<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];

    public function mahasiswa()
    {
    	return $this->hasOne(mahasiswa::class); //untuk membuat relasi  one to one  dengan tabel mahasiswa
    }

    public function dosen()
    {

    	return $this->hasOne(dosen::class); //untuk membuat relasi  one to one  dengan tabel dosen
    }

    public function peran()
    {
    	return $this->belongsToMany(peran::class); //untuk membuat relasi  many to many  dengan tabel peran
    }

    
}
