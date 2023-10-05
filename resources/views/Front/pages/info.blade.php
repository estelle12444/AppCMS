@extends('layouts')


@section('content')
<div class="  bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
        <div class="p-5 py-20 mx-2 xl:mx-48">
            <img src="{{ asset('img/annonce/appel_offre.jpg') }}"  style="width: 600px; height:400px;" class="xl:py-8" alt="">
            <p class="pb-4" style="color: #F18700;">
                Dossier d'Appel d'Offre N 0{{ $tender->id }}
            </p>

            <h5 class="mb-2 text-4xl tracking-tight  capitalize ">
                Titre:
                <span class="text-blue-800 text-center dark:text-white font-bold pt-8"> {{ $tender->title }}</span>
            </h5>
            <p class="mb-3 text-lg pt-16 text-justify font-normal text-gray-700 dark:text-gray-400 lowercase">
                <h5 class="mb-2 text-4xl tracking-tight  capitalize "> Description:</h5> @php
                // Diviser le contenu en lignes
                $lines = explode("\n", $tender->content);

                // Initialiser une variable pour compter les lignes
                $lineCount = 0;
            @endphp

            @foreach ($lines as $line)
                {{ $line }}
                @php
                    // Incrémenter le compteur de lignes
                    $lineCount++;

                    // Ajouter un saut de ligne après chaque deux premières lignes
                    if ($lineCount % 2 === 0) {
                        echo '<br>';
                    }
                @endphp
            @endforeach


            </p>

            <p class="mb-3 text-lg pt-4  text-justify  text-gray-700 dark:text-gray-400 lowercase">
                <h5 class="mb-2 text-4xl tracking-tight  capitalize "> Resume:</h5> {!! wordwrap($tender->resume, 100, "\n", true) !!}

            </p>

            <p class="text-blue-800 font-bold pt-8">
                <h5 class="mb-2 text-4xl tracking-tight  capitalize "> Date Limite: <span
                    style="color: #F18700;">{{ $tender->limit_date }}</span> </h5> </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 ">

                <div class="xl:flex flex-row py-4 xl:py-8" >
            <div class="flex flex-row ml-2 pb-4">
                <div class="w-1/5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </div>
                <div class="w-3/5">
                    <a href="{{ asset('storage/' . $tender->file) }}" class="underline hover:underline">
                        <p class="text-lg">
                            Télécharger le fichier de l'offre
                        </p>
                    </a>
                </div>
                <div class="w-1/5">
                    <a href="{{ asset('storage/' . $tender->file) }}" title="{{ $tender->title }}"
                        class="underline hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>
                    </a>
                </div>

                <div></div>
            </div>
                </div>
            </p>
            <a href="/home">
                <button type="button" style="background-color: #F18700"
                    class="pl-4 pr-4 pt-2 pb-2 font-medium rounded-none white text-center ">
                   précédent
                </button>
            </a>



        </div>
</div>

@endsection
