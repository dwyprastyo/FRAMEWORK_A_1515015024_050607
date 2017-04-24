<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\jadwal_matkul;
use App\mahasiswa;
use App\dosen_matakuliah;
use App\ruangan;
use App\pengguna;

class jadwal_matkulController extends Controller{
protected $informasi = 'Gagal melakukan aksi';

public function awal(){
    $semuajadwal_matkul = jadwal_matkul::all();
    return view('jadwal_matkul.awal',compact('semuajadwal_matkul'));
}

public function tambah(){
    $Mahasiswa = new mahasiswa;
    $Ruangan = new ruangan;
    $Dosen_matakuliah = new dosen_matakuliah;
    return view('jadwal_matkul.tambah',compact('Mahasiswa','Ruangan','Dosen_matakuliah'));
}

public function simpan(Request $input){
    $this->validate($input,[
        'mahasiswa'=>'required',
        'matakuliah'=>'required',
        'ruangan'=>'required',
        ]);
    $jadwal_matkul= new jadwal_matkul($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if ($jadwal_matkul->save()) $this->informasi = 'Berhasil Simpan Jadwal Mahasiswa ';
        return redirect('jadwal_matkul')->with(['informasi'=>$this->informasi]);
    }

public function edit($id){
    $jadwal_matkul = jadwal_matkul::find($id);
   $Mahasiswa = new mahasiswa;
    $Ruangan = new ruangan;
    $Dosen_matakuliah = new dosen_matakuliah;
    return view('jadwal_matkul.edit',compact('Mahasiswa','Ruangan','Dosen_matakuliah','jadwal_matkul'));
}

public function lihat($id){
    $jadwal_matkul = jadwal_matkul::find($id);
    return view('jadwal_matkul.lihat')->with(array('jadwal_matkul'=>$jadwal_matkul));
}

public function update($id, Request $input){
    $jadwal_matkul = jadwal_matkul::find($id);
    $jadwal_matkul->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
    if($jadwal_matkul->save())$this->informasi="Jadwal Berhasil di update";
return redirect('jadwal_matkul')->with(['informasi'=>$this->informasi]);
}

public function hapus($id){
    $jadwal_matkul = jadwal_matkul::find($id);
    if($jadwal_matkul->delete()) $this->informasi = 'Berhasil Hapus data';
    return redirect('jadwal_matkul')->with(['informasi'=>$this->informasi]);
}

}