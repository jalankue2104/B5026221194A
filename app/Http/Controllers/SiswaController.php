<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){
return '<h1> saya siswa dari controller</h1>';
    }

    function detail($id){
return '<h1>saya siswa dengan id $id</h1>';
    }
}
