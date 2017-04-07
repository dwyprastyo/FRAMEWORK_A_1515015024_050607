<div class="form-group">
<label class="col-sm-2 control-label" id="nama">Nama</label>
<div class="col-sm-10">
	{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" id="nip">NIM</label>
<div class="col-sm-10">
	{!! Form::text('nip',null,['class'=>'form-control','placeholder'=>"NIP"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" id="alamat">alamat</label>
<div class="col-sm-10">
	{!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"alamat"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">username</label>
<div class="col-sm-10">
	{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"username"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">password</label>
<div class="col-sm-10">
	{!! Form::password('password',null,['class'=>'form-control','placeholder'=>"password"])!!}
</div>
</div>