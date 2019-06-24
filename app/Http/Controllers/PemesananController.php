<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pool;
use App\JadwalKeberangkatan;
use App\Keberangkatan;

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

    	$keberangkatan =
	    	DB::table('keberangkatan')
	            ->select('keberangkatan.*', 'jadwal_keberangkatan.*', 'partner.*', 'poolasal.kota AS kotaasal', 'poolakhir.kota AS kotatujuan')
	            ->join('jadwal_keberangkatan', 'keberangkatan.jadwal', '=', 'jadwal_keberangkatan.kode_jadwal')
	            ->join('partner', 'jadwal_keberangkatan.shuttle', '=', 'partner.kode_partner')
	            ->join('pool AS poolasal', function ($join) use($request) {
		            $join->on('jadwal_keberangkatan.keberangkatan', '=', 'poolasal.kode_pool')
		                 ->where('poolasal.kota', $request->input('asal'));
		        })
		        ->join('pool AS poolakhir', function ($join) use($request) {
		            $join->on('jadwal_keberangkatan.tujuan', '=', 'poolakhir.kode_pool')
		                 ->where('poolakhir.kota', $request->input('tujuan'));
		        })
		        ->where('keberangkatan.tanggal_keberangkatan',$request->input('tanggal_keberangkatan'))
	            ->get();


   //  		Keberangkatan::with('jadwal', function ($query) use($request) {
   //  			$query->whereHas('asal', function ($query) use($request) {
	  //   			$query->where('kota', $request->input('asal'));
			// 	})->whereHas('tujuan', function ($query) use($request) {
	  //   			$query->where('kota', $request->input('tujuan'));
			// 	});
			// })->where('tanggal_keberangkatan', $request->input('tanggal_keberangkatan'));

    	
    		// Pool::where('kota', '=', $request->input('tujuan'))->get();
		
    	$data = [
		    'asal'  		=> Pool::select('kota')->get(),
		    'tujuan'   		=> Pool::select('kota')->get(),
		    'search_result'	=> $keberangkatan,

		];
    	return view('Pemesanan/pemesanan')->with('data',$data);
    }

    public function pilih_kursi_display($keberangkatan){
    	$keberangkatan_ =DB::table('keberangkatan')
	            ->select('keberangkatan.*', 'jadwal_keberangkatan.*', 'partner.*', 'poolasal.kota AS kotaasal', 'poolasal.alamat AS alamatasal', 'poolakhir.kota AS kotatujuan', 'poolakhir.alamat AS alamattujuan')
	            ->join('jadwal_keberangkatan', 'keberangkatan.jadwal', '=', 'jadwal_keberangkatan.kode_jadwal')
	            ->join('partner', 'jadwal_keberangkatan.shuttle', '=', 'partner.kode_partner')
	            ->join('pool AS poolasal', 'jadwal_keberangkatan.keberangkatan', '=', 'poolasal.kode_pool')
		        ->join('pool AS poolakhir', 'jadwal_keberangkatan.tujuan', '=', 'poolakhir.kode_pool')
		        ->where('keberangkatan.kode_keberangkatan',$keberangkatan)
	            ->get();

	    $kursi =DB::table('keberangkatan')
	            ->select('keberangkatan.*', 'jadwal_keberangkatan.*', 'kursi.*', 'poolasal.kota AS kotaasal', 'poolasal.alamat AS alamatasal', 'poolakhir.kota AS kotatujuan', 'poolakhir.alamat AS alamattujuan')
	            ->join('jadwal_keberangkatan', 'keberangkatan.jadwal', '=', 'jadwal_keberangkatan.kode_jadwal')
	            ->join('partner', 'jadwal_keberangkatan.shuttle', '=', 'partner.kode_partner')
	            ->join('kursi', 'kursi.kd_mobil', '=', 'jadwal_keberangkatan.mobil')
	            ->join('pool AS poolasal', 'jadwal_keberangkatan.keberangkatan', '=', 'poolasal.kode_pool')
		        ->join('pool AS poolakhir', 'jadwal_keberangkatan.tujuan', '=', 'poolakhir.kode_pool')
		        ->where('keberangkatan.kode_keberangkatan',$keberangkatan)
	            ->get();

	    $data = [
		    'result'	=> $keberangkatan_,
		    'kursis'	=> $kursi,
		];        

    	return view('Pemesanan/pemilihan_kursi')->with('data',$data);
    }

}
