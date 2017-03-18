<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
     public function awal(){
    	return "Hallo";
    }

    public function tambah(){
    	return $this->simpan();
    }

    public function simpan(){

    	$Dosen = new dosen();
    	$Dosen->nama = 'Dwy_Prastyo';
    	$Dosen->nip = '1515015024';
    	$Dosen->alamat = 'jl.lumba-lumba,Gg.4 samarinda ilir';
    	$Dosen->pengguna_id = 1;
    	$Dosen->save();
    	return "Data dengan{$Dosen->nama} telah disimpan";
    }
}

