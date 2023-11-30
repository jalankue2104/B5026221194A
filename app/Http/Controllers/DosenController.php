<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Anda telah mengisikan <br> Nama:".$nama. ", Alamat :".$alamat.", NRP :".$NRP. "<br>"$request;

}
}



