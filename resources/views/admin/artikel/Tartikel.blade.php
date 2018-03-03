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
			    	<form enctype="multipart/form-data" class="ui form" method="post" action="{{ url('admin/artikel') }}">
			    		{{ csrf_field() }}
						<h4 class="ui dividing header">Tambah Artikel</h4>
						
						<div class="two field">
							<div class="two fields">
								<div class="field">
									<label>Judul</label>
								  	<input name="judul" id="dataSlug" placeholder="Judul Artikel" type="text" onkeyup="buatSlug()">
								</div>

								<div class="field">
									<label>Slug</label>
								  	<input name="slug" id="slug" placeholder="Slug " type="text">
								</div>		
							</div>
						</div>

					  	<div class="two fields">
						    <div class="field">
						      	<label>Kategori</label>
						      	<select class="ui fluid dropdown" name="kategori" id="kategori">
						      		<option selected></option>
						      		@foreach($kategoris as $kategori)
						        		<option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>	
									@endforeach
								</select>
						    </div>

						    <div class="field">
								<label>Tag</label>
								<div class="field">
								    <select multiple="" class="ui fluid dropdown" name="tag[]" id="tag">
								 		
								    </select>
								 </div>
						    </div>
					  	</div>

					  	<div class="three fields">
							<div class="ten wide field">
								<label>Meta Keyword</label>
								<input type="text" name="meta_keyword" placeholder="Pisahkan kata menggunakan koma">
							</div>

							<div class="two wide field">
								<label>Status</label>
								<select class="ui fluid dropdown" name="status">
						        	<option value="pending">Pending</option>
						        	<option value="release">Release</option>				      
								</select>
							</div>

							<div class="four wide field">
								<label>Foto Artikel</label>
								<div class="ui action input">
									<input type="text" placeholder="" readonly>
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
		    					<textarea rows="3" name="kutipan" placeholder="Kutipan tentang Artikel"></textarea>
						  	</div>	

						  	<div class="field">
						  		<label>Meta Deskripsi</label>
						  		<textarea rows="3" name="meta_deskripsi" placeholder="Deskripsi SEO"></textarea>
						  	</div>
						</div>

						<div class="one field">
							<div class="field">
								<label>Artikel</label>
								<textarea name="artikel"></textarea>
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