@extends('layouts.app')

@section('content')
  <div class="container contact px-0"> 
    <!--Section: Content-->
    <section class="image p-5 my-md-5 text-center">     
      <h1 class="text-center font-weight-bold text-white mt-5 mb-5">Contacte-nos</h1>
      @if(session('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }} 
        </div>
      @endif
      <form class="mb-5 mx-md-5" action="{{ Route('contact_store') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-md-4 mb-4">
            <input type="text" id="name" class="form-control" placeholder="Nome" name="name" value="{{old('name')}}">
            <div>{!! $errors->first('name', ":message") !!}</div>
          </div>

          <div class="col-md-4 mb-4">
            <input type="email" id="email" class="form-control" placeholder="Mail" name="email" value="{{old('email')}}">
            {!! $errors->first('email', ":message") !!}
          </div>

          <div class="col-md-4 mb-4">
            <input type="text" id="phone" class="form-control" placeholder="Telefone" name="phone" value="{{old('phone')}}">
            {!! $errors->first('phone', ":message") !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-4">
            <input type="text" id="subject" class="form-control" placeholder="Assunto" name="subject" value="{{old('subject')}}">
            {!! $errors->first('subject', ":message") !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group mb-4">
              <textarea class="form-control rounded" id="message" rows="3" placeholder="Mensagem" name="message">{{old('message')}}</textarea>
              {!! $errors->first('message', ":message") !!}
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-md btn-block ml-0 mb-0">Enviar</button>
            </div>
          </div>
        </div>
      </form>
    </section>
  </div>
@endsection