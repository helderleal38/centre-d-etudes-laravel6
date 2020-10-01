@extends('layouts.app')

@section('content')
<!------------------------------Notre histoire---------------------------->
<section class="container about-history"> 
  <!-- Title -->
  <h1 class="font-weight-bold text-center">Notre histoire</h1>
    <!-- Jumbotron -->
    <div class="jumbotron text-center">
        <!-- Grid row -->
        <div class="row d-flex justify-content-center">
            <!-- Grid column -->
            <div class="col-xl-8 pb-4">
                <p class="card-text">Depuis 1999, Vasco Soares est présent aux côtés de 27.000 familles et les accompagne avec un soutien scolaire individualisé à chaque élève. La qualité de nos enseignants à laquelle s’ajoutent nos formules personnalisées et un suivi pédagogique régulier, nous permettent de satisfaire 95% des parents (enquête réalisée en juin 2019).</p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        <hr class="my-4">
        <div class="pt-2">      
          <a type="button" class="btn btn-outline-primary waves-effect" href="{{ route('register') }}">Inscrivez-vous</a>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!------------------------------Nos espaces------------------------------->
<section class="about-espaces"> 
  <h1 class="text-center mx-auto font-weight-bold mb-4 pb-2">Nos espaces</h1>
  <!--Carousel Wrapper-->
  <div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">
    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="prev"><i
      class="fas fa-chevron-left"></i></a>
      <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="next"><i
      class="fas fa-chevron-right"></i></a>
    </div>
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li>
      <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li>
      <li data-target="#carousel-with-lb" data-slide-to="2" class="secondary-color"></li>
    </ol>
    <!--Slides and lightbox-->
    <div class="carousel-inner mdb-lightbox" role="listbox">
      <div id="mdb-lightbox-ui"></div>
      <!--First slide-->
      <div class=" carousel-item active text-center">
        <figure class="col-md-3 d-md-inline-block">
          <a href="{{asset('assets/spaces/room1.jpg')}}" data-size="1600x1067">
            <img src="{{asset('assets/spaces/room1.jpg')}}" class="img-fluid">
          </a>
        </figure>

        <figure class="col-md-3 d-md-inline-block">
          <a href="{{asset('assets/spaces/room2.jpg')}}" data-size="1600x1067">
            <img src="{{asset('assets/spaces/room2.jpg')}}" class="img-fluid">
          </a>
        </figure>

        <figure class="col-md-3 d-md-inline-block">
          <a href="{{asset('assets/spaces/room3.jpg')}}" data-size="1600x1067">
            <img src="{{asset('assets/spaces/room3.jpg')}}" class="img-fluid">
          </a>
        </figure>
      </div>
      <!--Second slide-->
      <div class="carousel-item text-center">
        <figure class="col-md-3 d-md-inline-block">
          <a href="{{asset('assets/spaces/living-room.jpg')}}" data-size="1600x1067">
            <img src="{{asset('assets/spaces/living-room.jpg')}}" class="img-fluid">
          </a>
        </figure>

        <figure class="col-md-3 d-md-inline-block">
          <a href="{{asset('assets/spaces/kitchen.jpg')}}" data-size="1600x1067">
            <img src="{{asset('assets/spaces/kitchen.jpg')}}" class="img-fluid">
          </a>
        </figure>

        <figure class="col-md-3 d-md-inline-block">
          <a href="{{asset('assets/spaces/bathroom.jpg')}}" data-size="1600x1067">
            <img src="{{asset('assets/spaces/bathroom.jpg')}}" class="img-fluid">
          </a>
        </figure>
      </div>
    </div>
  </div>
</section>
<!------------------------------Notre equipe------------------------------>
<section class="about-equipe"> 
  <h1 class="text-center mx-auto font-weight-bold pt-4">Notre equipe</h2>
  <div class="container card my-5 z-depth-1">   
    <div class="row d-flex justify-content-center">
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div class="avatar w-100 white d-flex justify-content-center align-items-center">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
              class="img-fluid rounded-circle z-depth-1"/>
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Alan Turing</h6>
            <p class="text-muted">
              <small><i>Lorem ipsum dolor sit amet, consectetur adipiscingelit.</i></small>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg"
              class="img-fluid rounded-circle z-depth-1"/>
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Tom Johnson</h6>
            <p class="text-muted">
              <small><i>Lorem ipsum dolor sit amet, consectetur adipiscingelit.</i></small>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div class="avatar w-100 white d-flex justify-content-center align-items-center">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg"
              class="img-fluid rounded-circle z-depth-1"/>
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Alex Laurie</h6>
            <p class="text-muted">
              <small><i>Lorem ipsum dolor sit amet, consectetur adipiscingelit.</i></small>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div class="avatar w-100 white d-flex justify-content-center align-items-center">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg"
              class="img-fluid rounded-circle z-depth-1"/>
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Nathalie Fry</h6>
            <p class="text-muted">
              <small><i>Lorem ipsum dolor sit amet, consectetur adipiscingelit.</i></small>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div class="avatar w-100 white d-flex justify-content-center align-items-center">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
              class="img-fluid rounded-circle z-depth-1"/>
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Emma Lovelace</h6>
            <p class="text-muted">
              <small><i>Lorem ipsum dolor sit amet, consectetur adipiscingelit.</i></small>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div class="avatar w-100 white d-flex justify-content-center align-items-center">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(5).jpg"
              class="img-fluid rounded-circle z-depth-1"/>
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Joanna Thompson</h6>
            <p class="text-muted">
              <small><i>Lorem ipsum dolor sit amet, consectetur adipiscingelit.</i></small>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div class="avatar w-100 white d-flex justify-content-center align-items-center">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg"
              class="img-fluid rounded-circle z-depth-1"/>
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Billy Turner</h6>
            <p class="text-muted">
              <small><i>Lorem ipsum dolor sit amet, consectetur adipiscingelit.</i></small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection    