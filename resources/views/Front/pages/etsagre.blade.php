@extends('layouts')


@section('content')
<section class="bg-center bg-no-repeat  bg-blend-multiply" style="background-image: url(img/page_5/annonce.png)">
    <div class="px-4 mx-auto max-w-screen-xl text-center pt-24  pb-16 md:pt-20  lg:py-0">
        <div data-aos="zoom-in" data-aos-duration="500"data-aos-delay="700"
            class=" text-4xl font-extrabold uppercase tracking-tight leading-none text-white md:pt-20 pt-10 lg:pb-20 lg:pt-32 xl:text-5xl lg:text-6xl ">
           <h1>Nos partenaires</h1> </div>
    </div>
</section>

    <div class="lg:text-4xl font-semibold pt-20 pr-8 pl-4 md:pr-16 md:pl-8 lg:pr-32 lg:pl-32 flex items-center justify-center py-4 xl:py-8 flex-wrap" style="background-image: url(img/background/orange_vert.png); background-size: 100%;">
       <h3 style="cursor:pointer;" onclick="setContent('partners-results')" class="hover:underline hover:text-amber-500">Nos partenaires agrées</h3>
       |  <h3 style="cursor:pointer;" onclick="setContent('others-results')" class="hover:underline hover:text-amber-500">Nos partenaires institutionnelles</h3>
    </div>
    <div id="partners-results">
        @if (count($partners) > 0)
        <div  class="grid grid-cols-3  md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-8 pt-10 pr-16 pl-16  md:pl-16 md:pr-16 pb-16 gap-3 xl:gap-0" style="background-image: url(img/background/orange_vert.png); background-size: 100%;">
            @foreach ($partners as $partner)
            <div class="xl:p-4">
                <div class=" md:mx-auto max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $partner->image) }}" alt="">
                </div>
            </div>

            @endforeach
        </div>
        @else
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2  lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 pt-20 pr-8 pl-8 md:pr-48 md:pl-32"style="background-image: url(img/background/orange_vert.png); background-size: 100%;">
            <div data-aos="zoom-in-up" data-aos-duration="800" data-aos-delay="500" class="flex items-center justify-center h-full">
                <div class="max-w-sm  md:mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-48 h-auto mx-auto mt-5 rounded-lg"
                        src="https://abc-signaletique.fr/822-large_default/panneau-point-d-exclamation-refd868.jpg"
                        alt="" />
                    <div class="p-5">
                        <h3 class="text-lg">Pas de résultats de recherche</h3>
                        <p class="text-gray-500">Aucun résultat trouvé pour votre recherche.</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    {{-- <div id="others-results">
        <div  class="grid grid-cols-3  md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-8 pt-10 pr-16 pl-16  md:pl-16 md:pr-16 pb-16 gap-3 xl:gap-0" style="background-image: url(img/background/orange_vert.png); background-size: 100%;">
            <div class="xl:p-4">
                <div class="md:mx-auto max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="h-auto max-w-full rounded-lg" src="{{asset('img/logo/bidc.png')}}" alt="">
                </div>
            </div>
            <div class="xl:p-4">
                <div class="md:mx-auto max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="h-auto max-w-full rounded-lg" src="{{asset('img/logo/india.png')}}" alt="">
                </div>
            </div>
            <div class="xl:p-4">
                <div class="md:mx-auto max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="h-auto max-w-full rounded-lg" src="{{asset('img/logo/armoirie-Côte-dIvoire.png')}}" alt="">
                </div>
            </div>
            <div class="xl:p-4">
                <div class="md:mx-auto max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="h-auto max-w-full rounded-lg" src="{{asset('img/logo/boad.png')}}" alt="">
                </div>
            </div>
        </div>
    </div> --}}




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- <script>

    var partners = @json($partners);

    var searchResults = document.querySelector('#search-results')

    var searchInput = $('#search-input');
    var selectedSector = $('#selected-sector')
    const renderPartners = function(filtered){
        if(filtered.length > 0 ){
            filtered.forEach(element => {
                searchResults.innerHTML += `
                <div title="${element.title}" class="w-full  p-4">
                    <div class=" md:mx-auto max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img title="${element.title}" class="h-auto max-w-full rounded-lg" src="/storage/${element.image}" alt="${element.title}">
                    </div>
                </div>
                `
            });
        }else{
            searchResults.innerHTML += `
            <div data-aos="zoom-in-up" data-aos-duration="800" data-aos-delay="500"
            class="flex items-center justify-center h-full">
            <div class="max-w-sm  md:mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="w-48 h-auto mx-auto mt-5 rounded-lg"
                    src="https://abc-signaletique.fr/822-large_default/panneau-point-d-exclamation-refd868.jpg"
                    alt="" />
                <div class="p-5">
                    <h3 class="text-lg">Pas de résultats de recherche</h3>
                    <p class="text-gray-500">Aucun résultat trouvé pour votre recherche.</p>
                </div>
            </div>
                `
        }
    }

    searchInput.on('input', function(){
        searchResults.innerHTML = ""
        var searchTerm = searchInput.val();
        var filtered = [];
        console.log(searchTerm.lenght)
        if(searchTerm.length > 0){
            filtered = partners.filter(function(p){
                return p.title.indexOf(searchTerm.toUpperCase()) !== -1;
            })
        }else{
            filtered = partners;
        }

        renderPartners(filtered)

    })

    console.log(partners);

    // selectedSector.on('input', function(){
    //     searchResults.innerHTML = ""
    //     var sectorId = selectedSector.val();
    //     var filtered = [];

    //     console.log(sectorId)

    //     if(selectedSector !== 0){
    //         filtered = partners.filter(function(p){
    //             return p.sector_id === sectorId ;
    //         })
    //     }else{
    //         filtered = partners;
    //     }

    //     renderPartners(filtered)

    // })



    </script>
    <script>
        // $(document).ready(function() {
        //     var searchInput = $('#search-input');
        //     var searchResults = $('#search-results');
        //     var searchForm = $('#search-form');

        //     var loader = '<div class="loader">Chargement en cours...</div>';

        //     searchInput.on('input', function() {
        //         var searchTerm = searchInput.val();

        //         // Afficher le loader pendant le chargement des résultats
        //         searchResults.html(loader);

        //         // Envoyer une requête AJAX au serveur pour obtenir les résultats
        //         $.ajax({
        //             url: '{{ route('Front.admin.search_process') }}',
        //             method: 'GET',
        //             data: { search_term: searchTerm },
        //             success: function(response) {
        //                 // Mettre à jour les résultats dans le conteneur des résultats
        //                 searchResults.html(response);
        //             },
        //             error: function(error) {
        //                 searchResults.html("");
        //                 console.error(error);
        //             }
        //         });
        //     });

        //     // Bloquer la soumission du formulaire
        //     searchForm.on('submit', function(e) {
        //         e.preventDefault();
        //     });
        // });
</script> --}}

<style>
    .loader {
    display: inline-block;
    padding: 8px 16px;
    background-color: #f3f3f3;
    color: #333;
    border-radius: 4px;
    font-size: 14px;
}
</style>

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

@endsection
