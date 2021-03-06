<!DOCTYPE html>
<html>
<head>
	<title>SHUTTLE</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/card.css')}}">
</head>
<body>
	<div class="row" id="header">
		@include('SubTemplate/header')
	</div>
	<div class="row">
		<div id="content" class="col-lg-12 col-md-12">
			@yield('content')
		</div>
	</div>

</body>
</html>
