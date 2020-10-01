@extends('administration.students.student')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center bg-info">
            <h2>Pré-inscription<h2>
          </div>
          <div class="card-body">
            <form method="post" action="{{ Route('students_store') }}">
              @csrf
              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->name }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->firstname }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="scoolName" class="col-md-4 col-form-label text-md-right">{{ __('Ecole') }}</label>
                <div class="col-md-6">
                    <input id="scoolName" type="text" class="form-control @error('scoolName') is-invalid @enderror" name="scoolName" value="{{ old('scoolName') }}" required autocomplete="scoolName" autofocus>
                </div>
              </div>

              <div class="form-group row">
                <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Année scolaire') }}</label>
                <div class="col-md-6">
                  <select class="form-control" id="year" type="text" name="year" value="{{ old('year') }}">
                    <option>Cp</option>
                    <option>Ce1</option>
                    <option>Ce2</option>
                    <option>Cm1</option>
                    <option>Cm2</option>
                    <option>6éme</option>
                    <option>5éme</option>
                    <option>4éme</option>
                    <option>3éme</option>
                    <option>2nde</option>
                    <option>1ére</option>
                    <option>Terminale</option>
                    <option>Université</option>
                    <option>Cours adultes</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="matter" class="col-md-4 col-form-label text-md-right">{{ __('Matière souhaité') }}</label>
                <div class="col-md-6">
                  <select class="form-control" id="matter" type="text" name="matter" value="{{ old('matter') }}">
                      @foreach($matters as $matter)
                          <option>{{$matter->matter}}</option>
                      @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="responsible" class="col-md-4 col-form-label text-md-right">{{ __('Responsable légal') }}</label>
                <div class="col-md-6">                   
                    <input id="responsible" type="text" class="form-control @error('responsible') is-invalid @enderror" name="responsible" value="{{ old('responsible') }}" required autocomplete="responsible" autofocus>
                </div>
              </div>

              <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>
                <div class="col-md-6">
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                <div class="col-md-6">
                  <input class="form-control" type="text" placeholder="{{ Auth::user()->email }}" readonly>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
                <div class="col-md-6">
                    <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber" autofocus>
                </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Envoyer') }}
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