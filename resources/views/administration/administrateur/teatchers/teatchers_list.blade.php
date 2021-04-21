@extends('administration.administrateur.templates.admin')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>LISTA DAS CANDIDATURAS</h1>
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
                  <th scope="col">Disciplinas</th>
                  <th scope="col">Ciclo preferencial</th>
                  <th scope="col">Telefone</th>                
                  <th scope="col">E-mail</th>                 
                  <th scope="col">Cv</th>                 
                  <th scope="col">OPÇÕES</th>
                </tr>
              </thead>             
              <tbody>  
                @foreach ($teatchers as $teatcher)               
                <tr>
                  <th scope="row">{{$teatcher->id}}</th>                 
                  <td>{{$teatcher->firstname}}</td>
                  <td>{{$teatcher->name}}</td>
                  <td>{{$teatcher->matter}}</td>
                  <td>{{$teatcher->scoolLevel}}</td>
                  <td>{{$teatcher->phoneNumber}}</td>
                  <td>{{$teatcher->email}}</td>
                <td><a href="{{asset($teatcher->cv)}}" target="_blank"><i class="far fa-file-pdf"></i></td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">              
                      <form action="{{route('teatcher_delete', $teatcher)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Tem a certeza que quer apagar esta candidatura ?');">
                          <i class="fas fa-trash"></i></button>               
                      </form>
                    </div>
                  </td>
                </tr>
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