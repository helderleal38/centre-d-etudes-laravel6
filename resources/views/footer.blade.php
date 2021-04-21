
<footer class="page-footer font-small stylish-color-dark pt-4">
  <div class="container text-center text-md-left">
    <div class="row">

      <div class="col-md-4 mx-auto">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img class ="navbar-brand" src="{{asset('./assets/book.png')}}" alt="Vasco Soares logo">
        </a>
        <p class="mb-0"><span class="fas fa-map-marker-alt"></span>20, Rua Almeida Garret</p>
        <p class="mb-0">3100 Pombal</p>
        <p class="pb-1"><span class="fas fa-phone mr-2"></span>+ 01 000 000 00</p>
        <p><span class="fas fa-envelope"></span> centreDexplicacoes@gmail.com</p>
      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-2 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Horários</h5>
        <p>De segunda a sábado</p>
        <p>09h00 - 12h30</p>
        <p>14h30 - 19h</p>
      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-2 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Para todos os níveis</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Ensino Básico</a>
          </li>
          <li>
            <a href="#!">Ensino Secundário</a>
          </li>
          <li>
            <a href="#!">Universidade</a>
          </li>
          <li>
            <a href="#!">Explicações para adultos</a>
          </li>
        </ul>
      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-2 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Informações</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Menções legais</a>
          </li>
          <li>
            <a href="#!">Confidencialidade</a>
          </li>
        </ul>
      </div>

    </div>
  </div>

  <hr>

  <!-- Button Inscription -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Vem aprender connosco !</h5>
    </li>
    <li class="list-inline-item">
      @if(Auth::guest())                     
        <button type="button" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#commencezDesMaintenaintModal">
          Inscrição
        </button>
      @else                      
        <button type="button" class="btn btn-danger btn-rounded disabled">
          Inscrição
        </button>
      @endif
    </li>
  </ul>

  <hr>
  
  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="{{url('/')}}"> CentreDexplicacoes.com</a>
  </div>
  <!-- Copyright -->

</footer>
