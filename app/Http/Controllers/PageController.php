<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{

    public function home()
    {
    	return view('home');
    }

    

    public function pilihKursi()
    {
    	return view('Pemesanan/pemilihan_kursi');
    }

    public function pilihMetode()
    {
    	return view('Pemesanan/pemilihan_metode');
    }

    public function beli()
    {
    	return view('Pembelian/pembelian');
    }

    public function confirm()
    {
        return view('Pembelian/konfirmasi_pembelian');
    }

    public function batal()
    {
    	return view('Pembatalan/pembatalan');
    }
}
