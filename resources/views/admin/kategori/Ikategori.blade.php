@extends('admin.master')
@section('judul','Daftar Kategori')

@section('isi')

	<div class="ui small modal">
		<div class="ui icon header">
			<i class="trash icon"></i>
			Hapus Data Kategori
		</div>
		<div class="content right floated">
			<p>Data kategori yang telah dihapus tidak bisa dikembalikan, Anda yakin ingin menghapus kategori ini?</p>
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
							<a href="{{ url('admin/kategori') }}" class="active section">Kategori</a>
							<span class="divider">/</span>
							<div class="active section">Input Kategori</div>
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
						Kategori
					</h4>

					<form class="ui right aligned category search" method="post" action="{{ route('kategori.cari') }}">
						{{ csrf_field() }}
						<div class="ui icon input">
							<input name="cari" class="prompt" placeholder="Cari Kategori" type="text">
							<i class="search icon"></i>
						</div>
						<div class="results"></div>
					</form>

					<table class="ui striped celled table selectable">
					  	<thead>
					    	<tr>
					    		<th>No</th>
						    	<th>Kategori</th>
						    	<th>Slug</th>
						    	<th>Dibuat</th>
						    	<th>Diubah</th>
						    	<th>Aksi</th>
					  		</tr>
						</thead>
						<tbody>
							@if($data->isNotEmpty())
								@foreach($data as $kategori)
								 	<tr>
								 		<td>{{ ++$no }}</td>
								    	<td>{{ $kategori->nama_kategori }}</td>
								    	<td>{{ $kategori->slug }}</td>
								    	<td>{{ $kategori->created_at->format('H:i:s j-M-Y') }}</td>
								    	<td>{{ $kategori->updated_at->format('H:i:s j-M-Y') }}</td>
								    	<td class="center aligned">
								    		<a href="{{ url('admin/kategori/'.$kategori->slug).'/edit' }}" class="ui mini animated fade button inverted blue">
								    			<div class="hidden content">
													<i class="edit icon"></i>
												</div>
												<div class="visible content">
													Edit    
												</div>
								    		</a>
								    		<a onclick="hapus()" id="hapus" data-slug="/admin/kategori/{{ $kategori->slug }}" 
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
							@else
								<tr class="center aligned">
									<th colspan="4">Tidak Ada Data Kategori</th>
								</tr>
							@endif		
						</tbody>
					</table>

					<div class="ui container center aligned">
						{{ $data->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
					</div>

				</div>

			</div>
		</div>
	</div>
@endsection