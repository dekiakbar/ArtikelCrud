@extends('web.master')
@section('judul','Artikel Laravel')

@section('isi')
		<div class="twelve wide column">
			
			@foreach($artikels as $artikel)
				<div class="ui segment raised">
					<h3 class="ui header">
						<a href="{{ url('detail/',$artikel->slug) }}">{{ $artikel->judul }}</a>
						<span class="sub header">Di post pada {{ $artikel->created_at->format('H:i:s j-M-Y') }}</span>
					</h3>

					<div class="ui divider"></div>

					<img class="ui medium left floated rounded image" src="https://dummyimage.com/1920x1080/000/fff">
					<p>{{ $artikel->kutipan }}</p>

					<div class="ui divider"></div>
					<div class="netadata">
						<a class="ui tiny teal tag label">Tag</a>
						<a class="ui tiny teal tag label">Tag</a>
						<a class="ui tiny teal tag label">Tag</a>
						<div style="float: right;">
							<a href="{{ url('kategori/',$artikel->slug) }}" class="ui tiny label blue">{{ $artikel->kategori->nama_kategori }}</a>
						</div>
					</div>
				</div>
			@endforeach
			<div class="ui centered">
				{{ $artikels->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
			</div>

		</div>
@endsection