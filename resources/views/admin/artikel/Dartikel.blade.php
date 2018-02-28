@extends('admin.master')
@section('judul','Detail Artikel')

@section('isi')
	<div class="ui container">
		<div class="ui one column stackable grid">
			<div  class="ten column">
				<div class="ui segment">
		  			<div class="ui tiny breadcrumb">
						  <a href="{{ url('admin/') }}" class="section">Dashboard</a>
						  <span class="divider">/</span>
						  <a href="{{ url('admin/artikel') }}" class="active section">Artikel</a>
						  <span class="divider">/</span>
						  <div class="active section">Detail Artikel</div>
					</div>
		  		</div>

				<div class="ui segment raised">
					<h2 class="ui dividing header" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
						{{ $artikel->judul }}
					</h2>
					<div class="ui two column stackable grid">
						<div class="twelve wide column">
							<div class="six fields">
								
								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<h5 class="ui header">Kategori : 
									{{ $artikel->kategori->nama_kategori }}
									</h5>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<h5 class="ui header">Kutipan : {{ $artikel->kutipan }}</h5>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<h5 class="ui header">Slug : {{ $artikel->slug }}</h5>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<h5 class="ui header">Meta Deskripsi : {{ $artikel->meta_deskripsi }}</h5>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<h5 class="ui header">Meta Keyword : {{ $artikel->meta_keyword }}</h5>
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