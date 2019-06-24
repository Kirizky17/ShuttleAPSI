<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
    	return view('home');
    }

    public function pesan()
    {
    	return view('Pemesanan/pemesanan');
    }

    public function pilihKursi()
    {
    	return view('Pemesanan/pemilihan_kursi');
    }

    public function beli()
    {
    	return view('Pembelian/pembelian');
    }

    public function batal()
    {
    	return view('Pembatalan/pembatalan');
    }
}
