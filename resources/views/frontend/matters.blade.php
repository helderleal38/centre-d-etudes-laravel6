@extends('layouts.app')

@section('content')
<section class="matieres-container">
  <div class="row justify-content-center d-flex">
    <div>
      <h1 class="title font-weight-bold text-center">Les matiéres enseignés dans notre centre</h1>
      <h5 class="subTitle text-center mb-5">Deroulez la liste pour voir le contenu</h5>
    </div>
    
    <div id="accordion" class="col col-lg-8">
      @foreach($matters as $matter)
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="text-center mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$matter->id}}" aria-expanded="true" aria-controls="collapseOne">
              {{ $matter->matter }}
            </button>
          </h5>
        </div>
        <div id="collapseOne{{$matter->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <img class="img-fluid" src="{{asset($matter->image)}}" alt="Sample image">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <h2 class="title text-center pb-2">{{$matter->title}}</h2>
                <h5 class="content pb-2">{{$matter->content}}</h5>
                <div class="col-md-6 offset-md-4">
                </div>
              </div>
            </div>
            <h2 class="title text-center pb-2 pt-2">Nos tarifs</h2>
            <h4>Prix de base : {{$matter->hourPrice}} euros/heure</h4>
            <h4>Forfait à l'année : {{$matter->yearReduction}}% REDUCTION</h4>
            <h4>En cas de parrainage : {{$matter->extraReduction}}% REDUCTION sur votre forfait anuelle</h4>
          </div>
        </div>
      </div>
      @endforeach
      <div class="row justify-content-center pt-5">
        @if(Auth::guest())                     
          <button type="button" class="btn btn-success btn-responsive" data-toggle="modal" data-target="#commencezDesMaintenaintModal">
              Commencez dès maintenant !
          </button>
        @else                      
          <button type="button" class="btn btn-success btn-responsive disabled">
              Commencez dès maintenant !
          </button>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection
