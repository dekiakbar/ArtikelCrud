@extends('admin.master')
@section('judul','Edit Tag')

@section('isi')
	<div class="ui container">
		<div class="ui one column stackable grid">
		  	<div class="ten column">
		  		<div class="ui segment">
		  			<div class="ui tiny breadcrumb">
						  <a href="{{ url('admin') }}" class="section">Dashboard</a>
						  <span class="divider">/</span>
						  <a href="{{ url('admin/tag') }}" class="section">Tag</a>
						  <span class="divider">/</span>
						  <div class="active section">Edit Tag</div>
					</div>
		  		</div>
			    <div class="ui segment stacked raised violet" style="margin-bottom: 275px;">
			    	<form class="ui form" method="post" action="{{ url('admin/tag/'.$tag->slug) }}">
			    		{{ csrf_field() }}
			    		<input type="hidden" name="_method" value="PATCH">
						<h4 class="ui dividing header">Edit Tag</h4>
						
						<div class="three fields">
							<div class="field">
								<label>Tag</label>
							  	<input name="nama_tag" id="dataSlug" placeholder="Nama Tag" type="text" 
							  	onkeyup="buatSlug()" value="{{ $tag->nama_tag }}">
							</div>

							<div class="field">
								<label>Slug</label>
							  	<input name="slug" id="slug" placeholder="Slug Tag" type="text" value="{{ $tag->slug }}">
							</div>

							<div class="field">
								<label>Kategori</label>
							  	<select class="ui fluid dropdown" name="kategori_id">
							  		@foreach($kategoris as $kategori)
							  			@if($kategori->id == $tag->kategori_id)
						        			<option value="{{ $kategori->id }}" selected>{{ $kategori->nama_kategori }}</option>
						        		@else
						        			<option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
						        		@endif
									@endforeach
								</select>
							</div>
						</div>

						<div class="one field">
							<div class="field">
								<button class="ui animated fade button inverted blue">
									<div class="hidden content">
										<i class="save icon"></i>
									</div>
									<div class="visible content">
										Simpan    
									</div>
								</button>	
							</div>
						</div>

					</form>
			    </div>
		  	</div>
		</div>
	</div>
@endsection