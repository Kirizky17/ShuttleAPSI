@extends('template')
@section('content')
	<a href="/" class="back-button btn btn-primary">Kembali</a>
	<div class="col-lg-12">
		<form action="" method="post"> 
	      	<div class="row little-margin-ver">
	      		<div class="col-lg-2">
		      		<p>Asal </p>
		      	</div>
		      	<div class="col-lg-4">
		      		<select name="asal" class="form-control" style="padding-right:72px;padding-top: 5px;padding-bottom: 5px">
						<option value ="null">PILIH ASAL ANDA</option>
					</select>
		      	</div>
		      	<div class="col-lg-1">
		      		
		      	</div>
		      	<div class="col-lg-1">
		      		<p>Tujuan </p>
		      	</div>
		      	<div class="col-lg-4">
		      		<select name="tujuan" class="form-control" style="padding-right:72px;margin:10px;padding-top: 5px;padding-bottom: 5px">
						<option value ="null">PILIH TUJUAN ANDA</option>
					</select>
		      	</div>
	      	</div>
	      	<div class="row little-margin-ver">
	      		<div class="col-lg-2">
		      		<p>Tanggal Keberangkatan  </p>
		      	</div>
		      	<div class="col-lg-4">
		      		<input type="date" name="tanggalkeberangkatan" class="form-control">
		      	</div>
	      	</div>
			<div class="row little-margin-ver">
	      		<div class="col-lg-12">
		      		<input type="submit" value="Cari" class="btn btn-primary col-lg-1" style="float:right;">
		      	</div>
		      	
	      	</div>		
			<table class="table table-striped">
			<tr>
				<th style="width: 20%">Agen</th>
				<th style="width: 20%">Waktu Keberangkatan</th>
				<th style="width: 20%">Harga</th>
				<th style="width: 20%">Keberangkatan</th>
				<th style="width: 20%">Tujuan</th>
			</tr>
			<tr>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
			</tr>
			<tr>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
			</tr>
			<tr>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
			</tr>
			<tr>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
				<td>AAAA</td>
			</tr>
			</table>
		</form>
	</div>
@endsection