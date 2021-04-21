@extends('administration.administrateur.templates.admin')

@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
    <div class="col-md-8">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>LISTA DOS COMENTÁRIOS</h1>
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
                  <th scope="col">Comentários</th>
                  <th scope="col">Foto</th>
                  <th scope="col">OPÇÕES</th>
                </tr>
							</thead>             
							<tbody>  
                @foreach ($comments as $comment)               
                  <tr>
                    <th scope="row">{{$comment->id}}</th>                 
                    <td>{{$comment->firstname}}</td>
                    <td>{{$comment->name}}</td>
                    <td>{{$comment->comment}}</td>
                    <td>
                      <div class="avatar mx-auto">
                        <img src="{{asset($comment->avatar)}}" class="rounded-circle img-fluid" width="50" height="50"
                        alt="First sample avatar image">
                      </div>
                    </td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form action="{{route('comment_delete', $comment)}}" method="post">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" type="submit" onclick="return confirm('Tem a certeza que quer apagar este comentário ?');">
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