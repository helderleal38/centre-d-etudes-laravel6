@extends('layouts.app')

  @section('content')
  <div class="container">
    
    <section class="services mt-5 pt-5">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-lg-0">
          <div class="view overlay rounded z-depth-1 mb-lg-0 mb-1">
            <img class="img-fluid" src="{{asset('assets/cours_prive.jpeg')}}" alt="Sample image">
            <a><div class="mask rgba-white-slight"></div></a>
          </div>
        </div>
        <div class="content col-lg-6 col-md-12 mb-md-2 mb-4 mt-xl-4">
          <h3 class="font-weight-normal mb-4">AULAS EM PARTICULAR</h3>
          <p class="text-muted">Muitos alunos carecem de organização, método de trabalho ou tempo para aprofundar os conceitos vistos em aula.
            O nosso centro oferece aulas particulares aqui ou em casa, com professores qualificados para revisar ou aprofundar esses pontos específicos.
            O seu filho vai-se sentir apoiado e trabalhará com mais calma.</p>
        </div>
      </div>
    </section>
   
    <section class="services">
      <div class="row" id="change_order_div">
        <div class="content col-lg-6 col-md-12 mb-4 mt-xl-4" id="div1">
          <h3 class="font-weight-normal mb-4">AULAS EM GRUPO</h3>
          <p class="text-muted">As aulas em grupo podem é também uma solução, que pode tornar efficaz a aprendizagem, 
            pois o trabalho em grupo é muito importante.</p>
        </div>
        <div class="col-lg-6 col-md-12 mb-lg-0 mb-4" id="div2">
          <div class="view overlay rounded z-depth-1 mb-lg-0 mb-1">
            <img class="img-fluid" src="{{asset('assets/cours_groupe.jpg')}}" alt="Sample image">
            <a><div class="mask rgba-white-slight"></div></a>
          </div>
        </div>
      </div>
    </section>
   
    <section class="services">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-lg-0 mb-4">
          <div class="view overlay rounded z-depth-1 mb-lg-0 mb-1">
            <img class="img-fluid" src="{{asset('assets/cours_visio.jpg')}}" alt="Sample image">
            <a><div class="mask rgba-white-slight"></div></a>
          </div>
        </div>
        <div class="content col-lg-6 col-md-12 mb-md-4 mb-4 mt-xl-4">
          <h3 class="font-weight-normal mb-4">AULAS EM VIDEO CHAMADA</h3>
          <p class="text-muted">A nova situação da escola em casa exige muita adaptabilidade por parte dos alunos e pais 
            que nem sempre estão preparados ou ocupados com o teletrabalho. <br> 
            Para ajudar seu filho no aprendizado em casa e permitir que ele acompanhe o ritmo e se mantenha motivado, 
            o centro oferece aulas a distância por videoconferência (skype).</p>
        </div>
      </div>
    </section>
   
    <section class="services">
      <div class="row" id="change_order_div">
        <div class="content col-lg-6 col-md-12 mb-md-0 mb-4 mt-xl-4" id="div1">
          <h3 class="font-weight-normal mb-4">PREPARACÃO PARA EXAMES</h3>
          <p class="text-muted">Precisas só de algumas aulas, pois vais passar o exame e não te sentes preparado? 
             Também podemos agendar aulas sem contrato, durante o tempo que precisas.</p>
        </div>
        <div class="col-lg-6 col-md-12 mb-lg-0 mb-4" id="div2">
          <div class="view overlay rounded z-depth-1 mb-lg-0 mb-1">
            <img class="img-fluid" src="{{asset('assets/stage_vacances.jpg')}}" alt="Sample image">
            <a><div class="mask rgba-white-slight"></div></a>
          </div>
        </div>
      </div>
    </section>

  </div>
  @endsection