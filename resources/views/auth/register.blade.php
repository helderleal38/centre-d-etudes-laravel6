@extends('layouts.app')

@section('content')
<div class="container pt-5 pb-5 mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card">

        <div class="card-body">
          <h3 class="card-tile text-center pb-4">Criar uma nova conta</h3>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="form-group row d-flex justify-content-center">
              <div class="col-md-6">
                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" 
                name="firstname" value="{{ old('firstname') }}"  autocomplete="firstname" autofocus placeholder="Nome"> 
                {!! $errors->first('firstname', ":message") !!}
              </div>
            </div>

            <div class="form-group row d-flex justify-content-center">
              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="Apelidos">
                {!! $errors->first('name', ":message") !!}
              </div>
            </div>

            <div class="form-group row d-flex justify-content-center">
              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                value="{{ old('email') }}" autocomplete="email" placeholder="E-mail">
                {!! $errors->first('email', ":message") !!}
              </div>
            </div>

            <div class="form-group row d-flex justify-content-center">
              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                value="{{ old('password') }}" name="password"  autocomplete="new-password" placeholder="Palavra passe">
                {!! $errors->first('password', ":message") !!}
              </div>
            </div>

            <div class="form-group row d-flex justify-content-center">
              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" 
                value="{{ old('password_confirmation') }}" autocomplete="new-password" placeholder="Confirmação da palavra passe">
                {!! $errors->first('password_confirmation', ":message") !!}
              </div>
            </div>
            
            <div class="form-group row d-flex justify-content-center">
              <div class="col-md-6">
                <select name="state" class="form-control @error('state') is-invalid @enderror">
                  <option disabled selected>Você é :</option>
                  <option value="eleve">Aluno/a</option>
                  <option value="professeur">Professor/a</option>
                </select>
                {!! $errors->first('state', ":message") !!}
              </div>              
            </div>

            <div class="form-group row d-flex justify-content-center pt-4">
              <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-block">
                    {{ __('ENVIAR') }}
                </button>
              </div>
            </div>

            <div class="row d-flex justify-content">
              <div class="col-sm-6 offset-md-9">
                <a type="button" class="btn btn-outline-secondary" href="{{route('frontend_accueil')}}">Fechar</a>
              </div>
            </div>    
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
