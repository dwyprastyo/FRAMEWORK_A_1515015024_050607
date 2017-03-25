<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
{
    // public function awal(){
    // 	return "Hello";
    // }

    // public function tambah(){
    // 	return $this->simpan();
    // }

    // public function simpan(){

    // 	$ruangan = new ruangan();
    // 	$ruangan->title = 'ruang 405';
    // 	$ruangan->save();
    // 	return "data dengan title{$ruangan->title} telah disimpan";
    // }

     public function awal()
    {
        return view('ruangan.awal',['data'=>ruangan::all()]);
    }
    public function tambah()
    {
        return view('ruangan.tambah');
    }
    public function simpan(Request $input)
    {
        $ruangan = new ruangan();
        $ruangan->title=$input->title;
        $informasi=$ruangan->save() ? 'Berhasil simpan data':'Gagal simpan data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $ruangan = ruangan::find($id);
        return view('ruangan.edit')->with(array('ruangan'=>$ruangan));
    }
    public function lihat($id)
    {
        $ruangan= ruangan::find($id);
        return view('ruangan.lihat')->with(array('ruangan' =>$ruangan));
    }
    public function update($id,Request $input)
    {
        $ruangan = ruangan::find($id);
        $ruangan->title=$input->title;
        $informasi=$ruangan->save() ? 'Berhasil update data':'Gagal update data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $ruangan=ruangan::find($id);
        $informasi=$ruangan->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
}
