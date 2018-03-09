@extends('admin.master')
@section('judul','Dashboard Admin')

@section('isi')
	<div class="ui container">

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

		<div class="ui segment">
			<div class="ui tiny breadcrumb">
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
            		               {{ $tamus }}
            		            </div>
            		            <div class="label">
            		                Dilihat
            		            </div>
            		        </div>
            		    </div>
            		    <div class="ui inverted teal tertiary segment vertical center aligned">
            		        <h3 class="header icon">
            		        	<i class="eye big icon"></i>
            		        </h3>
            		    </div>
            		</div>
				</div>

				<div class="four wide column">
        		    <a href="{{ url('admin/artikel') }}" class="ui horizontal segments">
        		        <div class="ui inverted purple segment center aligned">
        		            <div class="ui mini inverted statistic">
        		                <div class="value">
        		                    {{ $artikels }}
        		                </div>
        		                <div class="label">
        		                    Artikel
        		                </div>
        		            </div>
        		        </div>
        		        <div class="ui inverted purple tertiary segment center aligned">
        		             <h3 class="header icon">
            		        	<i class="file big icon"></i>
            		        </h3>
        		        </div>
        		    </a>
				</div>

				<div class="four wide column">
        			<a href="{{ url('admin/kategori') }}" class="ui horizontal segments">
        			    <div class="ui inverted blue segment center aligned">
        			        <div class="ui mini inverted statistic">
        			            <div class="value">
        			                {{ $kategoris }}
        			            </div>
        			            <div class="label">
        			                Kategori
        			            </div>
        			        </div>
        			    </div>
        			    <div class="ui inverted blue tertiary segment center aligned">
        			         <h3 class="header icon">
            		        	<i class="settings big icon"></i>
            		        </h3>
        			    </div>
        			</a>
				</div>
	
				<div class="four wide column">
        			<a href="{{ url('admin/tag') }}" class="ui horizontal segments">
        			    <div class="ui inverted yellow segment center aligned">
        			        <div class="ui mini inverted statistic">
        			            <div class="value">
        			                {{ $tags }}
        			            </div>
        			            <div class="label">
        			                Tag
        			            </div>
        			        </div>
        			    </div>
        			    <div class="ui inverted yellow tertiary segment center aligned">
        			         <h3 class="header icon">
            		        	<i class="tag big icon"></i>
            		        </h3>
        			    </div>
        			</a>
				</div>
			</div>
		</div>

		<div class="ui segment">
			<div style="max-width:100%;">
    				{!! $chart->render() !!}
			</div>
		</div>

		<div class="ui two column stackable grid">
			
		    <div class="nine wide column">
				<div class="ui stacked segment">
		        	<a class="ui ribbon teal label">Ganti Password</a>

		        	<form class="ui form" method="post" action="{{ url('admin') }}">
		        		{{ csrf_field() }}
		        		<input type="hidden" name="adadeh" value="{!!  Auth::id() !!}" readonly>
		          		<div class="two fields">
		            		<div class="field">
		              			<label>Nama</label>

		              			<div class="ui right labeled input">
		                			<input type="text" name="nama" value="{!! Auth::user()->name !!}" readonly>
		                			<div class="ui label">
		                  				<i class="user icon"></i>
		                			</div>
		              			</div>
		            		</div>

		            		<div class="field">
		              			<label>Email</label>
		              			
		              			<div class="ui right labeled input">
		                			<input type="text" name="email" value=" {!!Auth::user()->email!!} " readonly="">
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
				                			<input type="password" name="pasLama" placeholder="Kata Sandi Lama">
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
				               			<input type="password" name="pasBaru" placeholder="Kata Sandi baru">
				               			<div class="ui label">
				               				<i class="lock icon"></i>
				               			</div>
				           			</div>
					            </div>

		               			<div class="eight wide field">
		               				<label>Ulangi Kata Sandi Baru</label>
					              	<div class="ui right labeled input">
				               			<input type="password" name="pasBaruCek" placeholder="Kata Sandi baru">
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

			</div>

			<div class="seven wide column">
				<div class="seven wide column">
					<div class="ui segment yellow raised">
						<h4 class="ui horizontal divider header">
						  	<i class="pie chart icon"></i>
						  	Pengunjung
						</h4>
						<div style="max-width:100%;">
    						{!! $grafikOS->render() !!}
						</div>
					</div>
		    	</div>
			</div>
		</div>
	</div>
@endsection