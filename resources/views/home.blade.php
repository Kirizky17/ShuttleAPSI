@extends('template')
@section('content')
<div class="row">
    <div id="homepage-title">
        <h1 class="text-center">SELAMAT DATANG DI <b>SHUTTLE.CO</b></h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4"></div>
    <div class="col-lg-4 col-md-4" id="menu-bar">
        <ul class="nav navbar-nav">
            <li><a href="/Pesan">PEMESANAN TIKET</a></li>
            <li><a href="/Beli">PEMBELIAN TIKET</a></li>
            <li><a href="/Batal">PEMBATALAN TIKET</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-md-4"></div>
</div>
@endsection