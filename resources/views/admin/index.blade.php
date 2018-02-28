@extends('admin.master')
@section('judul','Dashboard Admin')

@section('isi')
	<div class="ui container">
		<div class="ui two column stackable grid">
			
		    <div class="nine wide column">
				<div class="ui stacked segment">
		        	<a class="ui ribbon orange label">Ganti Password</a>

		        	<form class="ui form">
		          		<div class="two fields">
		            		<div class="field">
		              			<label>Nama</label>

		              			<div class="ui right labeled input">
		                			<input type="text" placeholder="Nama ">
		                			<div class="ui label">
		                  				<i class="user icon"></i>
		                			</div>
		              			</div>
		            		</div>

		            		<div class="field">
		              			<label>Email</label>
		              			
		              			<div class="ui right labeled input">
		                			<input type="text" placeholder="Email">
		                			<div class="ui label">
		                  				<i class="envelope icon"></i>
		                			</div>
		              			</div>

		            		</div>
		          		</div>

		          		<div class="ui secondary segment datepicker dont-show small form">

		          			<div class="fields">
				            	<div class="sixteen wide field">
				                	<label>Kata Sandi Lama</label>
				                	<div class="one fields">
				                  		<div class="ui right labeled input">
				                			<input type="password" placeholder="Kata Sandi Lama">
				                			<div class="ui label">
				                  				<i class="lock icon"></i>
				                			</div>
				              			</div>
				                	</div>
				              	</div>
				            </div>

		              		<div class="fields">
		                		<div class="eight wide field">
		                			<label>Kata Sandi Baru</label>
					              	<div class="ui right labeled input">
				               			<input type="password" placeholder="Kata Sandi baru">
				               			<div class="ui label">
				               				<i class="lock icon"></i>
				               			</div>
				           			</div>
					            </div>

		               			<div class="eight wide field">
		               				<label>Ulangi Kata Sandi Baru</label>
					              	<div class="ui right labeled input">
				               			<input type="password" placeholder="Kata Sandi baru">
				               			<div class="ui label">
				               				<i class="lock icon"></i>
				               			</div>
				           			</div>
		               			</div>
		           			</div>

		          		</div>
		          		
		          		<button class="ui animated fade button blue">
							<div class="hidden content">
								<i class="file icon"></i>
							</div>
							<div class="visible content">
								Simpan    
							</div>
						</button>	
		        	
		        	</form>
		      	</div>

		      	<table class="ui small very compact unstackable selectable olive table">
			        <thead>
			         	<tr>
			            	<th colspan="2">
			              		Kategori
			            	</th>
			          	</tr>
			        </thead>

			        <tbody>
			        	@foreach($kategoris as $kategori)
			          		<tr>
			            		<td>{{ $kategori->nama_kategori }}</td>
			            		<td class="right aligned">20,15</td>
			          		</tr>
			          	@endforeach
			        </tbody>
			    </table>

			</div>

			<div class="seven wide column">
				<div class="seven wide column">
			    	<div class="ui secondary segment">
			    		<div class="ui grey small horizontal statistic">
			    			<div class="value">
			    				{{ $artikels->count() }}
			    			</div>
			    			<div class="label">
			    				Artikel
			    			</div>
			    		</div>
			    	</div>

			      	<table class="ui small very compact unstackable selectable orange table">
				        <thead>
				          	<tr>
				            	<th colspan="2">
				              		Tag
				            	</th>
				          	</tr>
				        </thead>

				        <tbody>
				        	@foreach($tags as $tag)
				          		<tr>
				            		<td>{{ $tag->nama_tag }}</td>
				            		<td class="right aligned">11,42</td>
				          		</tr>
				          	@endforeach
				        </tbody>
			      	</table>
		    	</div>
			</div>
		</div>
	</div>
@endsection