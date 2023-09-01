@extends('layouts')


@section('content')

    <section class="bg-center bg-no-repeat  bg-blend-multiply" style="background-image: url(img/page_5/annonce.png)">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-20 lg:pb-20 lg:pt-32">
            <h1
                class=" text-4xl font-extrabold uppercase tracking-tight leading-none text-white md:text-5xl lg:text-6xl ">
                ANNONCES</h1>
        </div>
    </section>
    <div class=" pt-10 pr-32 pl-32 bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">

        <form action="{{ route('Front.admin.search_process') }}" method="post" class="mb-3">
            @csrf
            <div class="grid grid-cols-3 gap-3 ">
                <div class="col-span-2">
                    <select
                        class="bg-white border border-gray-300 text-gray-600 text-lg rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500"
                        name="sector_id" id="sector_id" class="form-control">
                        <option value="">Tous les secteurs</option>
                        {{-- @foreach ($sectors as $sector)
                        <option value="{{ $sector->id }}" {{ old('sector_id') == $sector->id ? 'selected' : '' }}>
                            {{ $sector->nom }}
                        </option>
                    @endforeach --}}
                    </select>
                </div>

                <button type="submit"
                    class="p-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                    Rechercher
                </button>

            </div>
        </form>
        <div class="grid grid-col-6 grid-flow-col gap-6 pt-16">
            <div>
                <p class="text-lg text-amber-500 font-bold underline">
                    Tous
                </p>
            </div>
            <div>
                <p class="text-lg text-gray-500 ">
                   Appels d’offre
                </p>
            </div>
             <div>
                <p class="text-lg text-gray-500">
                    Demandes de manifestation
                </p>
            </div>
             <div>
                <p class="text-lg text-gray-500 ">
                    Demandes de cotation
                </p>
            </div>
             <div>
                <p class="text-lg text-gray-500 ">
                    Appels à candidature
                </p>
            </div>
            <div>
                <p class="text-lg text-gray-500">
                    Offres d’emploi
                </p>
            </div>
        </div>

        <div class="grid grid-col-3 grid-flow-col gap-3 pt-10 pb-10">

            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="h-48 w-96 rounded-lg" src="img/page_5/image_1.png" alt="" />
                </a>
                <div class="p-5">
                    <p class="" style="color: #F18700;">
                        Appels d'Offres
                    </p>
                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-blue-800 dark:text-white">BTP, construction de
                            bâtiment de Bureau</h5>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 uppercase">Nous sommes à la recherche d'entreprises
                        de construction qualifiées et expérimentées
                        dans le secteur du BTP </p>

                       <p style="color: #F18700;">  Date limite: 23/08/2023 </p>

                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="h-48 w-96 rounded-lg" src="img/Picture5.png" alt="" />
                </a>
                <div class="p-5">
                    <p class="" style="color: #F18700;">
                        Appels d'Offres
                    </p>
                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-blue-800 dark:text-white">BTP, construction de
                            bâtiment de Bureau</h5>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 uppercase">Nous sommes à la recherche d'entreprises
                        de construction qualifiées et expérimentées
                        dans le secteur du BTP </p>


                       <p style="color: #F18700;">  Date limite: 23/08/2023 </p>


                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="h-48 w-96 rounded-t-lg" src="img/page_5/image_2.png" alt="" />
                </a>
                <div class="p-5">
                    <p class="" style="color: #F18700;">
                        Appels d'Offres
                    </p>
                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-blue-800 dark:text-white">BTP, construction de
                            bâtiment de Bureau</h5>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 uppercase">Nous sommes à la recherche d'entreprises
                        de construction qualifiées et expérimentées
                        dans le secteur du BTP </p>


                       <p style="color: #F18700;">  Date limite: 23/08/2023 </p>


                </div>
            </div>

        </div>
    </div>
@endsection
