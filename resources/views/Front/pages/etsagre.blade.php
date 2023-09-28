@extends('layouts')


@section('content')
<section class="bg-center bg-no-repeat  bg-blend-multiply" style="background-image: url(img/page_5/annonce.png)">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-20 md:pt-20  lg:py-0">
        <h1 data-aos="zoom-in" data-aos-duration="500"data-aos-delay="700"
            class=" text-4xl font-extrabold uppercase tracking-tight leading-none text-white md:pt-20 pt-10 lg:pb-20 lg:pt-32 xl:text-5xl lg:text-6xl ">
            Nos partenaires</h1>
    </div>
</section>

    <div class="pt-20 pr-8 pl-4 md:pr-16 md:pl-8 lg:pr-32 lg:pl-32" style="background-image: url(img/background/orange_vert.png); background-size: 100%;">
        <h1 class="text-gray-500 pb-4 text-2xl font-bold">
            Recherche
        </h1>
        {{-- <form action="{{ route('Front.admin.search_process') }}" method="get" class="text-center" id="search-form"> --}}
            <form class="text-center" id="search-form">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                    <div>

                        <select id="selected-sector" class="bg-white border border-gray-300 text-gray-600 text-lg rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" name="sector_id" id="sector_id" class="form-control">
                            <option value="0">Tous les secteurs</option>
                            @foreach ($sectors as $sector)
                                <option value="{{ $sector->id }}" {{ isset($sector_id) && $sector_id == $sector->id ? 'selected' : '' }}>
                                    {{ $sector->nom }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input type="text" id="search-input"  class="bg-white border border-gray-300 text-gray-600 text-lg rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" name="search_term" value="{{ isset($search_term) ? $search_term : '' }}" placeholder="Entrer le nom de l'entreprise">

                    </div>
                    <button type="submit" class="p-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Rechercher
                    </button>
                </div>
        </form>

    </div>



    @if (count($partners) > 0)
    <div  id="search-results" class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 pt-20 pr-16 pl-16  md:pl-28 md:pr-32  pb-16" style="background-image: url(img/background/orange_vert.png); background-size: 100%;">
        @foreach ($partners as $partner)
        <div class="w-full  p-4">
            <div class=" md:mx-auto max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $partner->image) }}" alt="">
                 </div>
        </div>

        @endforeach
    </div>
@else
<div class="grid grid-cols-1 gap-4 md:grid-cols-2  lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 pt-20 pr-8 pl-8 md:pr-48 md:pl-32"style="background-image: url(img/background/orange_vert.png); background-size: 100%;">
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
</div>
</div>

@endif



<div class="md:pt-16 pb-6 md:pb-10 bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90% ">
    <div class=" max-w-full md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl mx-auto px-6 xl:px-20 md:px-8 ">

        <h1 data-aos="zoom-up" data-aos-duration="700" data-aos-delay="500" class="mb-6 md:mb-10 text-2xl md:text-3xl text-center font-bold tracking-tight text-gray-900">
            REJOIGNEZ-NOUS
        </h1>

        <div data-aos="zoom-up" data-aos-duration="1000" data-aos-delay="600"
                    class="flex flex-col sm:flex-row justify-center sm:justify-between leading-normal bg-center">
                    <div class="w-full sm:w-1/2 mb-4 sm:mb-0 sm:pl-8 xl:pl-24 md:pl-0 ">
                        <img class="lg:h-75 md:h-70 h-auto  max-w-full " src="img/join.png" alt="image description">
                    </div>
                    <div class="w-full sm:w-1/2 mr-8 md:mr-0 lg:mr-48 md:px-2 px-2 ">
                        <p class="font-normal text-justify text-gray-700 tracking-tight  pt-10 md:pt-0">
                            Nous sommes fiers d'accueillir des entreprises innovantes qui transforment l'avenir de la Côte
                            d'Ivoire et de l'Afrique. Rejoignez-nous au VITIB et devenez acteur d'un écosystème florissant,
                            propice à l'épanouissement de votre entreprise. Contactez-nous dès aujourd'hui pour découvrir
                            comment vous pouvez vous implantez et prospérer au sein de notre zone franche technologique.
                            Ensemble, innovons au cœur de l'Afrique.
                        </p>
                        <div class="pt-4  ">
                            <a href="{{route('register')}}">
                            <button type="button" style="background-color: #F18700"
                                class="font-bold rounded-none text-white text-center p-3 sm:p-4 md:p-5 lg:pl-12  lg:pr-12">
                                REJOIGNEZ-NOUS
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

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
</script>

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

@endsection
