@extends('layouts.app')

@section('content')
<div class="container z-depth-1 my-5 px-0 pt-3">

  <!--Section: Content-->
  <section class="p-5 my-md-5 text-center" 
    style="background-image: url({{asset('assets/page_contact.jpg')}}); background-size: cover; background-position: center center;">
    <!-- Section heading -->
    <h1 class="text-center font-weight-bold text-white mt-5 mb-3">Contactez nous</h3>
    <!-- Section description -->
      
    <form class="mb-5 mx-md-5" action="">

      <div class="row">
        <div class="col-md-4 mb-4">

          <!-- Name -->
          <input type="text" id="name" class="form-control" placeholder="{{Auth::user()->name}}" readonly>

        </div>
        <div class="col-md-4 mb-4">

          <!-- Email -->
          <input type="email" id="email" class="form-control" placeholder="{{Auth::user()->email}}" readonly>

        </div>
        <div class="col-md-4 mb-4">

          <!-- Phone -->
          <input type="number" id="phone" class="form-control" placeholder="Telephone (optional)">

        </div>
      </div>

      <div class="row">
        <div class="col-md-12 mb-4">

          <!-- Subject -->
          <input type="text" id="subject" class="form-control" placeholder="Sujet">

        </div>
      </div>

      <div class="row">
        <div class="col-md-12">

          <div class="form-group mb-4">
            <textarea class="form-control rounded" id="message" rows="3" placeholder="Votre message"></textarea>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-md btn-block ml-0 mb-0">Envoyer</button>
          </div>

        </div>
      </div>

    </form>

  </section>
  <!--Section: Content-->


</div>

<!---------------------------------MAP----------------------->
<div class="container my-5 py-5 z-depth-1">


  <!--Section: Content-->
  <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

    <style>
      .map-container {
        height: 280px;
        position: relative;
      }

      .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
      }
    </style>

    <!--Grid row-->
    <div class="row d-flex justify-content-center">

      <!--Grid column-->
      <div class="col-md-6 text-center">

        <h3 class="font-weight-bold">Ou sommes nous</h3>

        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
          molestiae.</p>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-5 col-md-12 mb-0 mb-md-0">

        <!--Google map-->
        <div id="map-container-google-1" class="z-depth-1 map-container mb-4">
          <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
        <!--Google Maps-->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-7 col-md-12 mb-4 mb-md-0">

        <h5 class="font-weight-bold">Adresse</h5>
            <p class="mb-0">20, Rue Principal</p>
            <p class="mb-0">3105-100 Lourical</p>
            <p class="mb-4 pb-2">Pombal - Portugal</p>

            <h5 class="font-weight-bold">Telephone</h5>
            <p class="mb-4 pb-2">+ 01 234 567 89</p>

            <h5 class="font-weight-bold">Email</h5>
            <p>info@gmail.com</p>
      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->


  </section>
  <!--Section: Content-->


</div>







@endsection