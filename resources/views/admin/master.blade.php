<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>@yield('judul')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/manual.css') }}">

</head>
<body>
	<div class="ui secondary pointing menu grid computer only blue">
		<div class="header item">
    		Artikel
  		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Artikel</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <div class="item"><i class="icon plus"></i>Tambah Artikel</div>
			    <div class="item"><i class="icon list"></i>Daftar Artikel</div>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Kategori</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <div class="item"><i class="icon plus"></i>Tambah Kategori</div>
			    <div class="item"><i class="icon list"></i>Daftar Kategori</div>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Tag</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <div class="item"><i class="icon plus"></i>Tambah Tag</div>
			    <div class="item"><i class="icon list"></i>Daftar Tag</div>
		  	</div>
		</div>
		<div class="right menu">
		  	<a class="ui item">
		    	Logout
		  	</a>
		</div>
	</div>

	<div class="ui menu grid mobile only" style="margin-top: 0px;">
		<a class="active item mobile only" onclick="tampil();"><i class="icon book blue"></i></a>
		<div class="header item">
    		Artikel
  		</div>
	</div>

	<div class="ui longer modal">
	  	<div class="header">Menu</div>
	  	<div class="content">
	  		<div class="ui grid center aligned">
		  		<div class="ui vertical menu">
		  			<div class="item">
				    	<div class="header">Artikel</div>
				    	<div class="menu">
				      		<a class="item">Tambah Artikel</a>
				      		<a class="item">Daftar Artikel</a>
				    	</div>
				  	</div>
			  		<div class="item">
			    		<div class="header">Kategori</div>
			    		<div class="menu">
			      			<a class="item">Tambah Kategori</a>
			      			<a class="item">Daftar Kategori</a>
			    		</div>
			  		</div>
				  	<div class="item">
				    	<div class="header">Tag</div>
				    	<div class="menu">
				      		<a class="item">Tambah Tag</a>
				      		<a class="item">Daftar Tag</a>
				    	</div>
				  	</div>
		  		</div>
			</div>
		</div>
	</div>

	@yield('isi')

	<footer>
		<div class="ui segment center aligned">
			<p>&copy;{!! date('Y') !!} 
				<a href="https://dekiakbar.com">Deki Akbar</a> | Made With :
				<a target="_blank" href="https://Laravel.com">Laravel</a>
				<i class="large pink heartbeat icon"></i>
				<a target="_blank" href="https://Semantic-ui.com">Semantic</a>
			</p>
		</div>
	</footer>

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/manual.js') }}"></script>
</body>
</html>