@extends('administration.administrateur.admin')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">        
      <div class="box box-primary">
        <div class="box-header with-border text-center p-4">
          <h3 class="box-title">Nouvelle matiére</h3>
        </div>
        
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('matter_store')}} " method="post" enctype="multipart/form-data">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label>Matiére</label>
              <input type="text" class="form-control" name="matter" required>
            </div>
            <div class="form-group">
              <label>Titre</label>
              <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
              <label>Contenu</label>
              <textarea class="form-control" rows="3" name="content" required></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Image</label>
              <input type="file" id="exampleInputFile" name="image">
            </div>
            <div class="form-group">
              <label>Prix/heure</label>
              <input type="number" class="form-control" name="hourPrice" required>
            </div>
            <div class="form-group">
              <label>Reduction en % (forfait anuelle)</label>
              <input type="number" class="form-control" name="yearReduction" required>
            </div>
            <div class="form-group">
              <label>Reduction en % (si l'élève nous a ramené d'autres élèves)</label>
              <input type="number" class="form-control" name="extraReduction" required>
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