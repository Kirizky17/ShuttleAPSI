<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Transaksi;
use PdfReport;

class AdminController extends Controller
{
    public function home()
    {
    	return view('Admin/home');
    }

    public function laporan_setting()
    {
    	return view('Admin/laporan_setting');
    }

    public function generate_laporan(Request $request)
    {
    	$fromDate = $request->input('awal');
	    $toDate = $request->input('akhir');

	    // Report title
	    $title = 'Laporan Pengguna Shuttle';

	    // Do some querying..
	    $queryBuilder = Transaksi::select(['tanggal_transaksi', 'total_harga', 'jam_transaksi'])
	                        ->whereBetween('tanggal_transaksi', [$fromDate, $toDate])
	                        ->orderBy('tanggal_transaksi');

	    // Set Column to be displayed
	    $columns = [
	        'Tanggal' => 'tanggal_transaksi', 
	        'Total Harga' => 'total_harga',
	        'Jam Transaksi' => 'jam_transaksi',
	    ];

	    return PdfReport::of($title, $queryBuilder, $columns)
	                    ->editColumn('Tanggal', [
	                        'displayAs' => function($result) {
	                            return $result->tanggal_transaksi->format('d M Y');
	                        }
	                    ])
	                    ->limit(20)
	                    ->stream(); // or download('filename here..') to download pdf
    	// return view('Admin/report');
    }
}
