<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KategoriController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $kategori = DB::table('kategori')  ->orderBy('Nama', 'asc')
        ->get();


    	// mengirim data pegawai ke view index
		return view('indexkategori',['kategori' => $kategori]);

	}



    public function view($ID)
{
    // mengambil data kategori berdasarkan id yang dipilih
    $kategori = DB::table('kategori')->where('ID', $ID)->first();
    // passing data kategori yang didapat ke view viewkategori.blade.php
    return view('viewkategori', ['kategori' => $kategori]);
}


}
