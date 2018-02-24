@extends('admin.master')
@section('judul','Tambah Kategori')

@section('isi')
	<div class="ui container">
		<div class="ui one column stackable grid">
		  	<div class="ten column">
		  		<div class="ui segment">
		  			<div class="ui tiny breadcrumb">
						  <a class="section">Dashboard</a>
						  <span class="divider">/</span>
						  <div class="active section">Input Kategori</div>
					</div>
		  		</div>
			    <div class="ui segment stacked raised violet">
			    	<form class="ui form" method="post" action="">
			    		{{ csrf_field() }}
						<h4 class="ui dividing header">Tambah Kategori</h4>
						
						<div class="two field">
							<div class="two fields">
								<div class="field">
									<label>Judul</label>
								  	<input name="judul" id="nama_kategori" placeholder="Nama Tag" type="text" onkeyup="buatSlug()">
								</div>

								<div class="field">
									<label>Slug</label>
								  	<input name="slug" id="slug" placeholder="Slug " type="text">
								</div>
							</div>
						</div>

						<div class="one field">
							<div class="field">
								<button class="ui animated fade button inverted blue right floated">
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