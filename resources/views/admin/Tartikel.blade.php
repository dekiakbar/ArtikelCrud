@extends('admin.master')
@section('judul','Tambah Artikel')

@section('isi')
	<div class="ui container">
		<div class="ui one column stackable grid">
		  <div class="ten column">
		    <div class="ui segment stacked raised">
		    	<form class="ui form">
					<h4 class="ui dividing header">Tambah Artikel</h4>
					<div class="two field">
						<div class="two fields">
							<div class="field">
								<label>Judul</label>
							  	<input name="judul" id="judul" placeholder="Judul Artikel" type="text" onkeyup="buatSlug()">
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
				      <select class="ui fluid dropdown">
				        <option value="laravel">Laravel</option>
					    <option value="php">PHP Native</option>
					    <option value="yii">Yii</option>				      
						</select>
				    </div>
				    <div class="field">
						<label>Country</label>
						<div class="ui fluid search selection dropdown">
						  <input name="country" type="hidden">
						  <i class="dropdown icon"></i>
						  <div class="default text">Tag</div>
						   <div class="menu">
						    <div class="item" data-value="Programming">Programming</div>
						    <div class="item" data-value="Design">Design</div>
						    <div class="item" data-value="Networking">Networking</div>
						  </div>
				        </div>
				    </div>
				  </div>
				  <div class="ui button" tabindex="0">Simpan</div>
				</form>
		    </div>
		  </div>
		</div>
	</div>
@endsection