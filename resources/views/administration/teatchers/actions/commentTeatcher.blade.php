@extends('administration.teatchers.teatcher')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center bg-info">
            <h2>T'on commentaire</h2>
          </div>
          <div class="card-body">
            <form method="post" action="{{ Route('teatcher_comment_store')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->name }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" placeholder="{{ Auth::user()->firstname }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="comment" class="col-md-4 col-form-label text-md-right">Commentaire</label>
                <div class="col-md-6">
                    <textarea class="form-control md-textarea" type="text" id="comment" name="comment" rows="2">{{ old('comment') }}</textarea>
                    {!! $errors->first('comment', ":message") !!}                                     
                </div>
              </div>

              <div class="form-group row">
                <label for="exampleFormControlFile1" class="col-md-4 col-form-label text-md-right">Votre photo/avatar</label>
                <div class="col-md-6">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="avatar">
                    {!! $errors->first('avatar', ":message") !!}
                </div>
              </div>
              
              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Envoyer') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection