@extends('layouts')


@section('content')
    <section class="bg-center bg-no-repeat  bg-gray-500 bg-blend-multiply" style="background-image: url(img/carousel-1.jpg)">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-20 lg:py-48">
            <h1
                class="mb-4 text-4xl font-extrabold uppercase tracking-tight leading-none text-white md:text-5xl lg:text-6xl ">
                Nos partenaires</h1>
        </div>
    </section>
    <div class=" pt-20 pr-48 pl-32 " style="background-image: url(img/background/orange_vert.png);background-size:100%;">
        <h1 class="text-gray-500 pb-4 text-2xl font-bold">
            Recherche
        </h1>
        <form action="{{ route('Front.admin.search_process') }}" method="post" class="">
            @csrf
            <div class="grid grid-cols-3 gap-3">
                <div>
                    <select
                        class="bg-white border border-gray-300 text-gray-600 text-lg rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500"
                        name="sector_id" id="sector_id" class="form-control">
                        <option value="">Tous les secteurs</option>
                        @foreach ($sectors as $sector)
                            <option value="{{ $sector->id }}" {{ old('sector_id') == $sector->id ? 'selected' : '' }}>
                                {{ $sector->nom }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <input type="text"
                        class="bg-white border border-gray-300 text-gray-600 text-lg rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500"
                        name="search_term" value="{{ old('search_term') }}" placeholder="Entrer le nom de l'entreprise"
                        required>
                </div>
                <button type="submit"
                    class="p-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                    Rechercher
                </button>

            </div>
        </form>
    </div>
    @if (count($partners) > 0)
        <div class="grid grid-cols-4 gap-4 pt-20 pr-48 pl-32 md:grid-cols-4 " style="background-image: url(img/background/orange_vert.png);background-size:100%;">
            @foreach ($partners as $partner)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="h-auto max-w-full rounded-lg p-4" src="{{ asset('storage/' . $partner->image) }}"
                        alt="">
                </div>
            @endforeach
        </div>
    @else
        <div class="grid grid-cols-4 gap-4 pt-20 pr-48 pl-32 md:grid-cols-4">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <p>Aucun résultat trouvé.</p>
            </div>
        </div>
    @endif

    <div class=" pt-24 pb-10 bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
        <h1 class="mb-10 text-3xl text-center font-bold tracking-tight text-gray-900">
            REJOIGNEZ-NOUS
        </h1>

        <div class="flex flex-row justify-between  leading-normal bg-center">
            <div class="basis-1/2 pl-48">
                <img class="h-72  max-w-lg mx-auto  " src="img/join.png" alt="image description">
            </div>
            <div class="basis-1/2  mr-64">
                <p class="font-normal text-justify  text-gray-700 tracking-tight pt-10  ">
                    Nous sommes fiers d'accueillir des entreprises innovantes qui transforment l'avenir de la Côte
                    d'Ivoire et de l'Afrique. Rejoignez-nous au VITIB et devenez acteur d'un écosystème florissant,
                    propice à l'épanouissement de votre entreprise. Contactez-nous dès aujourd'hui pour découvrir
                    comment vous pouvez vous implantez et prospérer au sein de notre zone franche technologique.
                    Ensemble, innovons au cœur de l'Afrique.
                </p>
                <div class="pt-10">
                    <a href="/installer">
                    <button type="button" style="background-color: #F18700"
                        class="font-bold rounded-none  white text-center p-4  pl-20 pr-20">
                        REJOIGNEZ NOUS
                    </button>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
