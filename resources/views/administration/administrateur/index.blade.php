@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-1">
            <nav class="nav navbar-light navbar-toggleable-sm">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarWEX" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse flex-column mt-md-0 mt-4 pt-md-0 pt-4" id="navbarWEX">
                    <a class="nav-link navbar-brand active" href="~/Views/Forms/ControlPanel.cshtml"><span class="fa fa-home"></span></a>
                    <a href="" class="nav-link">Linnk</a>
                    <a href="" class="nav-link">Linnk</a>
                    <a href="" class="nav-link">Linnk</a>
                </div>
            </nav>
        </div>
        <div class="col-9 col-sm-10 col-md-10 col-lg-11 col-xl-11">
            <h2>Hello There</h2>
        </div>
    </div>
</div>
    <!-- Vertical navbar -->
<!-- <div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">Jason Doe</h4>
        <p class="font-weight-light text-muted mb-0">Web developer</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="#" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Liste des élèves
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Liste des professeurs
            </a>
    </li> -->
    <!-- <h1 class="text-center text-danger">Espace administrateur</h1>
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="">Liste des élèves</a></li>
                <li class="list-group-item"><a href="">Liste des professeurs</a></li>
            </ul>
        </div> -->
    <div class="page-content p-5" id="content">
        <div class="col-md-8">
            @yield('myContent')
        </div>
    </div>
@endsection

{{-- $profs = DB::('demandEmploi')
            ->join('users', "users.id", "demandEmploi.user_id")
            ->select("*")
            ->get();
             --}}
