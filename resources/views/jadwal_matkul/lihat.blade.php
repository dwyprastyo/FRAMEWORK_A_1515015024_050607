@extends('master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{url('jadwal_matkul') }}"><i style="color: red" class="fa text-default fa-chevron-left"></i></a>Detail Data jadwal_matkul</strong>
</div>
<table class="table">
	<tr>
		<td>Nama Mahasiswa</td>
		<td>:</td>
		<td>{{ $jadwal_matkul->mahasiswa->nama }}</td>
	</tr>
	<tr>
		<td>NIM Mahasiswa</td>
		<td>:</td>
		<td>{{ $jadwal_matkul->mahasiswa->nim }}</td>
	</tr>
	<tr>
		<td>NIP Dosen</td>
		<td>:</td>
		<td>{{ $jadwal_matkul->dosen_matakuliah->dosen->nip }}</td>
	</tr>
	<tr>
		<td>Nama Matakuliah</td>
		<td>:</td>
		<td>{{ $jadwal_matkul->dosen_matakuliah->matakuliah->title }}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Dibuat Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $jadwal_matkul-> created_at}}</td>	
	</tr>
	<tr>
		<td class="col-xs-4">Diperbarui Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $jadwal_matkul->update_at}}</td>	
	</tr>
</table>
</div>
@stop