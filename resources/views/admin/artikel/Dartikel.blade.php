@extends('admin.master')
@section('judul','Detail Artikel')

@section('isi')
	<div class="ui container">
		<div class="ui one column stackable grid">
			<div  class="ten column">
				<div class="ui segment">
		  			<div class="ui tiny breadcrumb">
						  <a class="section">Dashboard</a>
						  <span class="divider">/</span>
						  <div class="active section">Detail Artikel</div>
					</div>
		  		</div>

				<div class="ui segment raised">
					<h3 class="ui dividing header" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
						{{ $artikel->judul }}
					</h3>
					<div class="ui two column stackable grid">
						<div class="twelve wide column">
							<div class="six fields">
								
								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Kategori : </label>
									<label class="sub header">{{ $artikel->kategori->first()->nama_kategori }}</label>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Kutipan : </label>
									<label class="sub header">{{ $artikel->kutipan }}</label>
								</div>
								<div class="ui divider"></div>

								{{-- <div class="field">
									<label class="ui header">Tag : </label>
									<label class="sub header"> 
										<a class="ui mini blue tag label">Pemrograman</a>
										<a class="ui mini blue tag label">Laravel</a>
										<a class="ui mini blue tag label">Framework</a>
									</label>
								</div>
								<div class="ui divider"></div> --}}

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Slug : </label>
									<label class="sub header">{{ $artikel->slug }}</label>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Meta Deskripsi : </label>
									<label class="sub header">{{ $artikel->meta_deskripsi }}</label>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Meta Keyword : </label>
									<label class="sub header">{{ $artikel->meta_keyword }}</label>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Artikel</label>
									<div class="ui divider"></div>
									
									{!! $artikel->isi !!}
									
								</div>
								<div class="ui divider"></div>

							</div>
						</div>
						
						<div class="four wide column center aligned">
							<div class="ui link cards">
								<div class="card">
								    <div class="image">
								      <img src="{{ asset('storage/foto') }}/{{ $artikel->foto }}">
								    </div>
								    <div class="content">
								      	<div class="meta">
								       		<span class="left floated">
								    			Dibuat :
								    			<i class="clock icon"></i>
												{{ $artikel->created_at->format('H:i:s j-M-Y') }}
								    		</span>
								    		<span class="left floated">
								    			Diubah :
								    			<i class="edit icon"></i>
												{{ $artikel->updated_at->format('H:i:s j-M-Y') }}
								    		</span>
								      	</div>
								    	<div class="description">
								    		@php
								    			$tagArtikel = explode(',', $artikel->tag_id);
								    		@endphp
								      		@foreach($tags as $tag)
								      			@foreach($tagArtikel as $tagAr)
								      				@if($tag->id == $tagAr)
														<a class="ui mini blue tag label">{{ $tag->nama_tag }}</a>
								      				@endif
								      			@endforeach
								      		@endforeach
								    	</div>
								    </div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection