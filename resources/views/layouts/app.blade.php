<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Vasco Soares') }}</title>-->
    <title>Vasco Soares</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/aditional.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href ="{{ asset('css/aditional.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img class ="navbar-brand" src="{{asset('./assets/logo.png')}}" alt="Vasco Soares logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <!-------------------------------------------------------------------------------------->
            <!------------------------------------- MENU LINKS ------------------------------------->
            <!-------------------------------------------------------------------------------------->
            <li class="nav-item"><a class="nav-link" href="{{ route('frontend_accueil') }}">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('frontend_services') }}">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('frontend_matters') }}">Matières</a></li> 
            <li class="nav-item"><a class="nav-link" href="{{ route('frontend_about') }}">A propos</a></li>
            <!--Si l'utilisateur n'est pas connecte affiche l'alert Modal-->
            @if(Auth::guest())
              <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#alertModal">Recrutement</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('frontend_contact')}}">Contact</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Recrutement</a></li> -->
            @else
                <li class="nav-item"><a class="nav-link" href="{{asset('recrutement')}}">Recrutement</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('frontend_contact')}}">Contact</a></li>
            @endif 
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-------------------------------------------------------------------------------------->
            <!------------------------------ AUTHENTICATION LINKS ---------------------------------->
            <!-------------------------------------------------------------------------------------->
            @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Connection</a>       
                </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                  </li>
              @endif
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  @if(Auth::user()->state == "eleve")
                    <a class="dropdown-item" href="{{ route('students_index') }}">Mon espace</a>
                  @endif
                  @if(Auth::user()->state == "professeur")
                    <a class="dropdown-item" href="{{ route('teatchers_index') }}">Mon espace</a>
                  @endif
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4">
        {{-- <div class="container-fluid">
            @yield('content')
        </div>      --}}
        @yield('content')
    </main>
  </div>
  @include('footer')
  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>

  

  <!---------------------------------------------------------------------------------------------------------------->
  <!------------------------------------------- MODAL RECRUTEMENT -------------------------------------------------->
  <!---------------------------------------------------------------------------------------------------------------->
  <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content ">
        <div class="modal-header">
          <img class ="navbar-brand" src="{{asset('./assets/logo.png')}}" alt="Vasco Soares logo">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card-body" text='centered'>Pour deposer votre candidature, merci de vous inscrire d'abord !</div>
        </div>
        <div class="modal-footer">
            <a class="btn btn-link" href="{{ route('register') }}" style="color: red;">Inscription</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

  <!---------------------------------------------------------------------------------------------------------------->
  <!-----------------------------------MODAL BUTTON COMMENCEZ DES MAINTENANT --------------------------------------->
  <!---------------------------------------------------------------------------------------------------------------->
  <div class="modal fade" id="commencezDesMaintenaintModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content ">
        <div class="modal-header">
          <img class ="navbar-brand" src="{{asset('./assets/logo.png')}}" alt="Vasco Soares logo">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card-body" text='centered'><strong>Vous êtes interessé par un cours?</strong><br> 
              Veuillez créer une compte pour acceder a votre espace personnel,<br> 
              où vous pouvez remplir la fiche de pré-inscription !</div>
        </div>
        <div class="modal-footer">
            <a class="btn btn-link" href="{{ route('register') }}" style="color: red;">Inscription</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

</html>
