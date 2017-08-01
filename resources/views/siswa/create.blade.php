@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Siswa
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('siswa.store')}}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-label">Nama</label>
					<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-label">Nama Orang Tua</label>
					<select class="form-control" name="b">
						@foreach($ortu as $data)
						<option value="{{$data->id}}">{{$data->nama_ayah}} dan {{$data->nama_ibu}}
						</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Umur</label>
					<input type="number" name="c" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-label">Jenis Kelamin</label>
					<input type="radio" name="jk" class="form-control" value="laki-laki">Laki - Laki
					<input type="radio" name="jk" class="form-control" value="perempuan">Perempuan
				</div>
				<div class="form-group">
					<label class="control-label">Alamat</label>
					<textarea class="form-control" name="d" rows="10" required=""></textarea>
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