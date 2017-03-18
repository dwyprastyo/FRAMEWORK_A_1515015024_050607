<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\pengguna;
use App\dosen;
use App\dosen_matakuliah;
use App\mahasiswa;
use App\matakuliah;
use App\jadwal_matakuliah;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/public', function () {
    return ('Nama Saya : Dwy Prastyo');
});
Route::get('/pengguna','penggunacontroller@awal');
Route::get('/dosen/tambah','dosenController@tambah');
Route::get('/dosen_matakuliah/tambah','dosen_matakuliahController@tambah');
Route::get('/mahasiswa/tambah','mahasiswaController@tambah');
Route::get('/matakuliah/tambah','matakuliahController@tambah');
Route::get('/ruangan/tambah','ruanganController@tambah');
Route::get('/jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');


// Route::get('/pengguna/tambah',function(){

//     	$pengguna = new pengguna();
//     	$pengguna->username = 'Dwy_Prastyo';
//     	$pengguna->password = 'dwyprastyo';
//     	$pengguna->save();
//     	return "data dengan username {$pengguna->username} telah disimpan";
//     });


