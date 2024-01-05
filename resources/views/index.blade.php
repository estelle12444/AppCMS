@extends('layouts')


@section('content')
    <section style="overflow-x: hidden">
        <div class="bg-gradient-to-r from-orange-100 via-gray-100 to-gray-100">
            <div class=" xl:px-20 pt-16 xl:grid xl:grid-cols-2 xl:gap-8 xl:items-center pb-8">
                <div data-aos="zoom-out-left" data-aos-delay="700" data-aos-delay="500"
                    class="px-8 xl:pt-12 sm:px-8 xl:px-8 text-center xl:text-left">
                    <h1 class=" text-slate-600 text-4xl md:text-5xl xl:text-8xl font-semibold  tracking-tight">
                        BIENVENUE <br>
                    </h1>
                    {{-- <h1 class="text-4xl md:text-5xl xl:text-6xl font-medium pt-4 xl:pt-8 text-slate-600">

                    </h1> --}}
                    <h1 class="text-4xl md:text-5xl xl:text-8xl font-semibold pt-4 xl:pt-8 text-slate-600">
                        AU<span class="text-orange font-extrabold">  VITIB</span>
                    </h1>
                    <p class="text-xl xl:text-2xl md:text-2xl font-medium pt-4 xl:pt-8 text-slate-600">
                        Le Parc Technologique de Côte d'Ivoire
                    </p>
                    <div class="py-8 xl:pt-8 md:pt-8">
                        <a href="{{ route('login') }} ">
                        <button type="button" style="background-color: #F18700"
                            class="px-8 xl:px-16 md:px-12 md:py-2 py-2 xl:py-4  rounded-none font-bold text-white text-center">
                            REJOIGNEZ-NOUS
                        </button>
                    </a>
                    </div>
                </div>

                <div data-aos="zoom-out-right" data-aos-delay="700" data-aos-delay="800"
                    class=" bg-no-repeat bg-cover bg-center" style="background-image: url(img/Image9.png);">
                    <div
                        class="videoWrapper flex justify-center items-center rounded-lg border-solid border-4 border-gray-300">
                        <span class="absolute flex h-16 w-16">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" style="color: white"
                                    class="relative inline-flex rounded-full h-12 w-12 pl-1 bg-amber-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                </svg>
                            </span>
                        </span>
                        <video class=" rounded-lg" muted autoplay controls>
                            <source src="/videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>

    </section>

    </div>

    <div class="bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
        <section  style="overflow-x: hidden" >

            <div class="grid grid-cols-1 md:grid-cols-2  xl:grid-cols-3  mx-auto gap-4">
                <!-- Première partie -->
                <div class="flex items-center justify-center  p-4">
                    <img src="{{asset('img/icon-index/Group 133.png')}}" alt="Logo 1" class="h-16 w-16 mr-4">
                  <span class="text-lg">  Avantages fiscaux <br>et réglementaires</span>
                </div>

                <!-- Deuxième partie -->

                <div class="flex items-center justify-center  p-4">
                    <img src="{{asset('img/icon-index/Group 136.png')}}" alt="Logo 5"  class="h-16 w-16 mr-4">
                    <span class="text-lg">Avantages<br> douaniers</span>
                  </div>

                <!-- Troisième partie -->

                <div class="flex items-center justify-center p-4">
                    <img src="{{asset('img/icon-index/Group 138.png')}}" alt="Logo 7"  class="h-16 w-16 mr-4">
                    <span  class="text-lg">Partenariats et <br>réseautage</span>
                  </div>

                <!-- Quatrième partie -->

                  <div class="flex items-center justify-center  p-4">
                    <img src="{{asset('img/icon-index/Group 132.png')}}" alt="Logo 2"  class="h-16 w-16 mr-4 ml-8">
                    <span class="text-lg "> Un accès à un marché <br> en plein essor</span>
                  </div>

                <!-- Cinquième partie -->
                <div class="flex items-center justify-center p-4">
                    <img src="{{asset('img/icon-index/Group 135.png')}}" alt="Logo 4"  class="h-16 w-16 mr-4 ml-12">
                    <span class="text-lg"> Soutien <br> gouvernemental</span>
                  </div>

                <!-- Sixième partie -->
                <div class="flex items-center justify-center  p-4">
                    <img src="{{asset('img/icon-index/Group 137.png')}}" alt="Logo 6"  class="h-16 w-16 mr-4 ml-2">
                    <span class="text-lg">Environnement <br>d'innovation</span>
                  </div>

                <!-- Septième partie -->


                <div class="flex items-center justify-center  p-4">
                    <img src="{{asset('img/icon-index/Group 131.png')}}" alt="Logo 1" class="h-16 w-16  mr-12">
                    <span class="text-lg -translate-x-8">Main d'oeuvre  <br>qualifiée</span>
                  </div>

                <!-- Huitième partie -->
                <div class="flex items-center justify-center  p-4">
                  <img src="{{asset('img/icon-index/Group 134.png')}}" alt="Logo 3"  class="h-16 w-16 mr-4 ml-6 ">
                  <span class="text-lg ">Infrastructure<br> de pointe</span>
                </div>

            </div>

            <div class="pl-4 py-20 xl:px-24 xl:pt-24">
                <div class="bg-no-repeat "style="background-image: url(img/background/font_logo.png)">
                    <div data-aos="zoom-in-up" data-aos-delay="700" data-aos-delay="500">
                        <div>
                            <h1 class=" text-center font-bold text-slate-600 text-3xl md:text-5xl xl:text-5xl sm:p-2 lg:p-6">
                                INNOVEZ AU COEUR DE L'AFRIQUE
                            </h1>

                            <p class="text-center   xl:text-lg  pt-4 xl:pt-10">
                                Bienvenue au VITIB - Village des Technologies de l'Information

                                et de la Biotechnologie, <br class="hidden xl:block">un centre d'excellence dédié à
                                l'innovation et
                                au développement technologique en Côte d'Ivoire.
                                <br class="hidden xl:block"> Situé au cœur de l'Afrique,

                                en Côte d'Ivoire, le VITIB est une zone franche technologique qui <br
                                    class="hidden xl:block"> offre un
                                environnement propice à la croissance des entreprises technologiques.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col-reverse sm:flex-row py-4 xl:py-0">
                        <div class="sm:w-1/2 text-center sm:text-right sm:pt-4">
                            <a href="/about"
                                class="inline-flex items-center font-medium text-orange-400 dark:text-orange-400 hover:underline">
                                Voir plus
                                <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:flex flex-col xl:flex-row py-10 xl:px-24">
                <div class="xl:w-1/2"  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700">
                    <div >
                        <img src="img/city.png" class="h-64 xl:h-80 md:h-72 w-full pr-2 xl:pr-4 pl-2" alt="">
                    </div>
                    <h1
                        class="font-bold text-3xl  md:text-5xl xl:text-5xl pl-4 pt-8 md:pt-16 xl:pt-16">
                        Un espace Tech <br> pour vous
                    </h1>
                    <p
                        class="text-justify text-gray-600 pt-4 pl-2 md:pt-4 md:px-4 xl:pr-4">
                        Nous sommes fiers de proposer un écosystème dynamique, où les entreprises peuvent prospérer grâce à des
                        avantages fiscaux et réglementaires attractifs, ainsi qu'à une infrastructure de pointe. Le VITIB met à
                        disposition des espaces de bureaux modernes, des laboratoires de recherche de pointe, une connectivité
                        Internet haut débit et bien plus encore.
                    </p>

                </div>
                <div class="xl:w-1/2 py-8 xl:py-0 " data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700">
                    <img  src="img/tech.png"
                        class="h-64 xl:h-80 md:h-72  md:px-3 w-full" alt="">
                    <h1
                        class="font-bold text-3xl  md:px-4 md:text-5xl xl:text-5xl md:text-5xl pt-8 md:pt-16 xl:pt-16">
                        Smart city
                    </h1>
                    <p
                        class="text-justify  text-gray-600 py-4  md:pt-4 md:px-4">
                        La ZBTIC est un territoire sur lequel s’appliquent des politiques fiscales et douanières avantageuses.
                        La législation ivoirienne relative à la ZBTIC (loi N° 429-2004 du 30 août 2004) attribue le monopole de
                        la gestion, de l’exploitation, de l’aménagement et de la promotion du Village de l’Innovation
                        Technologique à l’entreprise VITIB S.A. A son tour, VITIB S.A. a fait concevoir un Plan de Masse
                        conforme à un statut de ville intelligente (smart city).
                    </p>
                </div>
            </div>


            {{-- <div class=" px-6 md:py-8 md:px-8 bg-no-repeat"
                style="background-image: url(img/background/vert.png);background-size:cover">
                <div class="xl:px-32  md:px-8 px-2  ">
                    <div class="xl:flex flex-row ">
                        <div data-aos="zoom-in-right" data-aos-delay="700" data-aos-delay="500"
                            class="xl:basis-1/2 xl:text-lg xl:text-left md:text-center">
                            <h1 class="text-3xl text-slate-600 md:text-5xl xl:text-5xl font-bold">
                                Projets & Services
                            </h1>
                            <p class="pt-4 xl:pt-8 pb-4 xl:pb-8 xl:text-lg ">Investissez sur ses opportunités dans un lieu unique</p>
                            <div class="grid grid-cols-2 xl:grid-cols-2 gap-2 xl:gap-2 xl:px-0 md:px-16 pt-4">
                                <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="200"
                                    class="flex items-center  rounded-lg " role="alert">
                                    <div
                                        class="inline-flex items-center  flex-shrink-0 w-6 h-6 xl:w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                        <img src="img/icon/check.png" alt="">
                                    </div>
                                    <p class="ml-2 xl:ml-4 text-md font-normal">
                                        Immeubles à <br> bureaux
                                    </p>
                                </div>

                                <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                                    class="flex items-center  pt-8 rounded-lg " role="alert">
                                    <div
                                        class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                        <img src="img/icon/check.png" alt="">
                                    </div>
                                    <p class="ml-4 text-md font-normal">
                                        Université
                                    </p>
                                </div>
                                <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                                    class="flex items-center  pt-8 rounded-lg " role="alert">
                                    <div
                                        class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                        <img src="img/icon/check.png" alt="">
                                    </div>
                                    <p class="ml-4 text-md font-normal">
                                        Entrepôts à <br>louer
                                    </p>
                                </div>
                            <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                                class="flex items-center  pt-8 rounded-lg " role="alert">
                                <div
                                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <p class="ml-4 text-md font-normal">
                                    Clinique Médicale <br>Internationale
                                </p>
                            </div>

                                <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                                    class="flex items-center pt-8 rounded-lg " role="alert">
                                    <div
                                        class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                        <img src="img/icon/check.png" alt="">
                                    </div>
                                    <p class="ml-4 text-md font-normal">
                                        Allée <br>Commerciale
                                    </p>
                                </div>
                                <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                                class="flex items-center pt-8 rounded-lg " role="alert">
                                <div class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <p class="ml-4 text-md font-normal">
                                    Centre <br>Culturel
                                </p>
                            </div>

                            </div>

                            <div class="flex xl:items-left md:px-16 items-center py-12 xl:py-8  rounded-lg " role="alert" >
                                <div class="">
                                    <a href="/opportunity"
                                        class="inline-flex items-center font-medium text-orange-400 dark:text-orange-400 hover:underline">
                                        Voir plus
                                        <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-aos="zoom-in-right" data-aos-delay="700" data-aos-delay="700" class="xl:basis-1/2">
                            <div>
                                <img src="img/Image4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
    </div>
    </section>
@endsection
