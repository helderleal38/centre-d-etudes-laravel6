@extends('layouts.app')

@section('content')
<section class="matieres-container">
  <div class="row justify-content-center">
    <div id="accordion" class="col col-lg-8">
      @foreach($matters as $matter)
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$matter->id}}" aria-expanded="true" aria-controls="collapseOne">
              {{ $matter->matter }}
            </button>
          </h5>
        </div>
        <div id="collapseOne{{$matter->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <img class="img-fluid" src="{{asset($matter->image)}}" alt="Sample image">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <h2 class="title text-center pb-2">{{$matter->title}}</h2>
                <h5 class="content pb-2">{{$matter->content}}</h5>
                <div class="col-md-6 offset-md-4">
                  <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#loginModal">
                    Commencez dès maintenant !
                  </button>
                </div>
              </div>
            </div>
            <h2 class="title text-center pb-2 pt-2">Nos tarifs</h2>
            <h4>Prix de base : {{$matter->hourPrice}} euros/heure</h4>
            <h4>Forfait à l'année : -{{$matter->yearReduction}}% REDUCTION</h4>
            <h4>Tu nous a ramene d'autres élèves ? -{{$matter->extraReduction}}% REDUCTION sur t'on forfait anuelle</h4>
          </div>
        </div>
      </div>
      @endforeach

      {{-- <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              ANGLAIS
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <img class="img-fluid" src="{{asset('assets/cours_prive.jpeg')}}" alt="Sample image">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <h5>
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </h5>
                <div class="col-md-6 offset-md-4">
                  <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#loginModal">
                    Commencez dès maintenant !
                  </button>
                </div>
              </div>
            </div>                   
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              HISTOIRE
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <img class="img-fluid" src="{{asset('assets/cours_prive.jpeg')}}" alt="Sample image">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <h5>
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </h5>
                <div class="col-md-6 offset-md-4">
                  <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#loginModal">
                    Commencez dès maintenant !
                  </button>
                </div>
              </div>
            </div>                   
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</section>
@endsection
