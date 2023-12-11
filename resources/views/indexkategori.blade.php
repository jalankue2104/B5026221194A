@extends('master')

@section('title','Data')

@section('konten')


<section>
    <h2>Pilih Kategori</h2>
    <br>
    <h2>Pilih Kategori</h2>
    <br>
    @foreach($kategori as $p)

        <select name="ID" id="kategori">
                <option value="{{ $p->ID }}">{{ $p->Nama }}</option>
        </select>


        <br>
        <div>
            <a href="/kategori/view/{{ $p->ID }}" class="btn btn-blue">Kirim</a>
        </div>
@endforeach


    <br>


</section>
@endsection
