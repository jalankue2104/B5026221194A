@extends('master')

@section('title','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Beli</h3>

	{{-- <a href="/pegawai"> Kembali</a> --}}

	<br/>
	<br/>
	<br/>


	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row align-items-center">
            <label for="kodebarang" class="col-form-label col-sm-4 text-right">Kode Barang:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Masukkan Kode Barang" id="kodebarang" name="kodebarang">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="jumlah" class="col-form-label col-sm-4 text-right">Jumlah:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" placeholder="Masukkan Jumlah Barang" id="jumlah" name="jumlah">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="harga" class="col-form-label col-sm-4 text-right">Harga:</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" placeholder="Masukkan Harga Barang " id="harga" name="harga">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <div class="col-sm-4 offset-sm-4">
                <a href="/keranjangbelanja" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary" value="Simpan Data">Beli</button>
            </div>
        </div>





	</form>

    <br/>
@endsection
