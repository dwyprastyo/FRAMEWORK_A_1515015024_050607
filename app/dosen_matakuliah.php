<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $guarded =['id'];
    public function dosen(){
        return $this->belongsTo(dosen::class,'dosen_id');}//untuk membuat relasi  one to many  dengan tabel dosen 

    public function matakuliah(){
        return $this->belongsTo(matakuliah::class,'matakuliah_id');}//untuk membuat relasi  one to many  dengan tabel matakuliah

    public function jadwal_matkul(){
        return $this->hasMany(jadwal_matkul::class,'dosen_matakuliah_id');//untuk membuat relasi  one to many  dengan tabel jadwal_matkul
    }
    public function listDosenDanMatakuliah(){
        $out = [];
        foreach ($this->all() as $dsnmtk) {
            $out[$dsnmtk->id] = "{$dsnmtk->dosen->nama} (matakuliah {$dsnmtk->matakuliah->title})";
        }
        return $out;
    }
}

