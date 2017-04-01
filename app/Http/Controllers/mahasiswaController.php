<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
class mahasiswaController extends Controller
{
    public function awal(){
    	return "Hallo";
    }

    public function tambah(){
    	return $this->simpan();
    }

    public function simpan(){

    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'Prastyo';
    	$mahasiswa->nim = '1515015024';
    	$mahasiswa->alamat = 'jl.kenangan,Gg.5 No.24 samarinda ilir';
    	$mahasiswa->pengguna_id = 1;
    	$mahasiswa->save();
    	return "Data dengan{$mahasiswa->nama} telah disimpan";
    }

    
}
