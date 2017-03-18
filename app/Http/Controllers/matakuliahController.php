<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahController extends Controller
{
     public function awal(){
    	return "Hallo";
    }

    public function tambah(){
    	return $this->simpan();
    }

    public function simpan(){

    	$matakuliah = new matakuliah();
    	$matakuliah->title = 'Pemrograman_Framework';
    	$matakuliah->keterangan= '14-15.30 WITA';
    	$matakuliah->save();
    	return "Data dengan{$matakuliah->title} telah disimpan";
    }
}
