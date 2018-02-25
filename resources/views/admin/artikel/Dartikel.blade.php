@extends('admin.master')
@section('judul','Detail Artikel')

@section('isi')
	<div class="ui container">
		<div class="ui one column stackable grid">
			<div  class="ten column">
				<div class="ui segment">
		  			<div class="ui tiny breadcrumb">
						  <a class="section">Dashboard</a>
						  <span class="divider">/</span>
						  <div class="active section">Detail Artikel</div>
					</div>
		  		</div>

				<div class="ui segment raised">
					<h3 class="ui dividing header" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
						Membuat Artikel Dengan laravel 5
					</h3>
					<div class="ui two column stackable grid">
						<div class="twelve wide column">
							<div class="six fields">
								
								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Kategori : </label>
									<label class="sub header">Pemrograman</label>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Kutipan : </label>
									<label class="sub header">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
								</div>
								<div class="ui divider"></div>

								{{-- <div class="field">
									<label class="ui header">Tag : </label>
									<label class="sub header"> 
										<a class="ui mini blue tag label">Pemrograman</a>
										<a class="ui mini blue tag label">Laravel</a>
										<a class="ui mini blue tag label">Framework</a>
									</label>
								</div>
								<div class="ui divider"></div> --}}

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Slug : </label>
									<label class="sub header">membuat-artikel-laravel</label>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Meta Deskripsi : </label>
									<label class="sub header">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Meta Keyword : </label>
									<label class="sub header">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
								</div>
								<div class="ui divider"></div>

								<div class="field" style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
									<label class="ui header">Artikel : </label>
									<label class="sub header">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</label>
								</div>
								<div class="ui divider"></div>

							</div>
						</div>
						
						<div class="four wide column center aligned">
							<div class="ui link cards">
								<div class="card">
								    <div class="image">
								      <img src="/images/avatar2/large/matthew.png">
								    </div>
								    <div class="content">
								      <div class="meta">
								       	<span class="left floated">
								        Dibuat :
								        <i class="clock icon"></i>
									    21-12-2018 21:21:21
								      </span>
								      <span class="left floated">
								      	Diubah :
								        <i class="edit icon"></i>
									    21-12-2018 21:21:21
								      </span>
								      </div>
								      <div class="description">
										<a class="ui mini blue tag label">Pemrograman</a>
										<a class="ui mini blue tag label">Laravel</a>
										<a class="ui mini blue tag label">Framework</a>
								      </div>
								    </div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection