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
              
              <div class="form-group row">
                <label for="scoolLevel" class="col-md-4 col-form-label text-md-right">{{ __('Cycle scolaire') }}</label>
                <div class="col-md-6">
                    <input id="scoolLevel" type="text" class="form-control @error('scoolLevel') is-invalid @enderror" name="scoolLevel" value="{{ old('scoolLevel') }}" required autocomplete="scoolLevel" autofocus>
                </div>
              </div>

              <div class="form-group row">
                <label for="matter" class="col-md-4 col-form-label text-md-right">{{ __('Matière à enseigner') }}</label>
                <div class="col-md-6">
                  {{-- <input id="matter" type="text" class="form-control @error('matter') is-invalid @enderror" name="matter" value="{{ old('matter') }}" required autocomplete="matter" autofocus> --}}
                  <select class="form-control" id="matter" type="text" name="matter" value="{{ old('matter') }}">
                    @foreach($matters as $matter)
                        <option>{{$matter->matter}}</option>
                    @endforeach
                  </select>
                  </div>
              </div>
              
              <!-- <form action="{{ Route('teatchers_store') }}" method="POST" enctype="multipart/form-data"> -->
              <div class="form-group row">
                <label for="exampleFormControlFile1" class="col-md-4 col-form-label text-md-right">{{ __('CV') }}</label>
                <div class="col-md-6">
                    <input type="file" class="form-control-file mt-2" id="exampleFormControlFile1" name="file">
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