@extends('administration.administrateur.templates.admin')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">        
      <div class="box box-primary">
        <div class="box-header with-border text-center p-4">
          <h3 class="box-title">Modifier les données de la matiére</h3>
        </div>
        @if(session()->has('success'))
          <div class="alert alert-success mt-2">
            {{ session('success') }}
          </div>
        @endif
        <!-- form start -->
        <form action="{{ route('matter_update', $matter)}} " method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="box-body">
            <div class="form-group">
              <label>Matiére</label>
              <input type="text" class="form-control" name="matter" id="matter" value="{{$matter->matter}}">
              {!! $errors->first('matter', ':message') !!}
            </div>

            <div class="form-group">
              <label>Titre</label>
              <input type="text" class="form-control" name="title" id="title" value="{{$matter->title}}">
              {!! $errors->first('title', ':message') !!}
            </div>

            <div class="form-group">
              <label>Contenu</label>
              <textarea type="text" class="form-control" rows="3" name="content" id="content">{{$matter->content}}</textarea>
              {!! $errors->first('content', ':message') !!}
            </div>

            <div class="form-group">
              <label><img src="{{asset($matter->image)}}" class="img-fluid" width="50" height="50"
              alt="image"></label>
              <span type="text" name="image" id="image">{{$matter->image}}</span>
            </div>

            <div class="form-group">
              <label for="image">Changer d'image ?</label>
              <input type="file" name="image" id="image">
            </div>

            <div class="form-group">
              <label>Prix/heure</label>
              <input type="number" class="form-control" name="hourPrice" id="hourPrice" value="{{$matter->hourPrice}}">
              {!! $errors->first('hourPrice', ':message') !!}
            </div>

            <div class="form-group">
              <label>Reduction en % (forfait anuelle)</label>
              <input type="number" class="form-control" name="yearReduction" id="yearReduction" value="{{$matter->yearReduction}}">
              {!! $errors->first('yearReduction', ':message') !!}
            </div>

            <div class="form-group">
              <label>Reduction en % (si l'élève nous a ramené d'autres élèves)</label>
              <input type="number" class="form-control" name="extraReduction" id="extraReduction" value="{{$matter->extraReduction}}">
              {!! $errors->first('extraReduction', ':message') !!}
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection