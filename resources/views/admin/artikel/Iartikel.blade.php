@extends('admin.master')
@section('judul','Daftar Artikel')

@section('isi')
	<div class="ui container">
		<div class="ui one column stackable grid">
			<div  class="ten column">
				
				<div class="ui segment">
		  			<div class="ui tiny breadcrumb">
						  <a class="section">Dashboard</a>
						  <span class="divider">/</span>
						  <div class="active section">Daftar Artikel</div>
					</div>
		  		</div>

				<div class="ui segment raised">
					<h4 class="ui horizontal divider header">
						<i class="list icon"></i>
						Artikel
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
						    	<th>Kategori</th>
						    	<th>Aksi</th>
					  		</tr>
						</thead>
						<tbody>
							@foreach($artikels as $artikel)
						 		<tr>
						 			<td>{{ ++$no }}</td>
						    		<td>{{ $artikel->judul }}</td>
						    		<td>{{ $artikel->slug }}</td>
						    		<td class="center aligned">
						    			<h3 class="ui image header">
						    	    		<img src="{{ asset('storage/foto') }}/{{ $artikel->foto }}" class="ui massive rounded image">
						    			</h3>
						    		</td>
						    		<td>{{ $artikel->nama_kategori }}</td>
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
							@endforeach
						</tbody>
					</table>

					<div class="ui centered">
							{{ $artikels->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
					</div>

				</div>

			</div>
		</div>
	</div>
@endsection