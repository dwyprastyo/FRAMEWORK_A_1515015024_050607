<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];
    
    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class); //untuk membuat relasi  one to many  dengan tabel pengguna
    }
    public function jadwal_matakuliah(){
    	return $this->hasMany(jadwal_matakuliah::class); //untuk membuat relasi  one to many  dengan tabel jadwal_matakuliah
    }

}
