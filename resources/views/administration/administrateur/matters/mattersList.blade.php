@extends('administration.administrateur.admin')

@section('content')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-8">
        @foreach($matters as $matter)        
          <div class="card mt-4">
            <div class="card-header" id="headingOne">
              <div class="row">
                <div class="col col-10">
                  <h5 class="mb-0">
                    <button class="btn btn-link">{{ $matter->matter }}</button>
                  </h5>
                </div>
                <div class="col col-1">
                  <a href="{{route('matter_edit', $matter)}}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                </div>
                <div class="col col-1">
                  <form action="" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>               
                  </form>
                </div>
              </div>  
            </div>
            <div id="collapseOne" class="collapse show">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <img class="img-fluid" src="{{asset( $matter->image )}}" alt="Sample image">
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2 class="title text-center pb-2">{{ $matter->title }}</h2>
                    <h5 class="content pb-2">{{ $matter->content }}</h5>
                    <div class="col-md-6 offset-md-4">
                      <button type="button" class="btn btn-warning btn-md">
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
      </div>
    </div>
  </div>
@endsection