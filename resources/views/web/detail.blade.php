@extends('web.master')
@section('judul','Artikel | '.$artikel->judul)

@section('isi')
	<div class="twelve wide column">
		<div class="ui segment">
			<h1 class="ui header">
				{{ $artikel->judul }}
				<label class="sub header">
					{{ $artikel->created_at->format('h:i:s j-m-Y') }} | <a href="{{ url('kategori/',$artikel->kategori->nama_kategori) }}" class="ui tiny blue label"><i class="setting icon"></i>{{ $artikel->kategori->nama_kategori }}</a>
				</label>
			</h1>
			<div class="ui divider"></div>
			<img class="ui medium left floated rounded image" src="{{ asset('storage/foto') }}/{{ $artikel->foto }}"></img>
			<p style="margin-bottom: 30px;">{{ $artikel->kutipan }}</p>
			<div class="ui divider"></div>
			@php
				$idTags = explode(',',$artikel->tag_id); 
			@endphp
			@foreach($tags as $tag)
				@foreach($idTags as $id)
					@if($id == $tag->id)
						<a class="ui tag icon label teal mini" href="{{ url('tag/',$tag->slug) }}">{{ $tag->nama_tag }}</a>
					@endif
				@endforeach
			@endforeach

			<div class="ui divider"></div>
			{!! $artikel->isi !!}
		</div>
	</div>
@endsection