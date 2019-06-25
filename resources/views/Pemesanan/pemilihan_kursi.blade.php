@extends('template')
@section('content')
	@foreach ($data['result'] as $result)
		<a href="/" class="back-button btn btn-primary">Kembali</a>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
			<form action="" method="post" id="form-pilih-kursi">
				<div class="row">
					<div class="col-lg-2">Agen</div>
					<div class="col-lg-4">: {{$result->nama_partner}}</div>
					<div class="col-lg-3">Tanggal Keberangkatan </div>
					<div class="col-lg-2">: {{$result->tanggal_keberangkatan}}</div>
				</div>
				<div class="row">
					<div class="col-lg-2">Harga</div>
					<div class="col-lg-4">: {{$result->harga}}</div>
					<div class="col-lg-3">Waktu Keberangkatan </div>
					<div class="col-lg-2">: {{$result->jam}}</div>
				</div>
				<div class="row">
					<div class="col-lg-2">Tempat Naik </div>
					<div class="col-lg-4">: {{$result->alamatasal}}</div>
					<div class="col-lg-6"></div>
				</div>
				<div class="row">
					<div class="col-lg-2">Tempat Turun </div>
					<div class="col-lg-4">: {{$result->alamattujuan}}</div>
					<div class="col-lg-6"></div>
				</div>
				<div class="row">
					<table id="tabel-pemesanan" class="table table-striped">
						<tr>
							<th style="width: 15%; text-align: center;">Kode Kursi</th>
							<th style="width: 20%; text-align: center;">Status</th>
							<th style="width: 10%; text-align: center;">Aksi</th>
						</tr>
						@foreach ($data['kursis'] as $kursi)
							<tr>
								<td>{{$kursi->no_kursi}}</td>
								<td>{{$kursi->status}}</td>
								<td>
									@if ($kursi->status == 'TERPESAN')
										<a style="cursor: not-allowed;">PESAN</a>
									@else
										<a href="{{route('pilih_metode', ['keberangkatan'=>$kursi->kode_keberangkatan,'no_kursi'=>$kursi->id])}}">PESAN</a>
									@endif
								</td>
							</tr>	
						@endforeach					
					</table>
				</div>	
			<div class="col-lg-2"></div>
			</form>
		</div>
	@endforeach
@endsection