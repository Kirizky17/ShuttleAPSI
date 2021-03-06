@extends('template')
@section('content')
<a href="/" class="back-button btn btn-primary">Kembali</a>
<div class="col-lg-12 col-md-12">
    <div id="page-title" align="center">
        <h1 class="text-center" style="margin: 20px 0 !important;">Pemesanan Sebagai Non Member</h1>
        <form action="{{route('non_member_submit', ['keberangkatan'=>$data['kode_keberangkatan'],'no_kursi'=>$data['no_kursi']])}}" method="post">
            @csrf
        	<div class="row little-margin-ver">
        	<div class="col-md-4 col-lg-4"></div>
        	<div class="col-md-4 col-lg-4">
        		<input name="nama" placeholder="Nama" class="form-control">
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        	</div>
        	<div class="row little-margin-ver">
        	<div class="col-md-4 col-lg-4"></div>
        	<div class="col-md-4 col-lg-4">
        		<input name="no_telepon" placeholder="No Telepon" class="form-control">
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
