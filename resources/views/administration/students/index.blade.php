@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron bg-dark text-white">
        <h1>Bienvenue {{ Auth::user()->firstname }}</h1>      
    </div>
    <p>Tu est dans t'on espace client.<br>Ici tu peut :</p>
    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#new_registration" role="tab" aria-controls="home">Remplir t'a pré-inscription</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#re_registration" role="tab" aria-controls="profile">Renouveler t'a pré-inscription</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#comment" role="tab" aria-controls="messages">Laisser un commentaire</a>
            </div>
        </div>
        <div class="col-lg-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="new_registration" role="tabpanel" aria-labelledby="list-home-list">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center bg-primary"><h2>Pré-inscription<h2></div>
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
                                            <input id="year" type="text" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="matter" class="col-md-4 col-form-label text-md-right">{{ __('Matière souhaité') }}</label>
                                        <div class="col-md-6">
                                            <select class="form-control" id="matter" type="text" name="matter" value="{{ old('matter') }}">
                                            <option>Mathematique</option>
                                            <option>Anglais</option>
                                            <option>Histoire</option>
                                            </select>
                                            {{--<input id="matter" type="text" class="form-control @error('matter') is-invalid @enderror" name="matter" value="{{ old('matter') }}" required autocomplete="matter" autofocus>--}}
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
            <div class="tab-pane fade" id="re_registration" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center bg-primary"><h2>Renouvelement de la pré-inscription</h2></div>
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
                                            <input id="year" type="text" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="matter" class="col-md-4 col-form-label text-md-right">{{ __('Matière souhaité') }}</label>
                                        <div class="col-md-6">
                                            <select class="form-control" id="matter" type="text" name="matter" value="{{ old('matter') }}">
                                            <option>Mathematique</option>
                                            <option>Anglais</option>
                                            <option>Histoire</option>
                                            </select>
                                            {{--<input id="matter" type="text" class="form-control @error('matter') is-invalid @enderror" name="matter" value="{{ old('matter') }}" required autocomplete="matter" autofocus>--}}
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
            <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="list-messages-list">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center bg-primary"><h2>T'on commentaire</h2></div>
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
                                        <label for="comment" class="col-md-4 col-form-label text-md-right">Commentaire</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control md-textarea" type="text" id="message" name="message" rows="2" ></textarea>                                     
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
          </div>
        </div>
    </div>   
</div>
@endsection

