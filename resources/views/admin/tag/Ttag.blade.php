@extends('admin.master')
@section('judul','Tambah Tag')

@section('isi')
	<div class="ui container">
		<div class="ui one column stackable grid" style="margin-bottom: 270px;">
		  	<div class="ten column">
		  		<div class="ui segment">
		  			<div class="ui tiny breadcrumb">
						  <a href="{{ url('admin') }}" class="section">Dashboard</a>
						  <span class="divider">/</span>
						  <a href="{{ url('admin/tag') }}" class="active section">Tag</a>
						  <span class="divider">/</span>
						  <div class="active section">Input Tag</div>
					</div>
		  		</div>

		  		@if($errors->any())
		  			<div class="ui warning message">
						<i class="close icon"></i>
						<div class="header">
							Notifikasi Form !!
						</div>
						<ul class="list">
							@foreach($errors->all() as $error)	
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
		  		@endif
		  		
			    <div class="ui segment stacked raised violet">
			    	<form class="ui form" method="post" action="{{ route('tag.store') }}">
			    		{{ csrf_field() }}
						<h4 class="ui dividing header">Tambah Tag</h4>
						
						<div class="three fields">
							<div class="field">
								<label>Tag</label>
							  	<input name="nama_tag" id="dataSlug" placeholder="Nama Tag" type="text" onkeyup="buatSlug()">
							</div>

							<div class="field">
								<label>Slug</label>
							  	<input name="slug" id="slug" placeholder="Slug Tag" type="text">
							</div>

							<div class="field">
								<label>Kategori</label>
							  	<select class="ui fluid dropdown" name="kategori_id">
							  		@foreach($kategoris as $kategori)
						        		<option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
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