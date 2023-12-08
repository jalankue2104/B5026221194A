@extends('master')

@section('title','Data Pegawai')

@section('konten')


	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Data</h3>

	<a href="/nilai"> Kembali</a>

	<br>
	<br>

	<form action="/nilai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row align-items-center">
            <label for="NRP" class="col-form-label col-sm-4 text-right">NRP:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" placeholder="Masukkan NRP" id="NRP" name="NRP">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="NilaiAngka" class="col-form-label col-sm-4 text-right">Nilai:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" placeholder="Masukkan Nilai " id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="SKS" class="col-form-label col-sm-4 text-right">SKS:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" placeholder="Masukkan SKS " id="SKS" name="SKS">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <div class="col-sm-4 offset-sm-4">
                <a href="/nilai" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan</button>
            </div>
        </div>




	</form>
@endsection
