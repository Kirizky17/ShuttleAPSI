@extends('template')
@section('content')
<a href="/" class="back-button btn btn-primary">Kembali</a>
<div class="content" style="margin-left: 400px;">
		<form action="" method="post">
		<table style="margin:20px auto;padding-left: 100px;float: center;">
		<tr>
				<td align="center">Biaya Refund:</td>
				<td><input type="text" name="refund" class="form-control" align="center" disabled></td>
		</tr>
		<tr>
			<td>Biaya Denda:</td>
				<td><input type="text" name="denda" class="form-control" style="padding-right:73px;padding-top: 5px;padding-bottom: 5px;margin-top: 10px " disabled></td>
		</tr>
		<tr>
			<td></td>
			<td><center>Jumlah Deposit Sekarang</center></td>
			<tr>
				<td></td>
				<td><input type="text" name="deposit" class="form-control" style="padding-right:73px;padding-top: 5px;padding-bottom: 5px;margin-top: 10px " disabled></td>
			</tr>
		</tr>
		<tr>
			<td></td>
			<td>
			<center><a href="/" class="btn btn-primary" style="float: center">OK</a></center>
			</td>
		</tr>
	</table>
	</form>
</div>
@endsection