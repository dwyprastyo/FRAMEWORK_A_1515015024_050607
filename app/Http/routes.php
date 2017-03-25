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
use App\ruangan;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/public', function () {
//     return ('Nama Saya : Dwy Prastyo');
// });
// Route::get('/pengguna','penggunacontroller@awal');
// Route::get('/dosen/tambah','dosenController@tambah');
// Route::get('/dosen_matakuliah/tambah','dosen_matakuliahController@tambah');
// Route::get('/mahasiswa/tambah','mahasiswaController@tambah');
// Route::get('/matakuliah/tambah','matakuliahController@tambah');
// Route::get('/ruangan/tambah','ruanganController@tambah');
// Route::get('/jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');


// Route::get('/pengguna/tambah',function(){

//     	$pengguna = new pengguna();
//     	$pengguna->username = 'Dwy_Prastyo';
//     	$pengguna->password = 'dwyprastyo';
//     	$pengguna->save();
//     	return "data dengan username {$pengguna->username} telah disimpan";
//     });

Route::get('pengguna','penggunacontroller@awal');
Route::get('/pengguna/tambah','penggunacontroller@tambah');
Route::get('pengguna/lihat/{pengguna}','penggunacontroller@lihat');
Route::post('/pengguna/simpan','penggunacontroller@simpan');
Route::get('/pengguna/edit/{pengguna}','penggunacontroller@edit');
Route::post('/pengguna/edit/{pengguna}','penggunacontroller@update');
Route::get('/pengguna/hapus/{pengguna}','penggunacontroller@hapus');

Route::get('matakuliah','matakuliahController@awal');
Route::get('/matakuliah/tambah','matakuliahController@tambah');
Route::get('matakuliah/lihat/{matakuliah}','matakuliahController@lihat');
Route::post('/matakuliah/simpan','matakuliahController@simpan');
Route::get('/matakuliah/edit/{matakuliah}','matakuliahController@edit');
Route::post('/matakuliah/edit/{matakuliah}','matakuliahController@update');
Route::get('/matakuliah/hapus/{matakuliah}','matakuliahController@hapus');

Route::get('ruangan','ruanganController@awal');
Route::get('/ruangan/tambah','ruanganController@tambah');
Route::get('ruangan/lihat/{ruangan}','ruanganController@lihat');
Route::post('/ruangan/simpan','ruanganController@simpan');
Route::get('/ruangan/edit/{ruangan}','ruanganController@edit');
Route::post('/ruangan/edit/{ruangan}','ruanganController@update');
Route::get('/ruangan/hapus/{ruangan}','ruanganController@hapus');

Route::get('/dosen','dosenController@awal');
Route::get('/dosen/tambah','dosenController@tambah');
Route::get('/mahasiswa','mahasiswaController@awal');
Route::get('/mahasiswa/tambah','mahasiswaController@tambah');
Route::get('/matakuliah','matakuliahController@awal');
Route::get('/matakuliah/tambah','matakuliahController@tambah');
Route::get('/ruangan','ruanganController@awal');
Route::get('/ruangan/tambah','ruanganController@tambah');
Route::get('/dosmat','dosen_matakuliahController@awal');
Route::get('/dosmat/tambah','dosen_matakuliahController@tambah');
Route::get('/jadwal','jadwal_matakuliahController@awal');
Route::get('/jadwal/tambah','jadwal_matakuliahController@tambah');
