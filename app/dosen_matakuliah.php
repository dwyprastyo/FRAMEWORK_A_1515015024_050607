<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function dosen()
    {
    	return $this->belongsTo(dosen::class); //untuk membuat relasi  one to many  dengan tabel dosen
    }

    public function jadwal_matakuliah(){
    	return $this->hasMany(jadwal_matakuliah::class);  //untuk membuat relasi  one to many  dengan tabel jadwal_matakuliah
    }

    public function matakuliah(){
    	return $this->belongsTo(matakuliah::class); //untuk membuat relasi one to many dengan tabel matakuliah
    }
    
}
