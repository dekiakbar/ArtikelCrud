@extends('admin.master')
@section('judul','Dashboard Admin')

@section('isi')
	<div class="ui container">
		<div class="ui segment">
			<div class="ui breadcrumb">
				<a class="section">Dashboard</a>
				<span class="divider">/</span>
			</div>
		</div>

		<div class="ui segment">
			<div class="ui three column stackable grid center aligned">

				<div class="four wide column">
            		<div class="ui horizontal segments">
            		    <div class="ui inverted teal segment center aligned">
            		        <div class="ui mini inverted  statistic">
            		            <div class="value">
            		                3,952
            		            </div>
            		            <div class="label">
            		                Dilihat
            		            </div>
            		        </div>
            		    </div>
            		    <div class="ui inverted teal tertiary segment center aligned">
            		        <div>
            		        </div>
            		    </div>
            		</div>
				</div>

				<div class="four wide column">
        		    <div class="ui horizontal segments">
        		        <div class="ui inverted purple segment center aligned">
        		            <div class="ui mini inverted statistic">
        		                <div class="value">
        		                    {{ $artikels->count() }}
        		                </div>
        		                <div class="label">
        		                    Artikel
        		                </div>
        		            </div>
        		        </div>
        		        <div class="ui inverted purple tertiary segment center aligned">
        		            <div>
        		            </div>
        		        </div>
        		    </div>
				</div>

				<div class="four wide column">
        			<div class="ui horizontal segments">
        			    <div class="ui inverted blue segment center aligned">
        			        <div class="ui mini inverted statistic">
        			            <div class="value">
        			                {{ $kategoris->count() }}
        			            </div>
        			            <div class="label">
        			                Kategori
        			            </div>
        			        </div>
        			    </div>
        			    <div class="ui inverted blue tertiary segment center aligned">
        			        <div id="">
        			        </div>
        			    </div>
        			</div>
				</div>
	
				<div class="four wide column">
        			<div class="ui horizontal segments">
        			    <div class="ui inverted yellow segment center aligned">
        			        <div class="ui mini inverted statistic">
        			            <div class="value">
        			                {{ $tags->count() }}
        			            </div>
        			            <div class="label">
        			                Tag
        			            </div>
        			        </div>
        			    </div>
        			    <div class="ui inverted yellow tertiary segment center aligned">
        			        <div id="">
        			        </div>
        			    </div>
        			</div>
				</div>
			</div>
		</div>

		<div class="ui two column stackable grid">
			
		    <div class="nine wide column">
				<div class="ui stacked segment">
		        	<a class="ui ribbon teal label">Ganti Password</a>

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
		          		
		          		<button class="ui animated fade button teal">
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

			      	<table class="ui small very compact unstackable selectable purple table">
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