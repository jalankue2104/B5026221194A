@extends('master')
//x
@section('title', 'Keranjang Belanja')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>


	<br/>
	<br/>

    <div class="card tambah" >
        <form action="/obat/store" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="merkobat">Merk Obat</label>
                <input type="text" id="merkobat" name="merkobat">
            </div>
            <div class="form-group">
                <label for="stockobat">Stok Obat</label>
                <input type="number" id="stockobat" name="stockobat">
            </div>


            <div class="form-group row align-items-center">
                <div class="col-sm-4 offset-sm-4">
                    <a href="/obat" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection


