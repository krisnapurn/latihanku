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
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="control-label">Nama Ayah</label>
					<input type="text" name="a" value="{{$ortu->nama_ayah}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-label">Nama Ibu</label>
					<input type="text" name="b" value="{{$ortu->nama_ibu}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-label">Umur Ayah</label>
					<input type="number" name="c" value="{{$ortu->umur_ayah}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-label">Umur Ibu</label>
					<input type="number" name="d" value="{{$ortu->umur_ibu}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-label">Alamat</label>
					<textarea class="form-control" rows="10" readonly="">{{$ortu->alamat}}</textarea>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection