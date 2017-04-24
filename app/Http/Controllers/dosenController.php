<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;
use App\pengguna;

class dosenController extends Controller
{
    //  public function awal(){
    // 	return "Hallo";
    // }

    // public function tambah(){
    // 	return $this->simpan();
    // }

    // public function simpan(){

    // 	$Dosen = new dosen();
    // 	$Dosen->nama = 'Dwy_Prastyo';
    // 	$Dosen->nip = '1515015024';
    // 	$Dosen->alamat = 'jl.lumba-lumba,Gg.4 samarinda ilir';
    // 	$Dosen->pengguna_id = 1;
    // 	$Dosen->save();
    // 	return "Data dengan{$Dosen->nama} telah disimpan";
    // }

   protected $informasi = 'Gagal melakukan aksi';
public function awal(){
    $semuadosen = dosen::all();
    return view('dosen.awal',compact('semuadosen'));
}
public function tambah(){
    return view('dosen.tambah');
}
public function simpan(Request $input){
     $this->validate($input,[
        'nama'=>'required',
        'nip'=>'required',
        'alamat'=>'required',
        'username'=>'required',
        'password'=>'required',
        ]);
    $pengguna = new pengguna($input->only('username','password'));
    if ($pengguna->save()) {
        $dosen = new dosen();
        $dosen->nama = $input->nama;
        $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
        if ($pengguna->dosen()->save($dosen)) $this->informasi = 'Berhasil Simpan data';
    }
    return redirect('dosen')->with(['informasi'=>$this->informasi]);
}
public function edit($id){
    $dosen = dosen::find($id);
    return view('dosen.edit')->with(array('dosen'=>$dosen));
}
public function lihat($id){
    $dosen = dosen::find($id);
    return view('dosen.lihat')->with(array('dosen'=>$dosen));
}
public function update($id, Request $input){
    $dosen = dosen::find($id);
    $pengguna = $dosen->pengguna;
    $dosen->nama = $input->nama;
    $dosen->nip = $input->nip;
    $dosen->alamat = $input->alamat;
    $dosen->save();
    if(!is_null($input->username)){
        $pengguna->fill($input->only('username'));
        if (!empty($input->password)){
            $pengguna->password = $input->password;
        }
        if($pengguna->save()){
            $this->informasi = 'Berhasil update data';
        }
        else{
            $this->informasi= 'Gagal update Data';
        }
    }
return redirect('dosen')->with(['informasi'=>$this->informasi]);
}
public function hapus($id){
    $dosen = dosen::find($id);
    if ($dosen->pengguna()->delete()){
        if($dosen->delete()){
            $this->informasi = 'Berhasil Hapus Data';
        }
    }
    return redirect('dosen')->with(['informasi'=>$this->informasi]);
}
}

