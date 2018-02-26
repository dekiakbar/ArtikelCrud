<!DOCTYPE html>
<html>
<head>
	<title>Admin | @yield('judul')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="" content="">
	<title>@yield('judul')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<style type="text/css">
	    body {
	      background-color: #DADADA;
	    }
	    body > .grid {
	      height: 100%;
	    }
	    .image {
	      margin-top: -100px;
	    }
	    .column {
	      max-width: 450px;
	    }
	</style>
</head>
<body>
	@yield('isi')
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/manual.js') }}"></script>
</body>
</html>