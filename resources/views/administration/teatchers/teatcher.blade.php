@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron teatcher text-white" style="background-color:  #343A40;">
      <h1 style="color:white">Bem-vindo/a {{ Auth::user()->firstname }}</h1>      
    </div>
    <h4>Este é o seu espaço professor.<br>Aqui você pode :</h4>
    <div class="row">
      <div class="col-lg-4 mb-3">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action list-group-item-info" id="list-home-list" 
          href="{{ route('teatcher_create') }}">Enviar a sua candidatura</a>
          <a class="list-group-item list-group-item-action list-group-item-info" id="list-messages-list" 
          href="{{ route('teatcher_comment') }}">Enviar um comentário</a>
        </div>
        @if(session()->has('success'))
          <div class="alert alert-success mt-2">
              {{ session('success') }}
          </div>
        @endif
      </div>
      <div class="col-lg-8">
        <div class="tab-content" id="nav-tabContent">
            
          @yield('container')

        </div>
      </div>
    </div>   
  </div>  
@endsection
