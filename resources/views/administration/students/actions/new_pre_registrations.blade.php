@extends('administration.students.student')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center bg-info">
            <h2>Pré-inscrição<h2>
          </div>
          <div class="card-body">
            <form method="post" action="{{ Route('pre_registration_store') }}">
              @csrf
              <div class="form-group row">
                <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->firstname }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Apelidos') }}</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->name }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="scoolName" class="col-md-4 col-form-label text-md-right">{{ __('Escola') }}</label>
                <div class="col-md-6">
                    <input id="scoolName" type="text" class="form-control @error('scoolName') is-invalid @enderror" name="scoolName" 
                    value="{{ old('scoolName') }}" autocomplete="scoolName" autofocus>
                    {!! $errors->first('scoolName', ':message') !!}
                </div>
              </div>

              <div class="form-group row">
                <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Ano escolar') }}</label>
                <div class="col-md-6">
                  <select class="form-control @error('scoolName') is-invalid @enderror" id="year" type="text" name="year" value="{{ old('year') }}">
                    <option></option>
                    <option>1° ano</option>
                    <option>2° ano</option>
                    <option>3° ano</option>
                    <option>4° ano</option>
                    <option>5° ano</option>
                    <option>6° ano</option>
                    <option>7° ano</option>
                    <option>8° ano</option>
                    <option>9° ano</option>
                    <option>10° ano</option>
                    <option>11° ano</option>
                    <option>12° ano</option>
                    <option>Universidade</option>
                    <option>Adultos</option>
                  </select>
                  {!! $errors->first('year', ':message') !!}
                </div>
              </div>

              <div class="form-group row">
                <label for="matter" class="col-md-4 col-form-label text-md-right">{{ __('Disciplina') }}</label>
                <div class="col-md-6">
                  <select class="form-control @error('scoolName') is-invalid @enderror" id="matter" type="text" name="matter" value="{{ old('matter') }}">
                      @foreach($matters as $matter)
                        <option disabled selected></option>
                        <option>{{$matter->matter}}</option>
                      @endforeach
                  </select>
                  {!! $errors->first('matter', ':message') !!}
                </div>
              </div>

              <div class="form-group row">
                <label for="responsible" class="col-md-4 col-form-label text-md-right">{{ __('Responsável') }}</label>
                <div class="col-md-6">                   
                    <input id="responsible" type="text" class="form-control @error('responsible') is-invalid @enderror" name="responsible" 
                    value="{{ old('responsible') }}" autocomplete="responsible" autofocus>
                    {!! $errors->first('responsible', ':message') !!}
                </div>
              </div>

              <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Morada') }}</label>
                <div class="col-md-6">
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" 
                    value="{{ old('address') }}" autocomplete="address" autofocus>
                    {!! $errors->first('address', ':message') !!}
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                <div class="col-md-6">
                  <input class="form-control" type="text" placeholder="{{ Auth::user()->email }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
                <div class="col-md-6">
                    <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" 
                    value="{{ old('phoneNumber') }}" autocomplete="phoneNumber" autofocus>
                    {!! $errors->first('phoneNumber', ':message') !!}
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Enviar') }}
                  </button>
                </div>
              </div>             
            </form>
          </div>
        </div>
      </div>
    </div>    
  </div>
@endsection