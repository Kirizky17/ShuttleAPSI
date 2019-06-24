@extends('template')
@section('content')
    <a href="/" class="back-button btn btn-primary">Kembali</a>
    <div class="col-lg-12 col-md-12">
    <div id="page-title" align="center">
    
        <form action="" method="post">
        <h1 class="text-center" style="margin: 20px 0 !important;">Masukkan Kode Pembelian</h1>
        	<div class="row little-margin-ver">
        	<div class="col-md-4 col-lg-4"></div>
        	<div class="col-md-4 col-lg-4">
        		<input name="kode" class="form-control">
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        	<div class="col-md-4 col-lg-4">
        		<input type="submit" value="Submit" class="btn btn-primary" style="float:center;">
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        <br><br><br>
            <h1 class="text-center" style="margin: 20px 0 !important;">Masukkan Kode Pesanan</h1>
        	<div class="row little-margin-ver">
        	<div class="col-md-4 col-lg-4"></div>
        	<div class="col-md-4 col-lg-4">
        		<input name="kode" class="form-control">
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        	<div class="col-md-4 col-lg-4">
        		<input type="submit" value="Submit" class="btn btn-primary" style="float:center;">
        	</div>
        	<div class="col-md-4 col-lg-4"></div>

        </form>
    </div>
    
</div>
@endsection