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



    public function view(Request $request){
        // mengambil data pegawai berdasarkan id yang dipilih
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('viewkategori',['ID' => $request->nama]);
    }
    }


}
