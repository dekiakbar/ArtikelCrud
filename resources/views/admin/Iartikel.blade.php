@extends('admin.master')
@section('judul','Daftar Artikel')

@section('isi')
	<div class="ui container">
		<div class="ui one column stackable grid">
			<div  class="ten column">
				
				<div class="ui segment raised">
					<h4 class="ui horizontal divider header">
						<i class="list icon"></i>
						Daftar Artikel
					</h4>

					<form class="ui right aligned category search">
						{{ csrf_field() }}
						<div class="ui icon input">
							<input class="prompt" placeholder="Cari Artikel" type="text">
							<i class="search icon"></i>
						</div>
						<div class="results"></div>
					</form>

					<table class="ui striped celled table selectable">
					  	<thead>
					    	<tr>
					    		<th>No</th>
						    	<th>Judul</th>
						    	<th>Slug</th>
						    	<th>Foto</th>
						    	<th>Aksi</th>
					  		</tr>
						</thead>
						<tbody>
						 	<tr>
						 		<td>1</td>
						    	<td>Membuat Iso Ubuntu Di terminal linux</td>
						    	<td>membuat-iso-ubuntu</td>
						    	<td>
						    		<h4 class="ui image header">
						        		<img src="/" class="ui mini rounded image">
						        		<div class="content">
						          			Ubuntu
						          			<div class="sub header">Linux</div>
						      			</div>
						    		</h4>
						    	</td>
						    	<td class="center aligned">
						    		<a href="" class="ui mini animated button inverted blue center">
						    			<div class="hidden content">
											<i class="zoom icon"></i>
										</div>
										<div class="visible content">
											Lihat    
										</div>
						    		</a>
						    		<a href="" class="ui mini animated fade button inverted violet">
						    			<div class="hidden content">
											<i class="edit icon"></i>
										</div>
										<div class="visible content">
											Edit    
										</div>
						    		</a>
						    		<a href="" class="ui mini animated vertical button inverted red">
						    			<div class="hidden content">
											<i class="delete icon"></i>
										</div>
										<div class="visible content">
											Hapus    
										</div>
						    		</a>
						    	</td>
							</tr>


						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
@endsection