@extends('admin.master')
@section('judul','Tambah Artikel')

@section('isi')
	<div class="ui container">
		<div class="ui one column stackable grid">
		  	<div class="ten column">
		  		<div class="ui segment">
		  			<div class="ui tiny breadcrumb">
							<a href="{{ url('admin') }}" class="section">Dashboard</a>
							<span class="divider">/</span>
							<a href="{{ url('admin/artikel') }}" class="active section">Artikel</a>
							<span class="divider">/</span>
							<div class="active section">Input Artikel</div>
					</div>
		  		</div>
			    <div class="ui segment stacked raised blue">
			    	<form enctype="multipart/form-data" class="ui form" method="post" action="{{ url('admin/artikel/'.$artikel->slug) }}">
			    		{{ csrf_field() }}
			    		<input type="hidden" name="_method" value="PATCH">
						<h4 class="ui dividing header">Tambah Artikel</h4>
						
						<div class="two field">
							<div class="two fields">
								<div class="field">
									<label>Judul</label>
								  	<input name="judul" id="dataSlug" placeholder="Judul Artikel" type="text" onkeyup="buatSlug()" value="{{ $artikel->judul }}">
								</div>

								<div class="field">
									<label>Slug</label>
								  	<input name="slug" id="slug" placeholder="Slug " type="text" value="{{ $artikel->slug }}">
								</div>
							</div>
						</div>

					  	<div class="two fields">
						    <div class="field">
						      	<label>Kategori</label>
						      	<select class="ui fluid dropdown" name="kategori" id="kategori">
						      		@foreach($kategoris as $kategori)
						      			@if($artikel->kategori->first()->id == $kategori->id)
						        			<option value="{{ $kategori->id }}" selected>{{ $kategori->nama_kategori }}</option>	
										@else
											<option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
										@endif
									@endforeach
								</select>
						    </div>

						    <div class="field">
								<label>Tag</label>
								<div class="field">
								    <select multiple="" class="ui fluid dropdown" name="tag[]" id="tag">
								 		@foreach($tags as $tag)
								 			@foreach($tagArtikel as $tagAr)
								 				@if($tag->id == $tagAr)
								 					<option value="{{ $tag->id }}" selected>{{ $tag->nama_tag }}</option>
								 				@endif
								 			@endforeach
								 		@endforeach
								    </select>
								 </div>
						    </div>
					  	</div>

					  	<div class="three fields">
							<div class="ten wide field">
								<label>Meta Keyword</label>
								<input type="text" name="meta_keyword" placeholder="Pisahkan kata menggunakan koma" value="{{ $artikel->meta_keyword }}">
							</div>

							<div class="two wide field">
								<label>Status</label>
								<select class="ui fluid dropdown" name="status">
									@if($artikel->status == 'pending')
						        		<option value="pending" selected>Pending</option>
						        	@else
						        		<option value="release">Release</option>
						        	@endif				      
								</select>
							</div>

							<div class="four wide field">
								<label>Foto Artikel</label>
								<div class="ui action input">
									<input type="text" name="banding" value="{{ $artikel->foto }}" readonly>
									<input type="file" name="foto">
									<div class="ui icon button">
									  <i class="attach icon"></i>
									</div>
								</div>
							</div>
						</div>

						<div class="two fields">
						  	<div class="field">
						  		<label>Kutipan</label>
		    					<textarea rows="3" name="kutipan" placeholder="Kutipan tentang Artikel">{{ $artikel->kutipan }}</textarea>
						  	</div>	

						  	<div class="field">
						  		<label>Meta Deskripsi</label>
						  		<textarea rows="3" name="meta_deskripsi" placeholder="Deskripsi SEO">{{ $artikel->meta_deskripsi }}</textarea>
						  	</div>
						</div>

						<div class="one field">
							<div class="field">
								<label>Artikel</label>
								<textarea name="artikel">{{ $artikel->isi }}</textarea>
							</div>
						</div>

						<div class="one field">
							<div class="field">
								<button class="ui animated fade button inverted blue">
									<div class="hidden content">
										<i class="file icon"></i>
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