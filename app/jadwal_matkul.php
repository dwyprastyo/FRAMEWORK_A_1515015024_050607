<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matkul extends Model
{
   protected $table = 'jadwal_matkul';
    protected $isi = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
}
