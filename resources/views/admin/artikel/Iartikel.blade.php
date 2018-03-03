@extends('admin.master')
@section('judul','Daftar Artikel')

@section('isi')

	<div class="ui small modal">
		<div class="ui icon header">
			<i class="trash icon"></i>
			Hapus Data Artikel
		</div>
		<div class="content right floated">
			<p>Data artikel yang telah dihapus tidak bisa dikembalikan, Anda yakin ingin menghapus artikel ini?</p>
		</div>
		<div class="actions">
			<div class="ui red inverted cancel inverted button tidak">
				<i class="remove icon"></i>
				Tidak
			</div>
			<div class="ui green ok inverted button tidak ya">
				<i class="checkmark icon"></i>
				Iya
			</div>
		</div>
	</div>

	<div class="ui container">
		<div class="ui one column stackable grid">
			<div  class="ten column">
				
				<div class="ui segment">
		  			<div class="ui tiny breadcrumb">
						  <a href="{{ url('admin') }}" class="section">Dashboard</a>
						  <span class="divider">/</span>
						  <div class="active section">Daftar Artikel</div>
					</div>
		  		</div>

		  		@if(session()->has('status'))
		  			@if(session('status') == 'Sukses')
		  				<div class="ui positive message">
						  <i class="close icon"></i>
						  <div class="header">
						    {{session('status')}}
						  </div>
						  <p>{{session('pesan')}}</p>
						</div>
		  			@else
		  				<div class="ui negative message">
						  <i class="close icon"></i>
						  <div class="header">
						    {{session('status')}}
						  </div>
						  {{session('pesan')}}
						</div>
		  			@endif
		  		@endif

				<div class="ui segment raised">
					<h4 class="ui horizontal divider header">
						<i class="list icon"></i>
						Artikel
					</h4>

					<form class="ui right aligned category search" action="{{ route('artikel.cari') }}" method="post">
						{{ csrf_field() }}
						<div class="ui icon input">
							<input name="cari" class="prompt" placeholder="Cari Artikel" type="text">
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
						    			<a href="{{ url('admin/artikel',$artikel->slug) }}" class="ui mini animated button inverted blue center">
						    				<div class="hidden content">
												<i class="zoom icon"></i>
											</div>
											<div class="visible content">
												Lihat    
											</div>
						    			</a>
						    			<a href="{{ url('admin/artikel',$artikel->slug.'/edit') }}" class="ui mini animated fade button inverted violet">
						    				<div class="hidden content">
												<i class="edit icon"></i>
											</div>
											<div class="visible content">
												Edit    
											</div>
						    			</a>
						    			<a onclick="hapus()" id="hapus" data-slug="/admin/artikel/{{ $artikel->slug }}" 
								    		data-token="{{ csrf_token() }}" class="ui mini animated vertical button inverted red">
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

					<div class="ui container center aligned">
							{{ $artikels->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
					</div>

				</div>

			</div>
		</div>
	</div>
@endsection