@extends('layouts.app')

@section('content')
<section class="home-image">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-caption">
                <!--Verification de l'authentification avant la pré-inscription-->
                @if(Auth::guest())                     
                    <h1 class="h1-responsive">A deux on apprend mieux</h1>
                    <button type="button" class="btn btn-warning btn-responsive" data-toggle="modal" data-target="#loginModal">
                        Commencez dès maintenant !
                    </button>
                    {{-- <a class="btn btn-primary" href="{{route('register')}}">Pre-inscription</a> --}}                                    
                @else                      
                    <h1 class="h1-responsive">A deux on apprend mieux</h1>
                    <button type="button" class="btn btn-warning btn-responsive" data-toggle="modal" data-target="#preInscriptionModal">
                        Commencez dès maintenant !
                    </button>
                    {{--<a class="btn btn-warning" href="{{route('students_index')}}">Commencez dès maintenant !</a>--}}                     
                @endif
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/slider4.jpg')}}"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/slider2.jpg')}}"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/slider3.jpg')}}"
            alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!-----------------Pouquoi nous choisir------------------>
<div class="container-fluid py-5 my-5 z-depth-1">
  <h1 class="font-weight-bold text-center mb-5 pb-3">Pourquoi nous choisir</h2>
  <section class="why_choose_us p-md-3 mx-md-5 text-lg-left">
    
    <div class="row text-center d-flex justify-content-center">
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
        <i class="fas fa-balance-scale fa-3x indigo-text mb-4"></i>
        <h4 class="font-weight-bold mb-4">SUR MESURE</h4>
        <p class="text-muted px-2 mb-lg-0">
          Tous les apprenants sont différents. Nos solutions d’accompagnement personnalisées tiennent compte de la diversité des rythmes, des styles d’apprentissage, des forces et faiblesses dans les savoirs acquis. Cette approche individualisée est garante des progrès les plus solides, dans la compréhension des matières et dans l’organisation du travail. Et nous nous adapterons non seulement à votre profil cognitif mais aussi à votre emploi du temps pour vous fournir le service le plus ajusté possible.
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
        <i class="fas fa-home fa-3x mb-4"></i>
        <h4 class="font-weight-bold mb-4">CHEZ VOUS</h4>
        <p class="text-muted px-2 mb-lg-0">
          Etudier dans son environnement de travail familier et sans la contrainte de déplacements supplémentaires. Notre expertise vient jusqu’à votre porte (ou jusque sur votre écran) pour vous permettre d’accéder à l’ensemble de vos ressources pédagogiques habituelles. Le service à domicile ouvre à d’autres bénéfices comme le crédit d’impôt ou la possibilité pour votre coach scolaire d’offrir des conseils pertinents au sujet de votre espace de travail.
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
        <i class="fas fa-user-graduate fa-3x amber-text mb-4"></i>
        <h4 class="font-weight-bold mb-4">PAR DES PROS</h4>
        <p class="text-muted px-2 mb-md-0">
          C’est parce qu’ils/elles ont vu passer des milliers de cas singuliers dans leurs classes que nos enseignant(e)s de l’Education Nationale seront les mieux à même d’adapter leur soutien à la personnalité de votre enfant.
          Dans nos séances de diagnostic, au moment de la correction des copies ou lors des sessions régulières de tutorat en tête-à-tête, ils/elles sauront repérer les principaux champs de progression et préparer des stratégies calquées sur les besoins uniques de l’élève.
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
        <i class="fas fa-street-view fa-3x green-text mb-4"></i>
        <h4 class="font-weight-bold mb-4">Feature 4</h4>
        <p class="text-muted px-2 mb-md-0">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>
  </section>
</div>

<!------------------------------Testimonials------------------------------>
<div class="container mt-5">
  <!--Section: Content-->
  <section class="text-center dark-grey-text">
    <!-- Section heading -->
    <h1 class="font-weight-bold mb-4 pb-4">Ce qu'ils disent de nous</h1>
		<div class="wrapper-carousel-fix">
      <!-- Carousel Wrapper -->
      
      <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
        data-interval="false">
        <!--Slides-->
        
          <div class="carousel-inner" role="listbox">
            @foreach($comments as $comment)
            <div class="carousel-item active">
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto mb-4">
                  <img src="{{asset($comment->avatar)}}" class="rounded-circle img-fluid" width="250" height="250"
                    alt="First sample avatar image">
                </div>
                <!--Content-->
                <p>
                  <i class="fas fa-quote-left"></i>{{$comment->comment}}
                </p>
                <h4 class="font-weight-bold">{{$comment->name}} {{$comment->firstname}}</h4>
                <!--Review-->
                <i class="fas fa-star blue-text"> </i>
                <i class="fas fa-star blue-text"> </i>
                <i class="fas fa-star blue-text"> </i>
                <i class="fas fa-star blue-text"> </i>
                <i class="fas fa-star-half-alt blue-text"> </i>
              </div>
            </div>
            @endforeach
          </div>
          <!--Slides-->
          <!--Controls-->
          <a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
            data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
            data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--Controls-->
        
      </div>
      <!-- Carousel Wrapper -->
      
    </div>
  </section>
  <!--Section: Content-->
</div>
@endsection
