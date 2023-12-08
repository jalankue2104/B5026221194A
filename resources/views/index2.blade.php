@extends('master')

@section('title','Data Nilai')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Nilai</h3>

	<br>
    <a href="/nilai/tambah" class="btn btn-primary"> + Tambah Data</a>
    <br>

	<br>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai</th>
			<th>SKS</th>
			<th>Konversi</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n )
		<tr>
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>

            @if ( $n->NilaiAngka  <= 40) <td> D </td>
            @elseif ( $n->NilaiAngka  > 40 && $n->NilaiAngka <= 60) <td> C </td>
            @elseif ( $n->NilaiAngka  > 60 && $n->NilaiAngka<= 80) <td> B </td>
            @else  <td> A </td>

            @endif
            <td>{{$n -> NilaiAngka * $n -> SKS}}</td>
		</tr>
		@endforeach
	</table>
@endsection
