<?php

namespace App\Http\Controllers;
//x
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ObatController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $obat = DB::table('obat')  ->orderBy('merkobat', 'asc')
        ->get();


    	// mengirim data ke view index
		return view('index4',['obat' => $obat]);

	}

	// method untuk menampilkan view form tambah
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahobat');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('obat')->insert([
			'kodeobat' => $request->kodeobat,
			'merkobat' => $request->merkobat,
			'stockobat' => $request->stockobat,
			'tersedia' => ($request->stockobat > 0) ? 'y' : 'n',
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/obat');

	}

    public function edit($kodeobat)
	{
		// mengambil data baju berdasarkan id yang dipilih
		$obat = DB::table('obat')->where('kodeobat',$kodeobat)->get();
		// passing data baju yang didapat ke view edit.blade.php
		return view('editobat',['obat' => $obat]);

	}

	// update data 
	public function update(Request $request)
{
    // update data 
    DB::table('obat')->where('kodeobat',$request->id)->update([
        'merkobat' => $request->merkobat,
        'stockobat' => $request->stockobat,
        'tersedia' => ($request->stockobat > 0) ? 'y' : 'n',
    ]);
    
    return redirect('/obat');
}


	// method untuk hapus data pegawai
	public function hapus($kodeobat)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('obat')->where('kodeobat',$kodeobat)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/obat');
	}

    public function view($kodeobat)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$obat = DB::table('obat')->where('kodeobat',$kodeobat)->first();
		// passing data pegawai yang didapat ke view view.blade.php
		return view ('viewobat',['obat' => $obat]);

	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$obat = DB::table('obat')
		            ->where('merkobat','like',"%".$cari."%")
                    ->orderBy('merkobat', 'asc')
                    ->paginate(10);

    		// mengirim data pegawai ke view index
		return view('index4',['obat' => $obat, 'cari' => $cari]);
	}


}
