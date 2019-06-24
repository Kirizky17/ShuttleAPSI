<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pool;

class PemesananController extends Controller
{
    public function pesan_display()
    {

    	$data = [
		    'asal'  	=> Pool::select('kota')->get(),
		    'tujuan'   	=> Pool::select('kota')->get(),
		];
    	return view("Pemesanan/pemesanan")->with('data',$data);
    }

    public function pesan_search(Request $request)
    {
    	$data = [
		    'asal'  	=> Pool::select('kota')->get(),
		    'tujuan'   	=> Pool::select('kota')->get(),
		    
		];
    	return view('Pemesanan/pemesanan');
    }
}
