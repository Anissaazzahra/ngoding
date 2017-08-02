@extends('layouts.master')
@section('halaman')
<div class="container">
<div class="row">
<center><h1>DATA AUTHOR</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Data Author
<div class="panel-title-pull-right">
	<a href="{{ URL::previous() }}">Kembali</a></div>
	</div>

	<div class="panel-body">
		

		<div class="form-group">
			<label class="control-lable">Nama Lengkap</label>
			<input type="text" name="a" class="form-control" readonly="" value="{{$author->nama_lengkap}}">
		</div>
	</div>
	</div>
	</div>
	@endsection