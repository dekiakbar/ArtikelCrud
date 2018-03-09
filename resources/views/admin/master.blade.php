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
		<div class="header item ">
    		Laravel Artikel
  		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Artikel</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="{{ url('admin/artikel/create') }}" class="item"><i class="icon plus"></i>Tambah Artikel</a>
			    <a href="{{ url('admin/artikel/') }}" class="item"><i class="icon list"></i>Daftar Artikel</a>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Kategori</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="{{ url('admin/kategori/create') }}" class="item"><i class="icon plus"></i>Tambah Kategori</a>
			    <a href="{{ url('admin/kategori') }}" class="item"><i class="icon list"></i>Daftar Kategori</a>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Tag</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="{{ url('admin/tag/create') }}" class="item"><i class="icon plus"></i>Tambah Tag</a>
			    <a href="{{ url('admin/tag') }}" class="item"><i class="icon list"></i>Daftar Tag</a>
		  	</div>
		</div>
		<div class="right menu">
		  	<a href="{{ route('logout') }}" class="ui item animated fade button teal" onclick="event.preventDefault();document.getElementById('keluar').submit();">
		  		<div class="hidden content">
					<i class="sign out icon"></i>
				</div>
				<div class="visible content">
					Keluar    
				</div>
		  	</a>
		  	<form id="keluar" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
		</div>
	</div>

	<div class="ui menu grid mobile only" style="margin-top: 0px;">
		<div class="header item">
    		Laravel Artikel
  		</div>
  		<div class="right menu">
  			<a class="ui item mobile only" onclick="tampil();"><i class="icon list blue"></i></a>
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
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
	<script type="text/javascript">
		var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
	</script>
	<script type="text/javascript">
		$('textarea[name=artikel]').ckeditor({
    		height: 500,
    		filebrowserImageBrowseUrl: route_prefix + '?type=Images',
    		filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
    		filebrowserBrowseUrl: route_prefix + '?type=Files',
    		filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
		});
	</script>
	<script type="text/javascript" src="{{ asset('js/manual.js') }}"></script>
</body>
</html>