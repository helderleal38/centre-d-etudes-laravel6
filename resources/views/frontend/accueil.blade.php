@extends('layouts.app')

@section('content')
<section class="home-image">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-caption">
                <!--Verification de l'authentification avant la pré-inscription-->
                @if(Auth::guest())
                <div class="animated fadeInDown">
                    <h1 class="h3-responsive">Notre interet c'est votre reussite</h1>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginModal">
                        Pré-inscription
                    </button>
                    {{-- <a class="btn btn-primary" href="{{route('register')}}">Pre-inscription</a> --}}
                </div>              
                @else
                <div class="animated fadeInDown">
                    <h1 class="h3-responsive">Notre interet c'est votre reussite</h1>
                    <a class="btn btn-primary" href="{{route('students_index')}}">Pré-inscription</a>
                </div>
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
@endsection
