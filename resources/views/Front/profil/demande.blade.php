@extends('Front.profil.layout')
@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('Listes des demandes disponibles') }}
        </h2>
        <!-- CTA -->
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{-- <div class="row">
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
            <br> --}}

            <div class="grid gap-3 mb-8  xl:grid-cols-4">
                @foreach ($typeDemandes as $typeDemande)
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                        <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                {{ $typeDemande->name }}


                            </p>

                            <a
                                href="{{ route('Front.profil.form', ['typeDeDemande' => $typeDemande->name]) }}">

                                <button
                                    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-500 hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple">
                                    Commencer </button>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
