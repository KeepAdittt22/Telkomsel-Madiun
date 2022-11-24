@extends('layouts.login_temp')

@section('title',"Login")
@section('page_title',"")

@section('content')
<div class="panel-body" style="background-color: rgba(255, 255, 255,0.6)">
    <form id="loginForm" method="POST" action="{{ route('login') }}">
      @csrf
        <h2 style="font-size: 16px; text-align:center">Masukkan Email dan Password Anda</h2>
      <div class="form-group">
          <label for="email" class="control-label">{{ __('Email') }}</label>

          <div class="form-group">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                  <span class="invalid-feedback" role="alert" style="color: red">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div> 

      <div class="form-group">
          <label for="password" class="control-label">{{ __('Password') }}</label>

          <div class="form-group">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

              @error('password')
                  <span class="invalid-feedback" role="alert" style="color: red">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      {{-- <div class="form-group">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                  </label>
                </div>
      </div> --}}
      <button type="submit" class="btn btn-danger btn-large" style="width: 100%">
        {{ __('Login') }}
    </button>
  </form>
  </div>
@endsection
