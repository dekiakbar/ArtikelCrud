<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keyword" content="">
	<meta name="og:title" content="">
	<meta name="og:des" content="">
	<meta name="og:img" content="">
	<title>@yield('judul')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

	<div class="ui secondary pointing menu blue">
		<div class="header item">
    		Artikel Laravel
		</div>
		<a class="active item">
			Home
		</a>
		<a class="item">
			Tentang
		</a>
	</div>

	<div class="ui two column stackable grid">
		<div class="three wide column">
			
			<div class="ui segment">
				<div class="ui vertical menu" style="margin: 0 auto;">
					<div class="item">
						<form class="ui input">
							{{ csrf_field() }}
							<input placeholder="Cari" type="text">
						</form>
					</div>
					<div class="item">
						Kategori
						<div class="menu">
							<a class="item"><i class="edit icon"></i> Pemrograman</a>
					    	<a class="item"><i class="globe icon"></i> Linux</a>
					    	<a class="item"><i class="settings icon"></i> Aduino</a>
						</div>
					</div>
					<div class="ui dropdown item">
					  Tag
					  <i class="dropdown icon"></i>
					  <div class="menu">
					    <a class="item"><i class="tag icon"></i> Laravel</a>
					    <a class="item"><i class="tag icon"></i> Laravel</a>
					    <a class="item"><i class="tag icon"></i> Laravel</a>
					    <a class="item"><i class="tag icon"></i> Laravel</a>
					    <a class="item"><i class="tag icon"></i> Laravel</a>
					    <a class="item"><i class="tag icon"></i> Laravel</a>
					    <a class="item"><i class="tag icon"></i> Laravel</a>
					    <a class="item"><i class="tag icon"></i> Laravel</a>
					    <a class="item"><i class="tag icon"></i> Laravel</a>
					  </div>
					</div>
				</div>
			</div>

			<div class="ui segment raised">
				<h2 class="ui tiny header">
					<i class="fire icon blue"></i>
					<div class="content">
						Artikel Baru
						<div class="sub header">Daftar Artikel Baru</div>
					</div>
				</h2>

				<div class="ui divider"></div>
				
				<div class="ui relaxed divided list">
					<div class="item">
					  <i class="large middle aligned file alternate outline icon"></i>
					  <div class="content">
					    <a class="header">Install Ubuntu</a>
					    <div class="description">10 Menit Yang Lalu</div>
					  </div>
					</div>

					<div class="item">
					  <i class="large middle aligned file alternate outline icon"></i>
					  <div class="content">
					    <a class="header">Dasar Arduino</a>
					    <div class="description">10 Menit Yang Lalu</div>
					  </div>
					</div>

					<div class="item">
					  <i class="large middle aligned file alternate outline icon"></i>
					  <div class="content">
					    <a class="header">Belajar Laravel</a>
					    <div class="description">10 Menit Yang Lalu</div>
					  </div>
					</div>
				</div>
			</div>
		</div>

		<div class="twelve wide column">
			<div class="ui segment"></div>
		</div>
	</div>

	<footer style="margin-top: 10px;">
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