@extends('Front.profil.layout')
@section('content')


<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        {{ __('Dashboard') }}
    </h2>
    <!-- CTA -->
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif



            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6 ">
                    <form class="text-center">
                        <div class="input-group">
                            <input type="text" class="bg-white shadow form-control" placeholder="Rechercher">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-white" type="submit">Rechercher</button>
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
                        <a href="{{route('Front.profil.form', ['typeDeDemande' => $typeDemande->name])}}"  class="btn btn-outline-primary " style="margin-left: 35%;margin-bottom:20px" >Renseigner</a>


                        </div>
                    </div>
                @endforeach
            </div>


    </div>


</div>
@endsection
