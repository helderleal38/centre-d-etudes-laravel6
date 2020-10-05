@extends('administration.administrateur.templates.admin')

@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
    <div class="col-md-8">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>LISTE DES MAILSS</h1>
            </div>
          </div>
        </div>
      </section>
      <div class="card mt-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telephone</th>
                  <th scope="col">Object</th>
                  <th scope="col">Message</th>
                </tr>
              </thead>             
              <tbody>  
                @foreach ($contacts as $contact)               
                  <tr>
                    <th scope="row">{{$contact->id}}</th>                 
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->message}}</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form action="{{ route('contact_delete', $contact) }}" method="post">
                          @method('DELETE')
                          @csrf
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