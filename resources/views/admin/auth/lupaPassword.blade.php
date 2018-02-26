@extends('admin.auth.master')
@section('judul','Lupa Pasword')

@section('isi')
  <div class="ui middle aligned center aligned grid">
    <div class="column">
      
      <form class="ui large form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="ui stacked segment">

          <h2 class="ui teal image header teal">
            <div class="content">
              Lupa Kata Sandi
            </div>
          </h2>
          <div class="ui divider"></div>
          <div class="field">
            <div class="ui left icon input">
              <i class="mail icon"></i>
              <input name="email" placeholder="E-mail" type="text" value="{{ old('email') }}">
            </div>
          </div>

          <button class="ui fluid large blue inverted submit button">Kirim Password</button>
        
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
    </div>
  </div>
@endsection