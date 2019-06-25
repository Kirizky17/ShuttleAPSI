<!DOCTYPE html>
@extends('template')
@section('content')
    <a href="/" class="back-button btn btn-primary">Kembali</a>

<div class="row">
    <div id="homepage-title">
        <h1 class="text-center">Silahkan Pilih Metode Pemesanan</h1>
    </div>
</div>
<div class="center" align="center">
  <div class="grid">
      <div class="col-lg-4 col-md-4" style="height: 370px;">
        <a href="{{route('member', ['keberangkatan'=>$data['kode_keberangkatan'],'no_kursi'=>$data['no_kursi']])}}">
          <figure class="effect-marley" style="height: 370px;">
            <img src="/images/flat5.jpg" alt="img11"/>
            <figcaption>
              <h2><span>Member</span></h2>
              <!-- <p>Gunakan saldo yang tersedia untuk membayar tagihan.</p> -->
              <!-- <a href="#">View more</a> -->
            </figcaption>
          </figure>
        </a>
      </div>
      <div class="col-lg-4 col-md-4" style="height: 370px;">
        <a href="{{route('non_member', ['keberangkatan'=>$data['kode_keberangkatan'],'no_kursi'=>$data['no_kursi']])}}">
          <figure class="effect-marley" style="height: 370px;">
            <img src="/images/flat4.jpg" alt="img11"/>
            <figcaption>
              <h2>Non <span>Member</span></h2>
              <!-- <p>Datang ke pool untuk membayar tagihan.</p> -->
              <!-- <a href="#">View more</a> -->
            </figcaption>
          </figure>
        </a>
      </div>
  </div>
</div>
@endsection