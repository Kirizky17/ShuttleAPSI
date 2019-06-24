@extends('template')
@section('content')
	<a href="/" class="back-button btn btn-primary">Kembali</a>
	<div class="col-lg-12">
		<form action="{{route('pesan_search')}}" method="post"> 
			@csrf
	      	<div class="row little-margin-ver">
	      		<div class="col-lg-2 col-md-2">
		      		<p>Asal </p>
		      	</div>
		      	<div class="col-lg-4 col-md-4">
		      		<select name="asal" class="form-control" style="padding-right:72px;padding-top: 5px;padding-bottom: 5px">
						<option value ="" disabled selected>PILIH ASAL ANDA</option>
						@foreach ($data['asal'] as $asal)
						    <option>{{$asal->kota}}</option>
						@endforeach
					</select>
		      	</div>
		      	<div class="col-lg-1 col-md-1">
		      	</div>
		      	<div class="col-lg-1 col-md-1">
		      		<p>Tujuan </p>
		      	</div>
		      	<div class="col-lg-4 col-md-4">
		      		<select name="tujuan" class="form-control" style="padding-right:72px;margin:10px;padding-top: 5px;padding-bottom: 5px">
						<option value ="" disabled selected>PILIH TUJUAN ANDA</option>
						@foreach ($data['tujuan'] as $tujuan)
						    <option>{{$tujuan->kota}}</option>
						@endforeach
					</select>
		      	</div>
	      	</div>
	      	<div class="row little-margin-ver">
	      		<div class="col-lg-2 col-md-2">
		      		<p>Tanggal Keberangkatan</p>
		      	</div>
		      	<div class="col-lg-4 col-md-4">
		      		<input type="date" name="tanggal_keberangkatan" class="form-control">
		      	</div>
	      	</div>
			<div class="row little-margin-ver">
	      		<div class="col-lg-12 col-md-12">
		      		<input type="submit" value="Cari" class="btn btn-primary col-lg-1 col-md-1" style="float:right;">
		      	</div>
		      	
	      	</div>		
			<table id="tabel-pemesanan" class="table table-striped">
			<tr>
				<th style="width: 15%; text-align: center;">Agen</th>
				<th style="width: 20%; text-align: center;">Waktu Keberangkatan</th>
				<th style="width: 15%; text-align: center;">Harga</th>
				<th style="width: 20%; text-align: center;">Keberangkatan</th>
				<th style="width: 20%; text-align: center;">Tujuan</th>
				<th style="width: 10%; text-align: center;">Aksi</th>
			</tr>
			@isset($data['search_result'])
				@foreach ($data['search_result'] as $result)
					<tr>
						<td>{{$result->nama_partner}}</td>
						<td>{{$result->jam}}</td>
						<td>{{$result->harga}}</td>
						<td>{{$result->kotaasal}}</td>
						<td>{{$result->kotatujuan}}</td>
						<td><a href="{{route('pilih_kursi_display', ['keberangkatan'=>$result->kode_keberangkatan])}}">PESAN</a></td>
					</tr>	
				@endforeach
			@endisset
			</table>
		</form>
	</div>
@endsection