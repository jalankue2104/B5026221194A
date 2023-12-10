@extends('master')

@section('title', 'Data Pegawai')
//x
@section('konten')
<br><br>
<section class="hero-container">
    <div>
        <div>
            <h1>Data Obat
            </h1>
            <p>ini halaman tabel</p>
        </div>
    </div>

</section>
<div class="card bg-dark shadow-lg" style="border-radius: 3vh; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); max-width: 600px; margin: auto;">


    <div class="bg-white text-center p-4" style="border-top-left-radius: 3vh; border-top-right-radius: 3vh; opacity: 0.9;">

        <h3>Data Obat</h3>
        <div class="profile-img mx-auto mb-3" style="height: 8vh; width: 8vh; background-color: #6c757d; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <i class="fa-solid fa-user fa-2x text-light"></i>
        </div>

        <h3>{{ $obat->merkobat }}</h3>

        <p>Deskripsi</p>
    </div>


    <div class="p-3" style="background-color: #343a40; color: white; opacity: 0.9;">

        <form class="form-horizontal">
            <div class="form-group row mb-2">
                <label class="col-sm-3 control-label">Kode Obat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-dark hover-effect" value="{{ $obat->kodeobat }}" disabled>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="col-sm-3 control-label">Merk Obat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-dark hover-effect" value="{{ $obat->merkobat }}" disabled>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="col-sm-3 control-label">Stok Obat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-dark hover-effect" value="{{ $obat->stockobat }}" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 control-label">Status</label>
                <div class="col-sm-9">
                    <textarea class="form-control text-dark hover-effect" disabled style="resize: none;">@if ($obat->tersedia == 'y') Tersedia
                        @else Tidak Tersedia
                        @endif</textarea>
                </div>
            </div>

            <div class="text-right mt-3">
                <a href="/obat" class="btn btn-warning">Kembali</a>
            </div>
        </form>
    </div>
</div>
<br>
<br>
@endsection
