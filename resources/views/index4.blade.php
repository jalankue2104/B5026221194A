@extends('master')

@section('title','Data Pegawai')

@section('konten')

<section class="hero-container">
    <div>
        <div>
            <h1>Tabel Pegawai
            </h1>
            <p>ini halaman tabel</p>
        </div>
    </div>

</section>
<br><br><br>
<section>
	<a href="/obat/tambah" class="btn btn-primary"> + Tambah Obat</a>
    <br><br>
    <div class="card">
        <div class="card-header">
            Cari Data Obat
        </div>
        <div class="card-body">
            <form action="/obat/cari" method="GET" class="form-horizontal">
                <div class="form-group row">
                    <label for="cari" class="col-sm-2 col-form-label">Cari Obat</label>
                    <div class="col-sm-8">
                        <input class="form-control" id="cari" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari', isset($cari) ? $cari : '') }}">
                    </div>
                    <div class="col-sm-2">
                        <input class="btn btn-primary" type="submit" value="CARI">
                    </div>
                </div>
            </form>
        </div>
    </div>

	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Obat</th>
			<th>Merk Obat</th>
			<th>Stock Obat</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($obat as $p)
		<tr class="isi">
			<td>{{ $p->kodeobat }}</td>
			<td>{{ $p->merkobat }}</td>
			<td>{{ $p->stockobat }}</td>
			<td>  @if ($p->tersedia == 'y') Tersedia
                @else Tidak Tersedia
                @endif</td>
			<td>
				<a href="/obat/view/{{ $p->kodeobat }}" class="btn btn-success">View</a>
				|
				<a href="/obat/edit/{{ $p->kodeobat }}" class="btn btn-warning">Edit</a>
				|
				<a href="/obat/hapus/{{ $p->kodeobat }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br>


</section>
@endsection
