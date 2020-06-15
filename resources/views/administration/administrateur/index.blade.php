@extends('layouts.app')

@section('content')
    <h1 class="text-center text-danger">Espace administrateur</h1>
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="">Liste des élèves</a></li>
                <li class="list-group-item"><a href="">Liste des professeurs</a></li>
            </ul>
        </div>

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
