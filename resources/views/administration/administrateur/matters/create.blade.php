@extends('administration.administrateur.templates.admin')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">        
      <div class="box box-primary">
        <div class="box-header with-border text-center p-4">
          <h3 class="box-title">Adicionar uma disciplina</h3>
        </div>
        @if(session()->has('success'))
          <div class="alert alert-success mt-2">
            {{ session('success') }}
          </div>
        @endif

        <form action="{{ route('matter_store')}} " method="post" enctype="multipart/form-data">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label>Disciplina</label>
              <input type="text" class="form-control" name="matter" id="matter" value="{{ old('matter') }}">
              {!! $errors->first('matter', ':message') !!}
            </div>

            <div class="form-group">
              <label>Título</label>
              <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
              {!! $errors->first('title', ':message') !!}
            </div>

            <div class="form-group">
              <label>Conteúdo</label>
              <textarea class="form-control" rows="3" name="content" id="content">{{ old('content') }}</textarea>
              {!! $errors->first('content', ':message') !!}
            </div>

            <div class="form-group">
              <label for="exampleInputFile">Imagem</label>
              <input type="file" id="exampleInputFile" name="image" value="{{ old('image') }}">
              {!! $errors->first('image', ':message') !!}
            </div>

            <div class="form-group">
              <label>Preço/hora</label>
              <input type="number" class="form-control" name="hourPrice" value="{{ old('hourPrice') }}">
              {!! $errors->first('hourPrice', ':message') !!}
            </div>

            <div class="form-group">
              <label>Redução em % (contrato anual)</label>
              <input type="number" class="form-control" name="yearReduction" value="{{ old('yearReduction') }}">
              {!! $errors->first('yearReduction', ':message') !!}
            </div>

            <div class="form-group">
              <label>Redução em % (no caso de referenciação)</label>
              <input type="number" class="form-control" name="extraReduction" value="{{ old('extraReduction') }}">
              {!! $errors->first('extraReduction', ':message') !!}
            </div>

          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Adicionar</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>
@endsection