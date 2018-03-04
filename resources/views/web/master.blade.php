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
		<a href="{{ url('/') }}" class="header item">
    		Artikel Laravel
		</a>
		<a class="active item">
			Home
		</a>
		<a onclick="tentang()" class="item">
			Tentang
		</a>
	</div>

	{{-- seksi tentang website --}}
	<div class="ui modal">
	  <i class="close icon"></i>
	  <div class="header">
	    Tentang Website
	  </div>
	  <div class="image content">
	    <div class="ui medium image">
	      <img src="{{ asset('storage/me.jpg') }}">
	    </div>
	    <div class="description">
	      <div class="ui header">Website Portofolio</div>
	      <p>Website ini dibuat sebagai prtofolio saya dalam membuat website menggunakan laravel</p>
	    </div>
	  </div>
	  <div class="actions">
	    <div class="ui positive right labeled icon button">
	      Kembali
	      <i class="right arrow icon"></i>
	    </div>
	  </div>
	</div>

	<div class="ui two column stackable grid">
		<div class="three wide column">
			
			<div class="ui segment">
				<div class="ui vertical menu" style="margin: 0 auto;">
					<div class="item">
						<form class="ui input" method="post" action="{{ url('/') }}">
							{{ csrf_field() }}
							<input placeholder="cari" type="text" name="cari">
						</form>
					</div>
					<div class="item">
						Kategori
						<div class="menu">
							@foreach($kategoris as $kategori)
								<a href="{{ url('kategori',$kategori->slug) }}" class="item"><i class="settings icon"></i> {{ $kategori->nama_kategori }}</a>
							@endforeach
						</div>
					</div>
					<div class="ui dropdown item">
					  Tag
					  <i class="dropdown icon"></i>
					  <div class="menu">
					  	@foreach($tags as $tag)
					  		<a href="{{ url('tag',$tag->slug) }}" class="item"><i class="tag icon"></i>{{ $tag->nama_tag }}</a>
					    @endforeach
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
					@foreach($barus as $baru)
						<div class="item">
						  <i class="large middle aligned file alternate outline icon"></i>
						  <div class="content">
						    <a href="{{ url('detail',$baru->slug) }}" class="header">{{ $baru->judul }}</a>
						    <div class="description">{{ $baru->created_at }}</div>
						  </div>
						</div>
					@endforeach
				</div>
			</div>

			<div class="ui segment raised center aligned">
				<h4 class="ui tiny horizontal divider header">
					<i class="share icon"></i>
					Share
				</h4>

				<div class="ui horizontal list">
					<div class="item">
						<a target="_blank" href="{{ $bagikan->facebook }}"><i class="big facebook icon"></i></a>
						<a target="_blank" href="{{ $bagikan->twitter }}"><i class="big twitter square icon"></i></a>
						<a target="_blank" href="{{ $bagikan->linkedin }}"><i class="big linkedin square icon"></i></a>
						<a target="_blank" href="{{ $bagikan->telegram }}"><i class="big telegram icon"></i></a>
					</div>
				</div>
			</div>
		</div>

		@yield('isi')

	</div>

	<footer style="margin-top: 10px;">
		<div class="ui segment center aligned blue">
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