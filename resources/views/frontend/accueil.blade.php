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
<div class="home-container z-depth-1 my-5 py-5 px-4 px-lg-0">
<!-- Section -->
<section>
    
    <h1 class="font-weight-bold text-center dark-grey-text pb-2">Pourquoi nous choisir</h1>
    <hr class="w-header my-4">
    <p class="lead text-center text-muted pt-2 mb-5">Choisir le centre Vasco Soares c'est choisir votre avenir.</p>
    
    <div class="row">
    <div class="col-lg-8 mx-auto">

        <ol class="timeline">
        <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">SUR MESURE</h5>
            <p class="text-muted">
            Tous les apprenants sont différents. Nos solutions d’accompagnement personnalisées tiennent compte de la diversité des rythmes, des styles d’apprentissage, des forces et faiblesses dans les savoirs acquis. Cette approche individualisée est garante des progrès les plus solides, dans la compréhension des matières et dans l’organisation du travail. Et nous nous adapterons non seulement à votre profil cognitif mais aussi à votre emploi du temps pour vous fournir le service le plus ajusté possible.</p>
        </li>

        <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">CHEZ VOUS</h5>
            <p class="text-muted">
            Etudier dans son environnement de travail familier et sans la contrainte de déplacements supplémentaires. Notre expertise vient jusqu’à votre porte (ou jusque sur votre écran) pour vous permettre d’accéder à l’ensemble de vos ressources pédagogiques habituelles. Le service à domicile ouvre à d’autres bénéfices comme le crédit d’impôt ou la possibilité pour votre coach scolaire d’offrir des conseils pertinents au sujet de votre espace de travail.</p>
        </li>

        <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">PAR DES PROS</h5>
            <p class="text-muted">
            C’est parce qu’ils/elles ont vu passer des milliers de cas singuliers dans leurs classes que nos enseignant(e)s de l’Education Nationale seront les mieux à même d’adapter leur soutien à la personnalité de votre enfant.
            Dans nos séances de diagnostic, au moment de la correction des copies ou lors des sessions régulières de tutorat en tête-à-tête, ils/elles sauront repérer les principaux champs de progression et préparer des stratégies calquées sur les besoins uniques de l’élève.</p>
        </li>

        <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">Team size increased to 20</h5>
            <p class="grey-text font-small"><time datetime="2018-04-14">14 Apr 2019</time></p>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique. 
            Explicabo amet ipsum fugiat aliquam alias.</p>
        </li>
        </ol>

    </div>
    </div>
    
</section>
<!-- Section --> 
</div>
<!------------------------------Testimonials------------------------------>
<!-- Section: Testimonials v.4 -->
<section class="text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Testimonials v.4</h2>

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
<!-- Section: Testimonials v.4 -->
@endsection
