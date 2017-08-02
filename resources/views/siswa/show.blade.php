@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Siswa
		<div class="panel-title pull-right">
		<a href="{{URL::previous() }}">Kembali</a></div>
		</div>

		<div class="panel-body">
			<form >
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" value="{{$siswa->nama}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Orangtua</label>
					<input type="text" class="form-control" name="b" value="{{$siswa->orangtua->nama_ayah}} dan {{$siswa->orangtua->nama_ibu}}" readonly="">
					</input>
				</div>
				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="number" name="c" value="{{$siswa->umur}}" class="form-control" required="" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Jenis Kelamin</label>
					<input type="text" name="jk" value="{{$siswa->jk}}" class="form-control" required="" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea class="form-control" rows="10" name="d" readonly="">{{$siswa->alamat}}</textarea>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection