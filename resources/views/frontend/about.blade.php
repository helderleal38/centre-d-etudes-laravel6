@extends('layouts.app')

@section('content')

  <!------------------------------Notre histoire---------------------------->
  <section class="container about-history"> 
    <h1 class="font-weight-bold text-center">A nossa história</h1>
    <div class="jumbotron text-center">
      <div class="row d-flex justify-content-center">
        <div class="col-xl-8 pb-4">
          <p class="card-text">Desde 1999, este centro está presente ao lado de 27.000 famílias 
            e as apoia com suporte acadêmico individualizado para cada aluno. 
            A qualidade dos nossos professores, a que se juntam as nossas fórmulas personalizadas e o acompanhamento pedagógico regular, 
            permitem-nos satisfazer 95% dos pais (inquérito realizado em junho de 2019).</p>
        </div>
      </div>
      <hr class="my-4">
      <div class="pt-2">      
        <a type="button" class="btn btn-outline-primary waves-effect" href="{{ route('register') }}">Inscreve-te já</a>
      </div>
    </div>
  </section>

  <!------------------------------Nos espaces------------------------------->
  <section class="about-espaces"> 
    <h1 class="text-center mx-auto font-weight-bold mb-4 pb-2">Os nossos espaços</h1>
    <!--Carousel Wrapper-->
    <div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">
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
            <a href="{{asset('assets/spaces/room3.jpg')}}" data-size="1600x1067">
              <img src="{{asset('assets/spaces/room3.jpg')}}" class="img-fluid">
            </a>
          </figure>

          <figure class="col-md-3 d-md-inline-block">
            <a href="{{asset('assets/spaces/room4.jpg')}}" data-size="1600x1067">
              <img src="{{asset('assets/spaces/room4.jpg')}}" class="img-fluid">
            </a>
          </figure>
        </div>
        <!--Second slide-->
        <div class="carousel-item text-center">
          <figure class="col-md-3 d-md-inline-block">
            <a href="{{asset('assets/spaces/room5.jpg')}}" data-size="1600x1067">
              <img src="{{asset('assets/spaces/room5.jpg')}}" class="img-fluid">
            </a>
          </figure>

          <figure class="col-md-3 d-md-inline-block">
            <a href="{{asset('assets/spaces/room6.jpg')}}" data-size="1600x1067">
              <img src="{{asset('assets/spaces/room6.jpg')}}" class="img-fluid">
            </a>
          </figure>

          <figure class="col-md-3 d-md-inline-block">
            <a href="{{asset('assets/spaces/room7.jpg')}}" data-size="1600x1067">
              <img src="{{asset('assets/spaces/room7.jpg')}}" class="img-fluid">
            </a>
          </figure>
        </div>
      </div>
    </div>
  </section>
  
  <!------------------------------Notre equipe------------------------------>
  <section class="about-equipe"> 
    <h1 class="text-center mx-auto font-weight-bold pt-4">Os nossos professores</h2>
    <div class="container card my-5 z-depth-1">   
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="p-4">
            <div class="Teatcheravatar w-100 white d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/users/admin.jpg') }}"
                class="img-fluid rounded-circle z-depth-1"/>
            </div>
            <div class="text-center mt-3">
              <h6 class="font-weight-bold pt-2">Vasco Soares</h6>
              <p class="text-muted">
                <small><i>Administrador do centro e professor de  matemática.</i></small>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="p-4">
            <div
              class="Teatcheravatar w-100 white d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/users/profAnglais.jpg') }}"
                class="img-fluid rounded-circle z-depth-1"/>
            </div>
            <div class="text-center mt-3">
              <h6 class="font-weight-bold pt-2">Fernanda Serrano</h6>
              <p class="text-muted">
                <small><i>Professora de Inglês.</i></small>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="p-4">
            <div class="Teatcheravatar w-100 white d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/users/profTechnologies.jpg') }}"
                class="img-fluid rounded-circle z-depth-1" />
            </div>
            <div class="text-center mt-3">
              <h6 class="font-weight-bold pt-2">Gilberto Amaro</h6>
              <p class="text-muted">
                <small><i>Professor de Informática.</i></small>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="p-4">
            <div class="Teatcheravatar w-100 white d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/users/profHistoire.jpg') }}"
                class="img-fluid rounded-circle z-depth-1"/>
            </div>
            <div class="text-center mt-3">
              <h6 class="font-weight-bold pt-2">Jorge Mateus Nazaré</h6>
              <p class="text-muted">
                <small><i>Professeor de história.</i></small>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="p-4">
            <div class="Teatcheravatar w-100 white d-flex justify-content-center align-items-center">
              <img src="{{ asset('assets/users/profPhysiqueChimie.jpg') }}"
                class="img-fluid rounded-circle z-depth-1"/>
            </div>
            <div class="text-center mt-3">
              <h6 class="font-weight-bold pt-2">Isabel Castro Amorim</h6>
              <p class="text-muted">
                <small><i>Professora de Fisico-química.</i></small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection    