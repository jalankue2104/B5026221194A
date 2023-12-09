@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
<a href="/pegawai">Kembali</a>
<br><br>

<div class="card bg-dark shadow" style="border-radius: 3vh;">

    
    <div class="bg-white text-center p-4" style="border-top-left-radius: 3vh; border-top-right-radius: 3vh;">
    
        <h3>Data Pegawai</h3>
        <div class="profile-img mx-auto mb-3" style="height: 10vh; width: 10vh; background-color: #6c757d; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <i class="fa-solid fa-user fa-3x text-light"></i>
        </div>
        
        <h3>{{ $pegawai->pegawai_nama }}</h3>
        <!-- Description -->
        <p>Deskripsi</p>
    </div>

    
    <div class="p-4" style="background-color: #343a40; color: white;">
        
        <form class="form-horizontal">
            <div class="form-group row mb-2">
                <label class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-dark" value="{{ $pegawai->pegawai_nama }}" disabled>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="col-sm-3 control-label">Jabatan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-dark" value="{{ $pegawai->pegawai_jabatan }}" disabled>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="col-sm-3 control-label">Umur</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-dark" value="{{ $pegawai->pegawai_umur }}" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 control-label">Alamat</label>
                <div class="col-sm-9">
                    <textarea class="form-control text-dark" disabled style="resize: none;">{{ $pegawai->pegawai_alamat }}</textarea>
                </div>
            </div>
            
            <div class="text-right mt-3">
                <a href="/pegawai" class="btn btn-warning">Kembali</a>
            </div>
        </form>
    </div>
</div>

@endsection
