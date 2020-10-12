@extends('layouts.app')

@section('content')
<div class="container">
<!--Section: Content-->
<section class="services mt-5 pt-5">
    <!-- Grid row -->
    <div class="row">
    <!-- Grid column -->
    <div class="col-lg-6 col-md-12 mb-lg-0">
        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1 mb-lg-0 mb-1">
        <img class="img-fluid" src="{{asset('assets/cours_prive.jpeg')}}" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="content col-lg-6 col-md-12 mb-md-2 mb-4 mt-xl-4">
      <h3 class="font-weight-normal mb-4">COURS PARTICULIERS</h3>
      <p class="text-muted">De nombreux élèves manquent d’organisation, de méthode de travail ou de temps pour approfondir les notions vues en classe. 
          Vasco Soares vous propose des cours particuliers chez nous ou à domicile, avec des enseignants qualifiés pour revoir ou approfondir ces points précis. 
          Votre enfant se sentira soutenu et travaillera plus sereinement.</p>
    </div>
    <!-- Grid column -->
    </div>
    <!-- Grid row -->
</section>
<!--Section: Content-->
<!--Section: Content2-->
<section class="services">
    <!-- Grid row -->
    <div class="row" id="change_order_div">
    <!-- Grid column -->
    <div class="content col-lg-6 col-md-12 mb-4 mt-xl-4" id="div1">
        <h3 class="font-weight-normal mb-4">COURS EN GROUPE</h3>
        <p class="text-muted">Option as can distributors. And to suppliers, given a copy the horrible arrange yes, we had hundreds 
            leave was more which a I the king's had the so soon throughout in necessary which at way did phase a young written, 
            descriptions, late uninspired, to times owner themselves them. Get sported uninspired, the a box to an to but on been 
            the succeed have couldn't set.</p>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4" id="div2">
        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1 mb-lg-0 mb-1">
        <img class="img-fluid" src="{{asset('assets/cours_groupe.jpg')}}" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

    </div>
    <!-- Grid column -->
    </div>
    <!-- Grid row -->
</section>
<!--Section: Content-->
<!--Section: Content-->
<section class="services">
    <!-- Grid row -->
    <div class="row">
    <!-- Grid column -->
    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4">
        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1 mb-lg-0 mb-1">
        <img class="img-fluid" src="{{asset('assets/cours_visio.jpg')}}" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="content col-lg-6 col-md-12 mb-md-4 mb-4 mt-xl-4">
        <h3 class="font-weight-normal mb-4">COURS EN VISIOCONFERENCE</h3>
        <p class="text-muted">La situation inédite d’école à la maison nécessite beaucoup d’adaptabilité de la part des élèves et 
            parents pas toujours préparés ou occupés par le télé-travail. <br>Pour aider votre enfant dans ses apprentissages 
            à la maison et lui permettre de garder le rythme tout en restant motivé, Vasco Soares vous propose des cours à distance
            par visioconférence (skype)..</p>
    </div>
    <!-- Grid column -->
    </div>
    <!-- Grid row -->
</section>
<!--Section: Content-->
<!--Section: Content4-->
<section class="services">
    <!-- Grid row -->
    <div class="row" id="change_order_div">
    <!-- Grid column -->
    <div class="content col-lg-6 col-md-12 mb-md-0 mb-4 mt-xl-4" id="div1">
        <h3 class="font-weight-normal mb-4">STAGE DE VACANCES</h3>
        <p class="text-muted">Pendant les vacances scolaires ou à l'approche des examens, nos stages de révisions en petits groupes 
            proposés dans nos centres permettent sur une courte période de travailler une matière en profondeur. 
            L'objectif est de mettre à profit les vacances pour maîtriser les fondamentaux du programme. 
            L'émulation de groupe crée une dynamique propice à l'apprentissage et à l'échange d'expérience.</p>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4" id="div2">
        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1 mb-lg-0 mb-1">
        <img class="img-fluid" src="{{asset('assets/stage_vacances.jpg')}}" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

    </div>
    <!-- Grid column -->
    </div>
    <!-- Grid row -->
</section>
<!--Section: Content-->
</div>
@endsection