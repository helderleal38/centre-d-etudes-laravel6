@extends('layouts.app')

@section('content')
<section class="matieres">
  <div class="row justify-content-center d-flex">
    <div class="col col-lg-8 col-md-12">
      <h1 class="title font-weight-normal text-center">Aqui encontras as matérias que ensinamos !</h1>
      <p class="subTitle text-center mb-5">Desenrola a lista e consulta as informações.</p>
    </div>
  </div>
  <div class="row justify-content-center">  
    <div id="accordion" class="col col-lg-8 col-md-12">
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
                <h4 class="title text-center pb-2">{{$matter->title}}</h4>
                <p class="content pb-2">{{$matter->content}}</p>
              </div>
            </div>
            <h4 class="title text-center pb-2 pt-2">Os nossos preços</h4>
            <p>Preço de hora : {{$matter->hourPrice}} euros</p>
            <p>Contrato anual : {{$matter->yearReduction}}% REDUCÃO</p>
            <p>Trouxeste outro aluno ? : {{$matter->extraReduction}}% REDUCÃO sobre o contrato anual</p>
          </div>
        </div>
        
      </div>
      @endforeach
      <div class="row justify-content-center pt-5">
        @if(Auth::guest())                     
          <button type="button" class="btn btn-success btn-responsive" data-toggle="modal" data-target="#commencezDesMaintenaintModal">
              Increve-te já !
          </button>
        @else                      
          <button type="button" class="btn btn-success btn-responsive disabled">
              Inscreve-te já !
          </button>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection
