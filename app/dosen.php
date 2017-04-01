<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];

    public function pengguna(){
    	return $this->belongsTo(pengguna::class); //untuk membuat relasi  one to many  dengan tabel pengguna
    }
    public function dosen_matakuliah(){
    	return $this->hasMany(dosen_matakuliah::class); //untuk membuat relasi  one to many  dengan tabel dosen_matakuliah
    }
}
