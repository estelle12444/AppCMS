@extends('layouts')


@section('content')
    <section class="bg-center bg-no-repeat  bg-blend-multiply" style="background-image: url(img/page_5/annonce.png)">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-20 md:pt-20  lg:py-0">
            <div data-aos="zoom-in" data-aos-duration="500"data-aos-delay="700"
                class=" text-4xl font-extrabold uppercase tracking-tight leading-none text-white md:pt-20 pt-10 lg:pb-20 lg:pt-32 xl:text-5xl lg:text-6xl ">
                {!!__('news.title')!!} </div>
        </div>
    </section>
    <div class="  bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">

        <div class="pt-16">
            <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="200"
                class="  flex items-center justify-center py-4 xl:py-8 flex-wrap">
                <button type="button" onclick="setContent('tous')"
                    class="text-amber-500 hover:text-white border border-amber-500 bg-white hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:border-amber-500 dark:text-amber-500 dark:hover:text-white dark:hover:bg-amber-500 dark:bg-gray-900 dark:focus:ring-amber-800">
                    Tous
                </button>
                <button type="button" onclick="setContent('#bloc-tender')"
                    class="text-gray-900 border border-white hover:border-amber-500 dark:border-amber-500 dark:bg-amber-900 dark:hover:border-amber-700 bg-white focus:ring-4 focus:outline-none focus:ring-amber-500 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-amber-800">
                    {{ \App\Models\Enums\ActivityTypeEnum::TENDER->getTypeText() }}</button>
                <button type="button" onclick="setContent('#bloc-events')"
                    class="text-gray-900 border border-white hover:border-amber-500 dark:border-amber-500 dark:bg-amber-900 dark:hover:border-amber-700 bg-white focus:ring-4 focus:outline-none focus:ring-amber-500 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-amber-800">
                    {{ \App\Models\Enums\ActivityTypeEnum::EVENTS->getTypeText() }}</button>
                <button type="button" onclick="setContent('#bloc-quotations')"
                    class="text-gray-900 border border-white hover:border-amber-500 dark:border-amber-500 dark:bg-amber-900 dark:hover:border-amber-700 bg-white focus:ring-4 focus:outline-none focus:ring-amber-500 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-amber-800">
                    {{ \App\Models\Enums\ActivityTypeEnum::QUOTATIONS->getTypeText() }}</button>
                <button type="button" onclick="setContent('#bloc-careers')"
                    class="text-gray-900 border border-white hover:border-amber-500 dark:border-amber-500 dark:bg-amber-900 dark:hover:border-amber-700 bg-white focus:ring-4 focus:outline-none focus:ring-amber-500 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-amber-800">
                    {{ \App\Models\Enums\ActivityTypeEnum::CAREERS->getTypeText() }}</button>

                <button type="button" onclick="setContent('#bloc-jobs')"
                    class="text-gray-900 border border-white hover:border-amber-500 dark:border-amber-500 dark:bg-amber-900 dark:hover:border-amber-700 bg-white focus:ring-4 focus:outline-none focus:ring-amber-500 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-amber-800">
                    {{ \App\Models\Enums\ActivityTypeEnum::JOBS->getTypeText() }}</button>


            </div>
        </div>

        @foreach (collect($activities)->groupBy('type') as $key => $group)
            <div id="bloc-{{$key}}"
                class=" lg:px-24 pl-2 bloc  grid grid-cols-1  lg:grid-cols-3 gap-3">
                @php
                    $paginator = paginate($group);
                    $type = \App\Models\Enums\ActivityTypeEnum::tryFrom($key);
                @endphp
                @foreach ($paginator as $activity)
                    <div class="px-4 py-10">
                        <div data-aos="zoom-in"
                            class="  md:mx-auto  max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="h-48 xl:h-48 lg:h-52 w-full"
                                    src="{{ $key != 'events' ? $type->getImage() : asset('storage/'.$activity['image']) }}" alt="" />
                            </a>
                            <div class="p-5 ">
                                <a href="{{ route('Front.pages.info', $activity['id']) }}">
                                    <p class="pb-4" style="color: #F18700;">
                                        {{$type->getTypeText()}} N°{{ $activity['id'] }}
                                    </p>
                                </a>
                                <a href="{{ route('Front.pages.info', $activity['id']) }}">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-blue-800 dark:text-white capitalize ">
                                    {{ $activity['title'] }}</h5>
                                </a>
                                {{ Str::limit(strip_tags($activity['resume']), 100, '...') }}
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    <a href="{{ route('Front.pages.info', $activity['id']) }}" id="voirPlusBtn"
                                        class=" hover:text-amber-500 text-blue-800 font-semibold py-2  rounded">
                                        {!!__('home.read_more')!!}
                                    </a>
                                </p>
                                <p>
                                    <span class="text-blue-800 font-bold"> Date limite:</span>
                                    <span style="color: #F18700;">{{ $activity['limit_date'] }}</span>
                                </p>
                                @if(!is_null($activity['file']))
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 ">
                                        <div class="flex flex-row ml-2 pb-4">
                                            <div class="w-1/5">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                </svg>
                                            </div>
                                            <div class="w-3/5">
                                                <a href="{{ route('download_file') }}?filename={{ $activity['file'] }}"
                                                    class="underline hover:underline">
                                                    <div class="text-lg">
                                                    <p>Télécharger le fichier de l'offre</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="w-1/5">
                                                <a href="{{ route('download_file') }}?filename={{ $activity['file'] }}"
                                                    title="{{ $activity['title'] }}" class="underline hover:underline">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $paginator->links() }}
            </div>
        @endforeach
        @foreach ($empties as $key)
            @php
                $type = \App\Models\Enums\ActivityTypeEnum::tryFrom($key);
            @endphp
            <div id="bloc-{{$key}}" class=" lg:px-24 pl-2 bloc  grid grid-cols-1  lg:grid-cols-3 gap-3">
                <div data-aos="zoom-in" class="empty  justify-center h-full">
                    <div
                        class=" md:mx-auto  max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="h-48 xl:h-48 lg:h-52 w-full " src="{{ $type->getImage() }}"
                            alt="" />
                        <div class="p-5">
                            <div class="text-lg">
                                <h3>Pas de résultats de recherche</h3>
                            </div>
                            <div class="text-gray-500">
                                <p>Aucun résultat trouvé pour votre recherche.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <script>
        // Récupérer tous les éléments avec la classe "bloc" et "empty"
        let blocs = document.querySelectorAll('.bloc');
        let empty = document.querySelectorAll('.empty');
        console.log(blocs.length);

        // Fonction pour masquer tous les éléments avec la classe "hidden"
        const hideAllBloc = () => {
            blocs.forEach((b) => {
                b.classList.add('hidden');
            });
        }

        // Fonction pour définir le contenu en fonction de la catégorie
        const setContent = (n) => {
            // Masquer tous les éléments "bloc"
            hideAllBloc();

            if (n === 'tous') {
                // Afficher tous les éléments "bloc"
                blocs.forEach((b) => {
                    b.classList.remove('hidden');
                });

                // Masquer tous les éléments "empty"
                empty.forEach((e) => {
                    e.style.display = 'none';
                });

            } else {
                // Afficher tous les éléments "empty"
                empty.forEach((e) => {
                    e.style.display = 'block';
                });

                // Afficher l'élément avec l'ID correspondant
                const element = document.querySelector(n);
                if (element) {
                    element.classList.remove('hidden');
                } else {
                    console.error(`Element with ID '${n}' not found.`);
                }
            }
        }
    </script>



    {{-- <script>
        const voirPlusBtn = document.getElementById("voirPlusBtn");
        const modal = document.getElementById("modal");
        const modalTitle = document.getElementById("modalTitle");
        const modalDescription = document.getElementById("modalDescription");
        const fermerModal = document.getElementById("fermerModal");

        voirPlusBtn.addEventListener("click", function () {
            // Remplacez ces valeurs par celles que vous souhaitez afficher dans le modal
            const titre = "Titre du contenu";
            const description = "Description du contenu.";

            // Remplit le contenu du modal avec les valeurs
            modalTitle.textContent = titre;
            modalDescription.textContent = description;

            // Affiche le modal
            modal.classList.remove("hidden");
        });

        fermerModal.addEventListener("click", function () {
            // Ferme le modal en le cachant
            modal.classList.add("hidden");
        });
    </script> --}}
@endsection
