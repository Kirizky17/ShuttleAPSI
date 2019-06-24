@extends('template')
@section('content')
<a href="/" class="back-button btn btn-primary">Kembali</a>
<div class="col-lg-12 col-md-12">
    <div id="page-title" align="center">
        <h1 class="text-center" style="margin: 20px 0 !important;">Masukkan Kode Pemesanan</h1>
        <form action="" method="post">
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
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="judul">
		<!-- <center><strong><h1>PEMESANAN KURSI</h1></strong></center> -->
	<!-- </div>
	<a href="#" style="margin-left: 100px;"><button style="margin-top: 20px">Kembali</button></a>
	<div class="content" style="margin-left: 450px;">
		<form action="" method="post">
		<table style="margin:20px auto;padding-left: 100px;float: left;">
		<tr>
				<td><center><strong>Masukan Kode Pemesanan</strong></center> </td>
				<tr>
				<td><input type="text" name="nama" class="form-control" style="padding-right:73px;padding-top: 5px;padding-bottom: 5px;margin-top: 10px " ></td>
				</tr>
		</tr>
		<tr>
			<td><center><input type="submit" value="Submit" class="btn btn-primary"></center></td>
		</tr>
	</table>
	</form>
	</div>
</body> -->
<!-- </html> -->
@endsection