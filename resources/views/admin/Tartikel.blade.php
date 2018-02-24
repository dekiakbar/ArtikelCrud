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
						      	<select class="ui fluid dropdown" name="kategori">
						        	<option value="pemrograman">Pemrograman</option>
						        	<option value="jaringan">Jaringan</option>				      
								</select>
						    </div>

						    <div class="field">
								<label>Tag</label>
								<div class="field">
								    <select multiple="" class="ui fluid dropdown" name="tag[]">
								      	<option value="laravel">Laravel</option>
									    <option value="php">PHP Native</option>
									    <option value="yii">Yii</option>
								    </select>
								 </div>
						    </div>
					  	</div>

						<div class="two fields">
						  	<div class="field">
						  		<label>Kutipan</label>
		    					<textarea rows="3" name="kutipan"></textarea>
						  	</div>	

						  	<div class="field">
						  		<label>Meta Deskripsi</label>
						  		<textarea rows="3" name="meta_deskripsi"></textarea>
						  	</div>
						</div>

						<div class="two fields">
							<div class="ten wide field">
								<label>Meta Keyword</label>
								<input type="text" name="meta_keyword">
							</div>
							
							<div class="six wide field">
								<label>Foto Artikel</label>
								<div class="ui action input">
									<input type="text" placeholder="" readonly>
									<input type="file">
									<div class="ui icon button">
									  <i class="attach icon"></i>
									</div>
								</div>
							</div>
						</div>

						<div class="ui field text-centered">
							<div class="ui button inverted blue" tabindex="0">Simpan</div>
						</div>
					</form>
			    </div>
		  	</div>
		</div>
	</div>
@endsection