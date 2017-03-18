<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class dosen_matakuliahController extends Controller
{
    public function awal(){
    	return "Hallo";
    }

    public function tambah(){
    	return $this->simpan();
    }

    public function simpan(){

    	$Dosen_matakuliah = new dosen_matakuliah();
    	$Dosen_matakuliah->dosen_id = 1;
    	$Dosen_matakuliah->matakuliah_id= 1;
    	$Dosen_matakuliah->save();
    	return "Data dengan{$Dosen_matakuliah->dosen_id} telah disimpan";
    }
}
