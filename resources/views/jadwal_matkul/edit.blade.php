@extends('master')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{url('jadwal_matkul') }}"><i class="fa text-default fa-chevron-left"></i></a>Perbarui Data jadwal_matkul</strong>
</div>
{!! Form:: model($jadwal_matkul,['url'=>'jadwal_matkul/edit/'.$jadwal_matkul->id,'class'=>'form-horizontal'])!!}
@include('jadwal_matkul.form')
<div style="width: 100%;text-align: right;">
	<button class="btn btn-info">Perbarui</button>
	<button type="reset" class="btn btn-danger">Ulangi</button>
</div>
{!! Form::close() !!}
</div>
@stop
