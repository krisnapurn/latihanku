@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Orang Tua
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{ route('orangtua.update',$ortu->id) }}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="control-label">Nama Ayah</label>
					<input type="text" name="a" value="{{$ortu->nama_ayah}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-label">Nama Ibu</label>
					<input type="text" name="b" value="{{$ortu->nama_ibu}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-label">Umur Ayah</label>
					<input type="number" name="c" value="{{$ortu->umur_ayah}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-label">Umur Ibu</label>
					<input type="number" name="d" value="{{$ortu->umur_ibu}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-label">Alamat</label>
					<textarea class="form-control" name="e" rows="10" required="">{{$ortu->alamat}}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection