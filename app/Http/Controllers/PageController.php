<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function Home()
    {
    	return view('home');
    }

    public function Pesan()
    {
    	return view('Pemesanan/pemesanan');
    }

    public function Beli()
    {
    	return view('Pembelian/pembelian');
    }

    public function Batal()
    {
    	return view('Pembatalan/pembatalan');
    }
}
