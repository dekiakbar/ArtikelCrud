@extends('admin.auth.master')
@section('judul','Daftar Admin')

@section('isi')
  <div class="ui middle aligned center aligned grid">
    <div class="column">
      
      <form class="ui large form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="ui stacked segment teal">

          <h2 class="ui teal image header">
            <div class="content">
              Daftar Admin
            </div>
          </h2>
          <div class="ui divider"></div>
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input name="name" placeholder="Nama" type="text" value="{{ old('name') }}">
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
              <i class="mail icon"></i>
              <input name="email" placeholder="E-mail" type="text" value="{{ old('email') }}">
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input name="password" placeholder="Password" type="password">
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input name="password_confirmation" placeholder="Konfirmasi Password" type="password">
            </div>
          </div>

          <button class="ui fluid large inverted blue submit button">Daftar</button>
        
        </div>

      </form>

      @if ($errors->any())
        <div class="ui warning message">
          <i class="close icon"></i>
          <div class="header">
            Notifikasi Form !!
          </div>
          <ul class="list"> 
              <li>{{ $errors->first() }}</li>
          </ul>
        </div>
      @endif

      <div class="ui message">
        <a href="{{ route('password.request') }}">Lupa password ?</a>
      </div>

    </div>
  </div>
@endsection