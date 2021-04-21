@extends('administration.administrateur.templates.admin')

@section('content')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-8">
        @if(session()->has('success'))
          <div class="alert alert-success mt-2">
            {{ session('success') }}
          </div>
        @endif
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
                  <form action="{{route('matter_delete', $matter)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Vous êtes sur de vouloir supprimer cette matiére ?');"><i class="fas fa-trash"></i></button>               
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
                  </div>
                </div>
                <h2 class="title text-center pb-2 pt-2">Os nossos preços</h2>
                <h4>Preço de hora : {{$matter->hourPrice}} euros</h4>
                <h4>Contrato anual : {{$matter->yearReduction}}% REDUÇÃO</h4>
                <h4>Em caso de referenciação : {{$matter->extraReduction}}% REDUÇÃO sobre o contrato anual</h4>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection