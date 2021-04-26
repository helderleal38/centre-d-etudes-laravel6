@extends('layouts.app')

@section('content')
  <section class="container home-image mb-5">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-caption">
          <!--Verification de l'authentification avant la pré-inscription-->
          @if(Auth::guest())                     
            <button type="button" class="btn btn-success btn-responsive" data-toggle="modal" data-target="#commencezDesMaintenaintModal">
                Inscreve-te já !
            </button>
          @else                      
            <button type="button" class="btn btn-success btn-responsive disabled">
              Inscreve-te já !
            </button>
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
        <i style="font-size: 30px" class="fas fa-chevron-left"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <i style="font-size: 30px" class="fas fa-chevron-right"></i>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!----------------- Porquê escolher a nossa escola ? ------------------>

  <div class="row d-flex justify-content-center">
    <div class="col">
      <h1 class="font-weight-normal text-center">Porquê escolher a nossa escola ?</h1>
    </div>
  </div>
  
  <div class="container-fluid why_choose_us py-5 my-5">
    
    <section class="p-md-3 mx-md-5 text-lg-left">
      
      <div class="row text-center d-flex justify-content-center">
        <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
          <i class="fas fa-balance-scale fa-3x indigo-text mb-4"></i>
          <h4 class="font-weight-normal mb-4">À medida</h4>
          <p class="text-muted px-2 mb-lg-0">
            Todos os alunos são diferentes. Nossas soluções de suporte personalizado levam á diversidade tendo em consideração
            ritmos, estilos de aprendizagem, pontos fortes e fracos nos conhecimentos adquiridos. Esta abordagem
            dá uma garantia individualizada e um progresso mais sólido, na compreensão dos assuntos e na organização
            trabalhos. Adaptamo-nos não apenas ao seu perfil cognitivo, mas também aos seus horários para
            fornecer-lhe o serviço mais personalizado possível.
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
          <i class="fas fa-home fa-3x mb-4"></i>
          <h4 class="font-weight-normal mb-4">Em sua casa</h4>
          <p class="text-muted px-2 mb-lg-0">
            Estude em um ambiente de trabalho familiar e sem a restrição de viagens adicionais.
            A nossa experiência chega à sua porta para dar-lhe acesso a todos
            os seus recursos de ensino usuais. O serviço ao domicílio oferece outros benefícios, como crédito fiscal
            ou a possibilidade de o treinador da escola oferecer conselhos relevantes sobre o seu espaço de trabalho.
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
          <i class="fas fa-user-graduate fa-3x amber-text mb-4"></i>
          <h4 class="font-weight-normal mb-4">Profissionalismo</h4>
          <p class="text-muted px-2 mb-md-0">
            É porque viram milhares de casos únicos em suas salas de aula que nossos professores de
            A Educação Nacional estará em melhor posição para adaptar seu apoio à personalidade de seu filho.
            Em nossas sessões de diagnóstico, ao corrigir cópias ou durante as sessões de tutoria regulares em
            um a um, eles saberão como identificar as principais áreas de progresso e preparar estratégias com base em
            as necessidades únicas do aluno.
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
          <i class="fas fa-chart-line fa-3x green-text mb-4"></i>
          <h4 class="font-weight-normal mb-4">Sucesso garantido</h4>
          <p class="text-muted px-2 mb-md-0">
            Ao contrário da crença popular, Lorem Ipsum não é simplesmente um texto aleatório. Tem raízes em um pedaço de latim clássico
            literatura de 45 aC, com mais de 2.000 anos. Richard McClintock, professor de latim em Hampden-Sydney
            College na Virgínia, procurei uma das palavras latinas mais obscuras, consectetur, de uma passagem de Lorem Ipsum, e indo
            através das citações da palavra na literatura clássica, descobriu a fonte indiscutível.
          </p>
        </div>
      </div>
    </section>
  </div>

  <!------------------------------ O que eles dizem de nós ? ------------------------------>

    <!--Section: Content-->
    <section class="text-center">
      <!-- Section heading -->
      <h1 class="font-weight-normal mb-4 pb-4">O que eles dizem de nós ?</h1>
      <div class="wrapper-carousel-fix">
        <!-- Carousel Wrapper -->      
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <!--Slides-->        
            <div class="carousel-inner">
              @foreach($comments as $key => $comment)
              <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto mb-4">
                    <img src="{{asset($comment->avatar)}}" class="rounded-circle img-fluid"
                      alt="First sample avatar image">
                  </div>
                  <!--Content-->
                  <p>
                    <i class="fas fa-quote-left"></i>{{$comment->comment}}
                  </p>
                  <h4 class="font-weight-normal">{{$comment->firstname}} {{$comment->name}}</h4>
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
            <a class="carousel-control-prev left carousel-control" href="#carouselExampleControls" role="button"
              data-slide="prev">
              <i style="font-size: 30px" class="fas fa-chevron-left"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next right carousel-control" href="#carouselExampleControls" role="button"
              data-slide="next">
              <i style="font-size: 30px" class="fas fa-chevron-right"></i>
              <span class="sr-only">Next</span>
            </a>
            <!--Controls-->         
        </div>
        <!-- Carousel Wrapper -->       
      </div>
    </section>
    <!--Section: Content-->
  
@endsection
