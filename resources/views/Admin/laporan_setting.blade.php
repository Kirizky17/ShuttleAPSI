@extends('template')
@section('content')
<div class="row">
    <div id="homepage-title">
        <h1 class="text-center"><b>PEMBUATAN LAPORAN STATISTIK</b></h1>
    </div>
</div>
<div class="row">
    <div class="row">
        <div class="col-lg-4 col-md-4"></div>
        <div class="col-lg-4 col-md-4">
            <div class="col-md-2"></div>
            <form action="{{route('generate_laporan')}}" method="post" class="col-md-8">
                @csrf
                <input type="date" name="awal" class="form-control">
                <h3 class="text-center" style="font-family: flama;font-weight: bolder;margin: 10px 0px !important">SAMPAI DENGAN</h3>
                <input type="date" name="akhir" class="form-control">
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="row" style="font-family: flama;font-weight: bolder;margin: 20px 0px !important">
        <center>
            <input type="submit" value="Buat Laporan" class="btn btn-primary" style="float:center;">
            </form>
        </center>
    </div>
    <div class="col-lg-4 col-md-4"></div>
</div>
@endsection
