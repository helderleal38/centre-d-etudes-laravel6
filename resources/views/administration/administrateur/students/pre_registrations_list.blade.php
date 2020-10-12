@extends('administration.administrateur.templates.admin')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>LISTE DES ELEVES</h1>
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
                  <th scope="col">Prenom</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Ecole</th>
                  <th scope="col">Année scolaire</th>
                  <th scope="col">Matière souhaité</th>
                  <th scope="col">Responsable legal</th>
                  <th scope="col">Adresse</th>
                  <th scope="col">Email</th>
                  <th scope="col">Téléphone</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>             
              <tbody>  
                @foreach ($pre_registrations as $pre_registration)               
                <tr>
                  <th scope="row">{{$pre_registration->id}}</th>                 
                  <td>{{$pre_registration->firstname}}</td>
                  <td>{{$pre_registration->name}}</td>
                  <td>{{$pre_registration->scoolName}}</td>
                  <td>{{$pre_registration->year}}</td>
                  <td>{{$pre_registration->matter}}</td>
                  <td>{{$pre_registration->responsible}}</td>
                  <td>{{$pre_registration->address}}</td>
                  <td>{{$pre_registration->email}}</td>
                  <td>{{$pre_registration->phoneNumber}}</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <form action="{{route('pre_registration_delete', $pre_registration)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Vous êtes sur de vouloir supprimer cette pré-inscription ?');"><i class="fas fa-trash"></i></button>               
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