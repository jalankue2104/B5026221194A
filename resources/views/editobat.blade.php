@extends('master')

@section('title','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Obat</h3>



	<br/>
	<br/>

	@foreach($obat as $p)
    <div class="card">
        <div class="card-body">
            <form action="/obat/update" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->kodeobat }}">

                <div class="form-group">
                    <label class="control-label" for="merkobat">Merk Obat</label>
                    <div>
                        <input type="text" class="form-control" id="merkobat" required="required" name="merkobat" value="{{ $p->merkobat }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="stockobat">Stock Obat</label>
                    <div>
                        <input type="text" class="form-control" id="stockobat" required="required" name="stockobat" value="{{ $p->stockobat }}">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <input type="submit" class="btn btn-primary" value="Simpan Data">
                        <a href="/obat" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach



@endsection













