<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDosen extends Controller
{
	public function index() {

    	$nama = "Diki Alfarabi Hadi";
    	$matkul = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('passingdata',[
    		'nama' => $nama,
    		'matkul' => $matkul
    	]);

	}
}
