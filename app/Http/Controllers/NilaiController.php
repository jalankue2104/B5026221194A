<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NilaiController extends Controller
{
	public function data()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')
                    ->get();


    	// mengirim data pegawai ke view index
		return view('index2',['nilaikuliah' => $nilaikuliah]);

	}

    // method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'ID' => $request->ID,
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka  ,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilai');

	}

    public function tambah()
	{

		// memanggil view add
		return view('add');

	}
}

