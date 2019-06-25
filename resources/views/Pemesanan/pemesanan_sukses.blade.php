@extends('template')
@section('content')
<a href="/" class="back-button btn btn-primary">Kembali</a>
<div class="col-lg-12 col-md-12">
    <div id="page-title" align="center">
        <h1 class="text-center" style="margin: 20px 0 !important;">KODE PEMESANAN</h1>
        <form action="" method="post">
            @csrf
        	<div class="row little-margin-ver">
        	<div class="col-md-4 col-lg-4"></div>
        	<div class="col-md-4 col-lg-4">
        		<input style="text-align: center" name="kode" class="form-control" value="{{$data['kode_transaksi']}}" disabled="">
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        	<div class="col-md-4 col-lg-4">
        		<a href="/" class=" btn btn-primary" style="float: center">Kembali ke Menu</a>
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        </form>
    </div>
</div>
@endsection