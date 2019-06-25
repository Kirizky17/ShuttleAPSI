<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\JadwalKeberangkatan;
use App\Keberangkatan;


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

    public function member($keberangkatan, $no_kursi)
    {
        $data = [
            'kode_keberangkatan' => $keberangkatan,
            'no_kursi' => $no_kursi,
        ];
        return view('Pemesanan/member')->with('data',$data);
    }

    public function non_member($keberangkatan, $no_kursi)
    {
        $data = [
            'kode_keberangkatan' => $keberangkatan,
            'no_kursi' => $no_kursi,
        ];
        return view('Pemesanan/nonmember')->with('data',$data);
    }

    public function non_member_submit(Request $request, $keberangkatan, $no_kursi)
    {
        
        //AUTOMATION HERE

        $data = [
            'kode_keberangkatan' => $keberangkatan,
            'no_kursi' => $no_kursi,
        ];

        return view('Pemesanan/pemesanan_sukses')->with('data',$data);
    }

    public function member_submit(Request $request, $keberangkatan, $no_kursi)
    {

        //AUTOMATION HERE

         $request->id_member;
         $keberangkatan;
         $no_kursi;
         $transaction_code = "TRC".substr($request->id_member, 1,2).substr($request->id_member, 4,1).$no_kursi;
        $timezone = time() + (60 * 60 * 7);
        $currdate = date('Y-m-d',$timezone);
        $currtime = date('h:i:s',$timezone);

        $temp = Keberangkatan::where('kode_keberangkatan','=',$keberangkatan)->firstOrFail();
        $temp['jadwal'];
        $harga = JadwalKeberangkatan::where('kode_jadwal','=',$temp['jadwal'])->firstOrFail();;
        $harga['harga'];

        // DB::table('transaksi')->insert(
        //     [
        //         'kode_transaksi' => $transaction_code,
        //         'jenis_transaksi' => "PEMESANAN",
        //         'status_transaksi' => "AKTIF",
        //         'tanggal_transaksi' => $currdate,
        //         'total_harga' => $harga['harga'],
        //         'jam_transaksi' => $currtime,
        //         'keberangkatan' => $keberangkatan,
        //         'member' => $request->id_member,
        //         'non_member' => 0
        //     ]
        // );

        // DB::table('detail_transaksi')->insert(
        //     [
        //         'kode_transaksi' => $transaction_code,
        //         'kursi' => $no_kursi
        //     ]
        // );

        // DB::table('kursi')
        // ->updateOrInsert(
        //     ['id' => $no_kursi],
        //     ['status' => 'TERPESAN']
        // );

        $data = [
            'kode_transaksi' => $transaction_code,
            'jam' => $harga['jam'],
            'jadwal' => $temp['tanggal_keberangkatan'],
            'no_kursi' => $no_kursi,
        ];

        return view('Pemesanan/pemesanan_sukses')->with('data',$data);
    }

    public function pilihMetode($keberangkatan, $no_kursi)
    {
        $data = [
            'kode_keberangkatan' => $keberangkatan,
            'no_kursi' => $no_kursi,
        ];
    	return view('Pemesanan/pemilihan_metode')->with('data',$data);
    }

    public function beli()
    {
    	return view('Pembelian/pembelian');
    }

    public function beli_confirm(Request $request)
    {
        return view('Pembelian/konfirmasi_pembelian');
    }

    public function batal()
    {
        return view('Pembatalan/pembatalan');
    }

    public function batal_confirm(Request $request)
    {
        return view('Pembatalan/konfirmasi_pembatalan');
    }
}
