@extends('template')
@section('content')
<!-- <a href="/" class="back-button btn btn-primary">Kembali</a>
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
</div> -->
<a href="/" class="back-button btn btn-primary">Kembali</a>
<center style="margin:40px !important">
	<div style="width:250px;height:500px;border:2px solid #000;background-color: white;"align="center" id="printableArea">
	    <div align="center">
	        <br>
	        <img width="100" height="100" src='https://chart.googleapis.com/chart?cht=qr&chl={{$data['kode_transaksi']}}&chs=180x180&choe=UTF-8&chld=L|2' alt=''><br><br>

	              <!--Ticket Information-->
	              <h3> SHUTTLE.CO</h3>
	              <br><br>
	              <h4>Waktu Keberangkatan :</h4>
	              <br>
	              <h4>
	              	{{$data['jadwal']}}<br>
	              	{{$data['jam']}}
	              </h4>
	              Seat: {{$data['no_kursi']}} 
	              <br>

	        <img src="/images/flat5.jpg" width="200px" height="180px">
	    </div>
	</div>
<br>
  <form action = "pullticket.html" method= "post">
  <input type="button" onclick="printDiv('printableArea')" value="Cetak Tiket"/>
  </form>
</center>

@endsection
<script type="text/javascript">
function printDiv(divName) {
   var printContents = document.getElementById(divName).innerHTML;
   var originalContents = document.body.innerHTML;

   document.body.innerHTML = printContents;

   window.print();

   document.body.innerHTML = originalContents;
}
</script>