<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matkul extends Model
{
   protected $table = 'jadwal_matkul';
    protected $isi = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

    public function mahasiswa(){
    	return $this->belongsTo(mahasiswa::class); //untuk membuat relasi  one to many  dengan tabel mahasiswa
    }

    public function dosen_matakuliah(){
    	return $this->belongsTo(dosen_matakuliah::class); //untuk membuat relasi  one to many  dengan tabel dosen_matakuliah
    }

    public function ruangan(){
    	return $this->belongsTo(Ruangan::class); //untuk membuat relasi  one to many  dengan tabel ruangan
    }
}
