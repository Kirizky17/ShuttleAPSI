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

Route::get('/Home', ['uses' =>'PageController@Home']);
Route::get('/Pesan', ['uses' =>'PageController@Pesan']);
Route::get('/Beli', ['uses' =>'PageController@Beli']);
Route::get('/Batal', ['uses' =>'PageController@Batal']);

Route::get('/a', function () {
    return view('app');
});
