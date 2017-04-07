<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matkul extends Model
{
   protected $table = 'jadwal_matkul';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id','dosen_id'];

    public function dosen_matakuliah(){
        return $this->belongsTo(dosen_matakuliah::class,'dosen_matakuliah_id');///untuk membuat relasi  one to many  dengan tabel dosen_matakuliah
    }
    public function mahasiswa(){
        return $this->belongsTo(mahasiswa::class,'mahasiswa_id');//untuk membuat relasi  one to many  dengan tabel mahasiswa
    }
    public function ruangan(){
        return $this->belongsTo(ruangan::class,'ruangan_id');//untuk membuat relasi  one to many  dengan tabel ruangan
    }
}
