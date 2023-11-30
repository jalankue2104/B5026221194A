<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pegawai;

class PegawaiController extends Controller
{

    public function index()
    {
    	$pegawai = Pegawai::all();
    	return view('pegawai', ['pegawai' => $pegawai]);
    }

}
