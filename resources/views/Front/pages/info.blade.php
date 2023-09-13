@extends('layouts')


@section('content')
<div class="  bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
        <div class="p-5 py-20 mx-2 md:mx-48">
            <p class="pb-4" style="color: #F18700;">
                Dossier d'Appel d'Offre N 0{{ $tender->id }}
            </p>
            <h5 class="mb-2 text-4xl tracking-tight  capitalize ">

                <span class="text-blue-800 dark:text-white font-bold pt-8"> {{ $tender->title }}</span></h5>

            <p class="mb-3 text-lg pt-16 text-justify font-normal text-gray-700 dark:text-gray-400 lowercase">
                {{ $tender->content }}

            </p>

            <p class="mb-3 text-lg pt-4  text-justify  text-gray-700 dark:text-gray-400 lowercase">
                {{ $tender->resume }}

            </p>



            <p> <span class="text-blue-800 font-bold"> Date limite:</span> <span
                    style="color: #F18700;">{{ $tender->limit_date }}</span> </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 ">

                <div class="md:flex flex-row py-4 md:py-8" >
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



        </div>
</div>

@endsection
