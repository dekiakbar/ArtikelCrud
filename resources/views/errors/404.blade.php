<!DOCTYPE html>
<html>
<head>
	<title>404 | Not Found</title>
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/manual.css') }}">
</head>
<body>
	<div class="ui text container">
		<div class="ui stackable centered grid" id="margin404">
			<div class="ui segment teal raised">
				<h1 style="margin-top: 10px;"><i class="em em-hushed"></i></h1>
				<div class="ui divider"></div>
				<h1 class="header">404 | Not Found</h1>
				<div class="ui divider"></div>
				<div class="sub header">Maaf halaman yang anda minta tidak ditemukan</div>
				<div class="sun header">Kami Yakin ini hanya sebuah kesalahan</div>
				<div class="sun header">Klik tombol Home untuk kembali ke Home Page</div>
				<div class="ui divider"></div>
				<div class="center aligned">
					<a href="{{ url('/') }}" class="ui button animated blue inverted">
						<div class="hidden content">
							<i class="home icon"></i>
						</div>

						<div class="visible content">
							Home    
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>