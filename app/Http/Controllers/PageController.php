<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{

    public function home()
    {
    	return view('home');
    }

    

<<<<<<< HEAD
=======
    public function pilihKursi()
    {
    	return view('Pemesanan/pemilihan_kursi');
    }

    public function pilihMetode()
    {
    	return view('Pemesanan/pemilihan_metode');
    }

>>>>>>> 11a5e619d0eb45f3ce0029488618d79b6afdeab7
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
