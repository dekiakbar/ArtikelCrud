@extends('web.master')
@section('judul', config('app.name') )
@section('url',  secure_url('/') )
@section('deskripsi', "website simple blog yang dibuat dengan laravel 5 dan semantic UI" )
@section('image', "https://simpleblog.apps.nooby.dev/storage/foto/1520092297.png")

@section('isi')
		<div class="twelve wide column">
			
			@foreach($artikels as $artikel)
				<div class="ui segment raised">
					<h3 class="ui header">
						<a href="{{ url('/detail',$artikel->slug) }}">{{ $artikel->judul }}</a>
						<span class="sub header">Di post pada {{ $artikel->created_at->format('H:i:s j-M-Y') }}</span>
					</h3>

					<div class="ui divider"></div>

					<img width="300px" height="170px" alt="{{ $artikel->judul }}" class="ui medium left floated rounded image" src="{{ asset('storage/foto') }}/{{ $artikel->foto }}">
					<p>{{ $artikel->kutipan }}</p>

					<div class="ui divider"></div>
					<div class="netadata">
						@php
							$tag_id = $artikel->tag_id;
							$tagAr = explode(',', $tag_id);
						@endphp

						@foreach($tags as $tag)
							@foreach($tagAr as $tagArtikel)
								@if($tagArtikel == $tag->id)
									<a href="{{ url('tag',$tag->slug) }}" class="ui tiny teal tag label">{{ $tag->nama_tag }}</a>
								@endif
							@endforeach
						@endforeach

						<div style="float: right;">
							<a href="{{ url('kategori',$artikel->kategori->slug) }}" class="ui tiny label blue">{{ $artikel->kategori->nama_kategori }}</a>
						</div>
					</div>
				</div>
			@endforeach
			<div class="ui container center aligned">
				{{ $artikels->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
			</div>

		</div>
@endsection
