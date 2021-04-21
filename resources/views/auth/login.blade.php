@extends('layouts.app')

@section('content')
<div class="container pt-5 pb-5 mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card">

        <div class="card-body">
          <h3 class="card-tile text-center">Já tens uma conta ?</h3>
          <h6 class="card-text text-center pb-5">Insere o teu e-mail e palavra-passe !</h6>
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row d-flex justify-content-center">
              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row d-flex justify-content-center">
              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
                required autocomplete="current-password" placeholder="Palavra passe">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row d-flex justify-content-center">
              <div class="col-md-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">
                      {{ __('Lembrar-se de mim') }}
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row d-flex justify-content-center mb-0">
              <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-block">
                    {{ __('ENTRAR') }}
                </button>

                @if (Route::has('password.request'))
                  <a class="card-link" href="{{ route('password.request') }}">
                      {{ __('Esqueceste-te da palavra-passe ?') }}
                  </a>
                @endif
              </div>
            </div>
          </form>
        </div>

        <div class="row d-flex justify-content-center">
          <p class="card-text">Ainda não tens conta ?</p>
          <a href="{{ route('register') }}" class="card-link pl-4" style="color: red;">Inscrição</a>
        </div>
        <div class="row d-flex justify-content">
          <div class="col-sm-6 offset-md-9">
            <a type="button" class="btn btn-outline-secondary" href="{{ route('frontend_accueil') }}">Ferchar</a>
          </div>
        </div>         
      </div>
    </div>   
  </div>
</div>

@endsection
