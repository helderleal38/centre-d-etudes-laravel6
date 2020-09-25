@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron bg-dark text-white">
        <h1>Bienvenue {{ Auth::user()->firstname }}</h1>      
    </div>
    <h4>Tu est dans t'on espace client.<br>Ici tu peut :</h4>
    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action list-group-item-info" id="list-home-list" href="{{ route('teatcher_create') }}">Envoyer ta candidature</a>
                <a class="list-group-item list-group-item-action list-group-item-info" id="list-profile-list" href="">Renouveler ta candidature</a>
                <a class="list-group-item list-group-item-action list-group-item-info" id="list-messages-list" href="{{ route('teatcher_comment') }}">Laisser un commentaire</a>
            </div>
            @if(session()->has('info'))
                <div class="alert alert-success mt-2">
                    {{ session('info') }}
                </div>
            @endif
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
