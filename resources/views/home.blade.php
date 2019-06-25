@extends('template')
@section('content')
<div class="row">
    <div id="homepage-title">
        <h1 class="text-center">SELAMAT DATANG DI <b>SHUTTLE.CO</b></h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4"></div>
    <div class="col-lg-4 col-md-4" id="menu-bar">
        <ul class="nav navbar-nav">
            <li><a href="/Pesan">PEMESANAN TIKET</a></li>
            <li><a href="/Beli">PEMBELIAN TIKET</a></li>
            <li><a href="/Batal">PEMBATALAN TIKET</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-md-4"></div>
</div>

<div style="width:250px;height:500px;border:2px solid #000;background-color: white;"align="center" id="printableArea">
    <div align="center">
        <img src ="https://www.bcgen.com/demo/linear-dbgs.aspx?D=<?php echo "123123123"
        ?>"><br><br><br>

              <!--Ticket Information-->
              <h3> SHUTTLE.CO</h3>
              <br><br><br>
              <h4>Waktu Keberangkatan :</h4>
              <br>
              <h4>Saturday August 17, 2019 1:00PM</h4>
              Seat: <?php echo "Nomor Kursi"?>
              <br>

        <img src="/images/flat5.jpg" width="200px" height="180px">
    </div>
</div>

<br>
  <form action = "pullticket.html" method= "post">
  <input type="button" onclick="printDiv('printableArea')" value="Cetak Tiket"/>
  </form>


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
