@extends('template')
@section('content')
    <a href="/" class="back-button btn btn-primary">Kembali</a>
    <div class="col-lg-12 col-md-12">
    <div id="page-title" align="center">
    
        <form action="" method="post">
        <h1 class="text-center" style="margin: 20px 0 !important;">Masukkan Kode Pembelian</h1>
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
        <br><br><br>
            <h1 class="text-center" style="margin: 20px 0 !important;">Masukkan Kode Pesanan</h1>
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

<br><br><br>    
<div class="content" style="margin:300px;padding:100px;">
			<div class="row little-margin-ver">
        	<div class="col-md-2 col-lg-2"></div>

			<form class="col-md-8 col-lg-8"action="" method="post"style="border-style: outset;border-width: 3px;border-color: grey;">
        	<br>
			<div class="row little-margin-ver">
        	<div class="col-md-4 col-lg-4"style="padding-left:50px;"><p>Biaya Refund</p></div>
        	<div class="col-md-4 col-lg-4">
        		<input name="text" class="form-control"name="refund"disabled>
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        	</div>
			
			<div class="row little-margin-ver">
        	<div class="col-md-4 col-lg-4"style="padding-left:50px;"><p>Biaya Denda </p></div>
        	<div class="col-md-4 col-lg-4">
        		<input name="text" class="form-control" name="denda"disabled>
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        	</div>
			<br>
			<h2 class="text-center" style="margin: 20px 0 !important;">Jumlah Deposit Sekarang</h1>
			
			<div class="row little-margin-ver">
        	<div class="col-md-4 col-lg-4"></div>
        	<div class="col-md-4 col-lg-4">
        		<input name="text" class="form-control"name="deposit"disabled>
        	</div>
        	<div class="col-md-4 col-lg-4"></div>
        	</div>
			<br>
			<center><a href="/" class="btn btn-primary" style="float: center">OK</a></center>
			<br>
		

	</form>
	<div class="col-md-2 col-lg-2"></div>

</div>
</div>
@endsection