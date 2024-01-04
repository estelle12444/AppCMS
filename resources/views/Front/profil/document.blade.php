@extends('Front.profil.layout')
@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-4 text-2xl font-semibold text-gray-600 dark:text-gray-300">
            {{ __('Tous les documents fournirs') }}
        </h2>
        <!-- CTA -->
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            {{-- @if ($documents->count() > 0)
                <div class="grid gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-2 xl:grid-cols-6">
                    @foreach ($documents as $document)
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 text-teal-500  rounded-full dark:text-teal-100 dark:bg-teal-500">

                                <a href="{{ asset('storage/app/public/' . $document->fichier) }}" target="_blank">
                                    <img src="{{ asset('img/icon/5064889.png') }}" width="64"
                                        alt="{{ $document->nom_original }}">
                                </a>

                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                <h6 class="px-1 ">{{ $document->typeDeDocument->name ?? '' }}</h6>
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                <form action="{{ route('documents.destroy', ['document' => $document->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <div>
                                        <button type="submit"
                                            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-500 hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple">
                                            <span>supprimer</span>

                                        </button>
                                    </div>
                                </form>

                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    @else
        <div class="flex items-center py-2 px-6 bg-white rounded-lg">
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Aucun document n'a été fourni par l'entreprise.
            </p>
        </div>
        @endif --}}
            @foreach ($typesDeDemande as $typeDeDemande)
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">{{ $typeDeDemande->name }}</h2>

                    @if ($typeDeDemande->demandes->count() > 0)
                        <div class="grid gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-1 xl:grid-cols-6">
                            @foreach ($typeDeDemande->demandes as $demande)
                                <div class="mb-4">
                                    <h3 class="text-lg font-medium">{{ $demande->nom_demande }}</h3>

                                    @if ($demande->documents->count() > 0)
                                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                                            @foreach ($demande->documents as $doc)
                                                <div class="bg-white p-4 rounded-md shadow-md">
                                                    <div class="flex items-center space-x-4">
                                                        <span class="flex items-center font-bold">
                                                            @if ($doc->typeDeDocument->name == 'Statuts')
                                                                <!-- Icône spécifique pour Type1 -->
                                                                <img src="{{ asset('img/icon/statut.png') }}"
                                                                    width="64" />
                                                            @elseif ($doc->typeDeDocument->name == 'Références bancaires')
                                                                <!-- Icône spécifique pour Type2 -->
                                                                <img src="{{ asset('img/icon/cpe.png') }}" width="64">
                                                            @elseif ($doc->typeDeDocument->name == 'Copie DFE')
                                                            <img src="{{ asset('img/icon/OIP.jpg') }}" width="64">
                                                            @elseif ($doc->typeDeDocument->name == "Copie du Registre de commerce")

                                                                <img src="{{ asset('img/icon/cde.png') }}" width="64">
                                                            @else
                                                                <!-- Icône par défaut -->
                                                                <img src="{{ asset('img/icon/PDF.jpg') }}"
                                                                    width="64">
                                                            @endif
                                                            <span
                                                                class="ml-2">{{ $doc->typeDeDocument->name ?? '' }}</span>
                                                        </span>

                                                        @if ($doc->fichier)
                                                            <a href="{{ route('telecharger-document', ['id' => $doc->id]) }}"
                                                                class="text-blue-500 flex items-center space-x-2">

                                                                <!-- Icône par défaut -->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-5 w-5 text-blue-500" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                                                                    </path>
                                                                </svg>

                                                                <span>Télécharger</span>
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="flex items-center py-2 px-6 bg-white rounded-lg">
                                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                                Aucun document associé à cette demande.
                                            </p>
                                        </div>
                                    @endif


                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="flex items-center py-2 px-6 bg-white rounded-lg">
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Aucune demande associée à ce type de demande.
                            </p>
                        </div>
                    @endif
                </div>
            @endforeach



        </div>
    </div>
@endsection