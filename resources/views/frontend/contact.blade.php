@extends('layouts.app')

@section('content')
<div class="container contact z-depth-1 px-0"> 

  <!--Section: Content-->
  {{-- <section class="contact p-5 my-md-5 text-center" 
    style="background-image: url({{asset('assets/page_contact.jpg')}}); background-size: cover; background-position: center center;
      ">  --}}
  <section class="image p-5 my-md-5 text-center"> 
      
    <h1 class="text-center font-weight-bold text-white mt-5 mb-5">Contactez nous</h3>

      @if(session('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }} 
        </div>
      @endif

    <form class="mb-5 mx-md-5" action="{{ Route('contact_store') }}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-4 mb-4">
          <input type="text" id="name" class="form-control" placeholder="Nom" name="name" value="{{old('name')}}">
          <div>{!! $errors->first('name', ":message") !!}</div>
        </div>

        <div class="col-md-4 mb-4">
          <input type="email" id="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
          {!! $errors->first('email', ":message") !!}
        </div>

        <div class="col-md-4 mb-4">
          <input type="text" id="phone" class="form-control" placeholder="Téléphone" name="phone" value="{{old('phone')}}">
          {!! $errors->first('phone', ":message") !!}
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 mb-4">
          <input type="text" id="subject" class="form-control" placeholder="Sujet" name="subject" value="{{old('subject')}}">
          {!! $errors->first('subject', ":message") !!}
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group mb-4">
            <textarea class="form-control rounded" id="message" rows="3" placeholder="Votre message" name="message">{{old('message')}}</textarea>
            {!! $errors->first('message', ":message") !!}
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
      <div class="col-md-6 text-center">
        <h1 class="font-weight-bold">Où sommes nous</h1>
      </div>
    </div>

    <div class="row">
      <!--Grid column-->
      <div class="col-lg-5 col-md-12 mb-0 mb-md-0">
        <!--Google map-->
        <div id="map-container-google-1" class="z-depth-1 map-container mb-4">
          <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-lg-7 col-md-12 mb-4 mb-md-0">
        <h5 class="font-weight-bold">Adresse</h5>
          <p class="mb-0">20, Rue Principal</p>
          <p class="mb-0">3105-100 Lourical</p>
          <p class="mb-4 pb-2">Pombal - Portugal</p>

          <h5 class="font-weight-bold">Telephone</h5>
          <p class="mb-4 pb-2">+ 01 234 567 89</p>

          <h5 class="font-weight-bold">Email</h5>
          <p>vasco@gmail.com</p>
      </div>
    </div>

  </section>
  <!--Section: Content-->


</div>







@endsection