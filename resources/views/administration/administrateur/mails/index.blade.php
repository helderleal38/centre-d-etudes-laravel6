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
                  <th scope="col">Object</th>
                  <th scope="col">Message</th>
                </tr>
              </thead>             
              <tbody>  
                @foreach ($contacts as $contact)               
                  <tr>
                    <th scope="row">{{$contact->id}}</th>                 
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->subject}}</td>
                    <td><button class="btn btn-link" data-toggle="modal" data-target="#mailModal"><i class="fas fa-envelope-open-text"></i></button></td>
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

                  <!---------------------------------------------------------------------------------------------------------------->
                  <!------------------------------------------------- MAIL MODAL ------------------------------------------------------>
                  <!---------------------------------------------------------------------------------------------------------------->
                  <div class="modal fade" id="mailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <h2>{{$contact->subject}}</h2>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="card-body">
                          <p>DE : {{$contact->name}}</p>
                        </div>
                        <div class="modal-body">
                          <div class="card-body" text='centered' style="background-color: #f4f6f9">{{$contact->message}}</div>
                        </div>
                        <div class="card-body">
                          <p>{{$contact->name}}</p>
                          <p>{{$contact->email}}</p>
                          <p>{{$contact->phone}}</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
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