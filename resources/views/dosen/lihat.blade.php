@extends('master')
@section('container')
<div class="panel panel-warning">
		<div class="panel-heading">
				<strong>
					<a href="{{ url('dosen') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data dosen
				</strong>
		</div>
		<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $dosen->nama }}</td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td>{{ $dosen->nip }}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ $dosen->alamat }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$dosen->created at}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diperbarui Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$dosen->update at}}</td>
			</tr>
		</table>
</div>
@stop