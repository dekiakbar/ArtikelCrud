<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('judul')</title>
	<meta name="description" content="@yield('deskripsi')">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="@yield('url')">
	<meta property="og:title" content="@yield('judul')">
	<meta property="og:description" content="@yield('deskripsi')">
	<meta property="og:image" content="@yield('image')">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="@yield('url')">
	<meta property="twitter:title" content="@yield('judul')">
	<meta property="twitter:description" content="@yield('deskripsi')">
	<meta property="twitter:image" content="@yield('image')">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/web.css',array(),true) }}">
</head>
<body>

	<div class="ui secondary pointing menu blue">
		<a href="{{ url('/') }}" class="header item">
    		Artikel Laravel
		</a>
		<a href="{{ url('/') }}" class="active item">
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
	      <img width="300px" height="200px" src="{{ secure_asset('storage/me.jpg',array(),true) }}">
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
				<h2 class="ui tiny horizontal divider header">
					<i class="share icon"></i>
					Share
				</h2>

				<div class="ui horizontal list">
					<div class="item">
						<a rel="noopener" target="_blank" href="{{ $bagikan->facebook }}">
							<i class="big facebook icon"></i>
						</a>
						<a rel="noopener" target="_blank" href="{{ $bagikan->twitter }}">
							<i class="big twitter square icon"></i>
						</a>
						<a rel="noopener" target="_blank" href="{{ $bagikan->linkedin }}">
							<i class="big linkedin square icon"></i>
						</a>
						<a rel="noopener" target="_blank" href="{{ $bagikan->telegram }}">
							<i class="big telegram icon"></i>
						</a>
					</div>
				</div>
			</div>
		</div>

		@yield('isi')

	</div>

	<footer style="margin-top: 10px;">
		<div class="ui segment center aligned blue">
			<p>&copy;{!! date('Y') !!} 
				<a href="{{secure_url('/')}}">Deki Akbar</a> | Made With 
				<i class="large pink heartbeat icon"></i>
			</p>
		</div>
	</footer>

	<script type="text/javascript" src="{{ secure_asset('js/web.js',array(),true) }}"></script>
	<script type="text/javascript" src="{{ secure_asset('js/manual.js',array(),true) }}"></script>
</body>
</html>
