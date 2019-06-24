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

Route::get('/PilihKursi', ['uses' =>'PageController@pilihKursi']);

Route::get('/Beli', ['uses' =>'PageController@beli']);
Route::get('/Confirm', ['uses' =>'PageController@confirm']);
Route::get('/Batal', ['uses' =>'PageController@batal']);

Route::get('/a', function () {
    return view('app');
});
