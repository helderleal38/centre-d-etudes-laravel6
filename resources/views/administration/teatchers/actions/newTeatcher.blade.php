@extends('administration.teatchers.teatcher')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center bg-info">
            <h2>Formulaire de demande d'emploi</h2>
          </div>
          <div class="card-body">
            <form action="{{ Route('teatchers_store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->firstname }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->name }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Addresse mail') }}</label>
                <div class="col-md-6">
                  <input class="form-control" type="text" placeholder="{{ Auth::user()->email }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
                <div class="col-md-6">
                    <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" 
                    name="phoneNumber" value="{{ old('phoneNumber') }}" autocomplete="phoneNumber" autofocus>
                    {!! $errors ->first("phoneNumber", ":message") !!}
                </div>
              </div>
              
              <div class="form-group row">
                <label for="scoolLevel" class="col-md-4 col-form-label text-md-right">{{ __('Cycle à enseigner') }}</label>
                <div class="col-md-6">
                  <select class="form-control @error('scoolLevel') is-invalid @enderror" id="scoolLevel" type="text" name="scoolLevel" value="{{ old('scoolLevel') }}">
                    <option></option>
                    <option>Cycle 2 (cp, ce1, ce2)</option>
                    <option>Cycle 3 (cm1, cm2, 6éme)</option>
                    <option>Cycle 4 (5éme, 4éme, 3éme)</option>
                    <option>2nd cycle (2nd, 1ére, terminale)</option>
                    <option>Université</option>
                    <option>Cours adultes</option>
                  </select>
                  {!! $errors->first("scoolLevel", ":message") !!}
                </div>
              </div>

              <div class="form-group row">
                <label for="matter" class="col-md-4 col-form-label text-md-right">{{ __('Matière à enseigner') }}</label>
                <div class="col-md-6">
                  <select class="form-control @error('matter') is-invalid @enderror" id="matter" type="text" name="matter" value="{{ old('matter') }}">
                    @foreach($matters as $matter)
                        <option disabled selected></option>
                        <option>{{$matter->matter}}</option>
                    @endforeach
                  </select>
                  {!! $errors->first("matter", ":message") !!}
                  </div>
              </div>
              
              <div class="form-group row">
                <label for="cv" class="col-md-4 col-form-label text-md-right">{{ __('CV') }}</label>
                <div class="col-md-6">
                    <input type="file" class="form-control-file mt-2" id="cv" name="cv">
                    {!! $errors->first("cv", ":message") !!}
                </div>
              </div>
              <!-- </form> -->
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