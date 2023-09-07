@extends('layouts')


@section('content')

    <section class="bg-center bg-no-repeat  bg-blend-multiply" style="background-image: url(img/page_5/annonce.png)">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-20 lg:pb-20 lg:pt-32">
            <h1
            data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="700" class=" text-4xl font-extrabold uppercase tracking-tight leading-none text-white md:text-5xl lg:text-6xl ">
                ANNONCES</h1>
        </div>
    </section>
    <div  class="  bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">


        {{-- <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500" class="grid grid-col-6 grid-flow-col gap-6 pt-16">
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
        </div> --}}
    <div class="pt-16">
        <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500"  class="  flex items-center justify-center py-4 md:py-8 flex-wrap">
            <button type="button" class="text-amber-500 hover:text-white border border-amber-500 bg-white hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:border-amber-500 dark:text-amber-500 dark:hover:text-white dark:hover:bg-amber-500 dark:bg-gray-900 dark:focus:ring-amber-800"> Tous</button>
            <button type="button" class="text-gray-900 border border-white hover:border-amber-500 dark:border-amber-500 dark:bg-amber-900 dark:hover:border-amber-700 bg-white focus:ring-4 focus:outline-none focus:ring-amber-500 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-amber-800"> Appels d’offre</button>
            <button type="button" class="text-gray-900 border border-white hover:border-amber-500 dark:border-amber-500 dark:bg-amber-900 dark:hover:border-amber-700 bg-white focus:ring-4 focus:outline-none focus:ring-amber-500 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-amber-800">Demandes de cotation</button>
            <button type="button" class="text-gray-900 border border-white hover:border-amber-500 dark:border-amber-500 dark:bg-amber-900 dark:hover:border-amber-700 bg-white focus:ring-4 focus:outline-none focus:ring-amber-500 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-amber-800">Demandes de cotation</button>
            <button type="button" class="text-gray-900 border border-white hover:border-amber-500 dark:border-amber-500 dark:bg-amber-900 dark:hover:border-amber-700 bg-white focus:ring-4 focus:outline-none focus:ring-amber-500 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-amber-800">  Appels à candidature</button>

            <button type="button" class="text-gray-900 border border-white hover:border-amber-500 dark:border-amber-500 dark:bg-amber-900 dark:hover:border-amber-700 bg-white focus:ring-4 focus:outline-none focus:ring-amber-500 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-amber-800"> Appels d’offre</button>

            <button type="button" class="text-gray-900 border border-white hover:border-amber-500 dark:border-amber-500 dark:bg-amber-900 dark:hover:border-amber-700 bg-white focus:ring-4 focus:outline-none focus:ring-amber-500 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-amber-800">Offres d’emploi</button>


        </div>
    </div>

        <div class=" pt-10 pr-24 pl-32 grid grid-col-3 grid-flow-col gap-3 pt-10 pb-10">

            <div  data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="500" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
            <div  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="700" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
            <div   data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="1000" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
