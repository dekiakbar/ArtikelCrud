@extends('admin.auth.master')
@section('judul','Daftar Admin')

@section('isi')
  <div class="ui middle aligned center aligned grid">
    <div class="column">
      <h2 class="ui teal image header">
        <div class="content">
          Daftar Admin
        </div>
      </h2>
      
      <form class="ui large form" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="ui stacked segment">
          
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

          <button class="ui fluid large teal submit button">Daftar</button>
        
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