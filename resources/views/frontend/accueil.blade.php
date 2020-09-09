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
  <section class="why_choose_us p-md-3 mx-md-5 text-lg-left">
    <h1 class="font-weight-bold text-center mb-5 pb-3">Pourquoi nous choisir</h2>
    <div class="row text-center d-flex justify-content-center">
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
        <i class="fas fa-map-marker-alt fa-3x indigo-text mb-4"></i>
        <h4 class="font-weight-bold mb-4">SUR MESURE</h4>
        <p class="text-muted px-2 mb-lg-0">
          Tous les apprenants sont différents. Nos solutions d’accompagnement personnalisées tiennent compte de la diversité des rythmes, des styles d’apprentissage, des forces et faiblesses dans les savoirs acquis. Cette approche individualisée est garante des progrès les plus solides, dans la compréhension des matières et dans l’organisation du travail. Et nous nous adapterons non seulement à votre profil cognitif mais aussi à votre emploi du temps pour vous fournir le service le plus ajusté possible.
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
        <i class="far fa-map pink-text fa-3x mb-4"></i>
        <h4 class="font-weight-bold mb-4">CHEZ VOUS</h4>
        <p class="text-muted px-2 mb-lg-0">
          Etudier dans son environnement de travail familier et sans la contrainte de déplacements supplémentaires. Notre expertise vient jusqu’à votre porte (ou jusque sur votre écran) pour vous permettre d’accéder à l’ensemble de vos ressources pédagogiques habituelles. Le service à domicile ouvre à d’autres bénéfices comme le crédit d’impôt ou la possibilité pour votre coach scolaire d’offrir des conseils pertinents au sujet de votre espace de travail.
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
        <i class="fas fa-globe-africa fa-3x amber-text mb-4"></i>
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
  <section class="team-section text-center dark-grey-text">

    <!-- Section heading -->
    <h1 class="font-weight-bold mb-4">Ce qu'ils disent de nous</h3>

    <!-- Grid row -->
    <div class="row">

      <!--Carousel Wrapper-->
      <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item mb-5" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
          <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
          <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
        </div>
        <!--Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#multi-item-example" data-slide-to="0" class="active light-blue darken-4"></li>
          <li data-target="#multi-item-example" data-slide-to="1" class="light-blue darken-4"></li>
          <li data-target="#multi-item-example" data-slide-to="2" class="light-blue darken-4"></li>
        </ol>
        <!--Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

          <!--First slide-->
          <div class="carousel-item active">

            <!--Grid column-->
            <div class="col-md-4">
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" class="rounded-circle img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold mt-4">Anna Deynah</h4>
                <h6 class="blue-text font-weight-bold my-3">Web Designer</h6>
                <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>
                <!--Review-->
                <div class="grey-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star-half-alt"> </i>
                </div>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="rounded-circle img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold mt-4">John Doe</h4>
                <h6 class="blue-text font-weight-bold my-3">Web Developer</h6>
                <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Ut enim ad minima veniam,
                  quis
                  nostrum exercitationem ullam corporis laboriosam.</p>
                <!--Review-->
                <div class="grey-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                </div>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded-circle img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold mt-4">Abbey Clark</h4>
                <h6 class="blue-text font-weight-bold my-3">Photographer</h6>
                <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Quis autem vel eum iure
                  reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
                <!--Review-->
                <div class="grey-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="far fa-star"> </i>
                </div>
              </div>
            </div>
            <!--Grid column-->

          </div>
          <!--First slide-->

          <!--Second slide-->
          <div class="carousel-item">

            <!--Grid column-->
            <div class="col-md-4">
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(4).jpg" class="rounded-circle img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold mt-4">Blake Dabney</h4>
                <h6 class="blue-text font-weight-bold my-3">Web Designer</h6>
                <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Ut enim ad minima veniam,
                  quis
                  nostrum exercitationem ullam corporis laboriosam.</p>
                <!--Review-->
                <div class="grey-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star-half-alt"> </i>
                </div>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(6).jpg" class="rounded-circle img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold mt-4">Andrea Clay</h4>
                <h6 class="blue-text font-weight-bold my-3">Front-end developer</h6>
                <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit. Quod eos id officiis hic tenetur quae.</p>
                <!--Review-->
                <div class="grey-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                </div>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(7).jpg" class="rounded-circle img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold mt-4">Cami Gosse</h4>
                <h6 class="blue-text font-weight-bold my-3">Phtographer</h6>
                <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>At vero eos et accusamus et
                  iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                <!--Review-->
                <div class="grey-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="far fa-star"> </i>
                </div>
              </div>
            </div>
            <!--Grid column-->

          </div>
          <!--Second slide-->

          <!--Third slide-->
          <div class="carousel-item">

            <!--Grid column-->
            <div class="col-md-4">
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold mt-4">Bobby Haley</h4>
                <h6 class="blue-text font-weight-bold my-3">Web Developer</h6>
                <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit. Quod eos id officiis hic tenetur quae.</p>
                <!--Review-->
                <div class="grey-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                </div>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold mt-4">Elisa Janson</h4>
                <h6 class="blue-text font-weight-bold my-3">Marketer</h6>
                <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>At vero eos et accusamus et
                  iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                <!--Review-->
                <div class="grey-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star-half-alt"> </i>
                </div>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
                </div>
                <!--Content-->
                <h4 class="font-weight-bold mt-4">Rob Jacobs</h4>
                <h6 class="blue-text font-weight-bold my-3">Front-end developer</h6>
                <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Ut enim ad minima veniam,
                  quis
                  nostrum exercitationem ullam corporis laboriosam.</p>
                <!--Review-->
                <div class="grey-text">
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="fas fa-star"> </i>
                  <i class="far fa-star"> </i>
                </div>
              </div>
            </div>
            <!--Grid column-->

          </div>
          <!--Third slide-->

        </div>
        <!--Slides-->

      </div>
      <!--Carousel Wrapper-->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>
@endsection
