@extends('layouts')
@section('content')
    <div class="container" style="padding-top: 40px">


        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 ">
                <form class="text-center">
                    <div class="input-group">
                        <input type="text" class="bg-white shadow form-control" placeholder="Rechercher">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Rechercher</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center">
            @foreach ($typeDemandes as $typeDemande)
                <div class="col-md-3 ">

                    <div class="mb-4 bg-white shadow">

                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $typeDemande->name }}</h5>
                            <!-- Contenu de la carte -->

                        </div>
                    <a href="{{route('Front.demande.form', ['typeDeDemande' => $typeDemande->id])}}" class="btn btn-outline-primary"style="margin-left: 35%;margin-bottom:20px" >Renseigner</a>


                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
