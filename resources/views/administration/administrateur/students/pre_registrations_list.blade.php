@extends('administration.administrateur.templates.admin')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>LISTA DAS PRÉ-INSCRIÇÕES</h1>
            </div>
          </div>
        </div>
      </section>
      @if(session()->has('info'))
        <div class="alert alert-info">
            {{ session('info') }}
        </div>
      @endif
      <div class="card mt-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Apelidos</th>
                  <th scope="col">Ano escolar</th>
                  <th scope="col">Disciplina</th>
                  <th scope="col">Ficha completa</th>
                  <th scope="col">OPÇÕES</th>
                </tr>
              </thead>             
              <tbody>  
                @foreach ($pre_registrations as $pre_registration)               
                <tr>
                  <th scope="row">{{$pre_registration->id}}</th>                 
                  <td>{{$pre_registration->firstname}}</td>
                  <td>{{$pre_registration->name}}</td>
                  <td>{{$pre_registration->year}}</td>
                  <td>{{$pre_registration->matter}}</td>
                  <td><button class="btn btn-link" data-toggle="modal" data-target="#studentModal{{$pre_registration->id}}"><i class="fas fa-envelope-open-text"></i></button></td>
                  <td class="py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <form action="{{route('pre_registration_delete', $pre_registration)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Tem a certeza que quer apagar esta pré-inscrição ?');">
                          <i class="fas fa-trash"></i></button>               
                      </form>
                    </div>
                  </td>
                </tr>

                <!------------------------------------------------- STUDENT MODAL ------------------------------------------------------>

                <div class="modal fade" id="studentModal{{$pre_registration->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content ">
                      <div class="modal-header">
                      <h2>Ficha de pré-inscrição de {{$pre_registration->firstname}}</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome completo') }}</label>
                          <div class="col-md-6">
                              <span class="form-control">{{ $pre_registration->firstname }} {{ $pre_registration->name }}</span>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ano escolar') }}</label>
                          <div class="col-md-6">
                              <span class="form-control">{{ $pre_registration->year }}</span>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Disciplina') }}</label>
                          <div class="col-md-6">
                              <span class="form-control">{{ $pre_registration->matter }}</span>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Escola frequentada') }}</label>
                          <div class="col-md-6">
                              <span class="form-control">{{ $pre_registration->scoolName }}</span>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Responsável') }}</label>
                          <div class="col-md-6">
                              <span class="form-control">{{ $pre_registration->responsible }}</span>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Morada') }}</label>
                          <div class="col-md-6">
                              <span class="form-control">{{ $pre_registration->address }}</span>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>
                          <div class="col-md-6">
                              <span class="form-control">{{ $pre_registration->email }}</span>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
                          <div class="col-md-6">
                              <span class="form-control">{{ $pre_registration->phoneNumber }}</span>
                          </div>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </tbody>            
            </table>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>
@endsection