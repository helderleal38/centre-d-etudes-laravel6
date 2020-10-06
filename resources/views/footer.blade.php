<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <a class="navbar-brand" href="{{ url('/') }}">
          <img class ="navbar-brand" src="{{asset('./assets/logo.png')}}" alt="Vasco Soares logo">
        </a>
        {{-- <h5 class="font-weight-bold"><span class="fas fa-map-marker-alt"></span></h5> --}}
            <p class="mb-0"><span class="fas fa-map-marker-alt"></span>20, Rua Principal</p>
            <p class="mb-0">3105-100 Lourical</p>
            <p class="pb-1">Pombal - Portugal</p>

            {{-- <h5 class="font-weight-bold"><span class="fas fa-phone"></span></h5> --}}
            <p class="pb-1"><span class="fas fa-phone">+ 01 234 567 89</p>

            {{-- <h5 class="font-weight-bold"><span class="fas fa-envelope"></span></h5> --}}
            <p><span class="fas fa-envelope">vasco@gmail.com</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Nos horaires</h5>

        <p>Du lundi au vendredi</p>
        <p>09h00 - 12h30</p>
        <p>14h30 - 19h</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Cours tous les niveaux</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Primaire</a>
          </li>
          <li>
            <a href="#!">College</a>
          </li>
          <li>
            <a href="#!">Lycée</a>
          </li>
          <li>
            <a href="#!">Université</a>
          </li>
          <li>
            <a href="#!">Cours adultes</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Informations</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Mentions legales</a>
          </li>
          <li>
            <a href="#!">Confidentialité</a>
          </li>
          <li>
            <a href="#!">Plan du site</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Venez aprendre avec nous</h5>
    </li>
    <li class="list-inline-item">
      @if(Auth::guest())                     
        <button type="button" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#commencezDesMaintenaintModal">
          Inscription
        </button>
      @else                      
        <button type="button" class="btn btn-danger btn-rounded disabled">
          Inscription
        </button>
      @endif
    </li>
  </ul>
  <!-- Call to action -->

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
    <a href="{{url('/')}}"> VascoSoares.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->