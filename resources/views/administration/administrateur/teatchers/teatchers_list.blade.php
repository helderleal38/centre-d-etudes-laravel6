@extends('administration.administrateur.admin')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>LISTE DES PROFESSEURS</h1>
            </div>
          </div>
        </div>
      </section>
      {{-- @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
      @endif --}}
      <div class="card mt-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Matière à enseigner</th>
                  <th scope="col">Cycle scolaire</th>
                  <th scope="col">Téléphone</th>                
                  <th scope="col">Email</th>                 
                  <th scope="col">Cv</th>                 
                  <th scope="col">ACTION</th>
                </tr>
              </thead>             
              <tbody>  

                @foreach ($teatchers as $student)               
                <tr>
                  <th scope="row">{{$student->id}}</th>                 
                  <td>{{$student->firstname}}</td>
                  <td>{{$student->name}}</td>
                  <td>{{$student->matter}}</td>
                  <td>{{$student->scoolLevel}}</td>
                  <td>{{$student->phoneNumber}}</td>
                  <td>{{$student->email}}</td>
                  <td><img src="{{asset('uploads/files/' . $student->cv)}}"></td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <form action="" method="">
                        <button class="btn btn-info" type="submit"><i class="fas fa-pencil-alt"></i></button>              
                      </form>                    
                      <form action="{{--route('student_delete', $student)--}}" method="post">
                        @method('DELETE')
                        @csrf
                        <!-- <input type="submit" value="ELIMINAR" class = "btn btn-outline-danger mt-2">  -->
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>               
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