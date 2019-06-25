<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' =>'PageController@Home']);
Route::get('/Home', ['uses' =>'PageController@home']);

//Pemesanan
Route::get('/Pesan', ['as' => 'pesan_display','uses' =>'PemesananController@pesan_display']);
Route::post('/Pesan', ['as' => 'pesan_search','uses' =>'PemesananController@pesan_search']);


Route::get('/PilihKursi/{keberangkatan}', ['as' => 'pilih_kursi_display','uses' =>'PemesananController@pilih_kursi_display']);
Route::get('/PilihMetode/{keberangkatan}/{no_kursi}', ['as' => 'pilih_metode','uses' =>'PageController@pilihMetode']);
Route::get('/PilihMetode/Member/{keberangkatan}/{no_kursi}', ['as' => 'member','uses' =>'PageController@member']);
Route::get('/PilihMetode/NonMember/{keberangkatan}/{no_kursi}', ['as' => 'non_member','uses' =>'PageController@non_member']);
Route::post('/NonMember/{keberangkatan}/{no_kursi}', ['as' => 'non_member_submit','uses' =>'PageController@non_member_submit']);
Route::post('/Member/{keberangkatan}/{no_kursi}', ['as' => 'member_submit','uses' =>'PageController@member_submit']);

//Pembelian
Route::get('/Beli', ['uses' =>'PageController@beli']);
Route::post('/Beli/Confirm', ['as' => 'konfirmasi_beli','uses' =>'PageController@beli_confirm']);

//Pembatalan
Route::get('/Batal', ['uses' =>'PageController@batal']);
Route::post('/Batal/Confirm', ['as' => 'konfirmasi_batal','uses' =>'PageController@batal_confirm']);

Route::get('/a', function () {
    return view('app');
});
