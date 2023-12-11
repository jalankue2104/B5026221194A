@extends('master')

@section('title','Data')

@section('konten')


<section>
    <h2>Pilih Kategori</h2>
    <form action="/kategori/view" method="get">
            <div class="form-group">
            <select id="kategori" name="nama" class="form-control">
                @foreach($kategori as $p)
                    <option value={{$p->ID}}>{{$p->Nama}}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group row">
                <div class="offset-sm-1 col-sm-11 pull-right">
        <input type="submit" value="Kirim" class="btn btn-danger">
                </div>
            </div>
        </form>


    <br>


</section>
@endsection
