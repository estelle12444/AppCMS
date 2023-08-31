@extends('layouts')


@section('content')

    <div class=" pl-20 pb-5 bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90% sm:pl-2 pb-2 md:pl-4 ">
        <div class="flex flex-row pt-24 container pb-8">
            <div class="basis-1/2 lg:pl-24 lg:pt-12 sm:pl-8 md:pl-8">
                <h1 class="lg:text-6xl font-bold text-slate-600 tracking-tight sm:text-3xl md:text-5xl ">
                    LE <span class="text-orange ">VITIB </span> VOUS
                </h1>
                <h1 class="text-6xl font-bold pt-8 text-slate-600  ">
                    SOUHAITE LA
                </h1>
                <h1 class="text-6xl font-bold pt-8 text-slate-600  ">
                    BIENVENUE
                </h1>
                <p class="text-2xl  text-slate-600  pt-8">
                    Le parc Technologique de Côte d'Ivoire
                </p>
                <div class=" pt-8">

                    <button type="button" style="background-color: #F18700"
                        class="font-bold rounded-none  white text-center p-8  ">
                        REJOIGNEZ NOUS
                    </button>
                </div>
            </div>
            <div class="basis-1/2 pr-24 pt-12 bg-no-repeat" style="background-image: url(img/Image9.png);">
                <div
                    class="videoWrapper flex justify-center items-center  rounded-lg border-solid border-4 border-gray-300  ">
                    <span class="absolute  flex h-20 w-20">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="color: white"
                                class=" relative inline-flex rounded-full h-20 w-20 bg-amber-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                            </svg>
                        </span>
                    </span>
                    <video  class="w-full " muted autoplay controls>

                        <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div>


    <div class=" bg-gradient-to-r from-gray-50 from-40% to-green-200 to-60% ">
        <div class=" bg-white flex flex-row  ">
            <div class="basis-1/6 pl-24  ">
                <div class="rounded-none-4 blue text-white h-32   ">
                    <h3 class=" text-2xl pt-8 pl-2">Nos partenaires</h3>
                </div>
            </div>
            <div class="basis-1/6 pl-8 pt-8 ">
                <img class="h-auto max-w-full rounded-lg" src="img/logo/image4.png" alt="">
            </div>
            <div class="basis-1/6  pt-8">
                <img src="img/logo/image2.png" alt="">
            </div>
            <div class="basis-1/6 pt-8">
                <img src="img/logo/image3.png" alt="">
            </div>
            <div class="basis-1/6 pt-8">
                <img src="img/logo/image1.png" alt="">
            </div>
            <div class="basis-1/6 pl-8 pt-8 pt-8">
                <img src="img/logo/image5.png" alt="">
            </div>
        </div>
        <hr>
    </div>
    <div class="bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
    <div>
        <div class="  pl-20 pt-24 sm:pl-2 pt-8 " >
            <div class=" bg-no-repeat " style="background-image: url(img/background/font_logo.png)">
                <div class="flex flex-col  ">
                    <div>
                        <h1 class=" text-center text-3xl font-bold text-slate-600  p-6">INNOVEZ AU COEUR DE L'AFRIQUE
                        </h1>
                    </div>
                    <div class="  tracking-tight">
                        <p class="text-center text-justify text-lg lg:pl-72 lg:pr-80 sm:pl-8 sm:pr-8 md:pl-4 md:pr-8"> Bienvenue au VITIB - Village des
                            Technoloies de
                            l'Information et de la Biotechnologie, un centre d'excellence dédié à l'innvovation et au
                            développement technologique en Côte D'Ivoire. Situé au coeur de l'Afrique, en Côte d'Ivoire, le
                            VITIB est une zonz franche technologique qui offre un environnement propice à la croissance des
                            entreprises technologiques. </p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class=" basis-1/2 text-right pt-4 underline ">
                        <a href="#"
                            class="  inline-flex items-center font-medium text-orange-400 dark:text-orange-400 hover:underline">
                            Voir plus
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pl-32 pr-32  bg-no-repeat" >
            <div class="flex flex-row pt-16 " style="background-image: url(img/Image8.png)">
                <div class="basis-1/2 pl-24 ">
                    <h1 class="text-4xl font-bold  tracking-tight   ">
                        DECOUVREZ 8 AVANTAGES UNIQUE AU VITIB
                    </h1>
                    <p class="text-center text-lg text-justify tracking-tight pt-8 pr-16">
                        Le VITIB offre un écosystème favorable et attractif pour les entreprises technologiques qui
                        cherchent à développer leurs activités en Afrique de l'Ouest.
                        En combinant avantages fiscaux, infrastructures modernes, accès à un marché en pleine croissance et
                        soutien gouvernemental,
                        le VITIB se positionne comme un choix stratégique pour les entreprises qui souhaitent prospérer dans
                        le secteur technologique en Côte d'Ivoire.
                    </p>

                    <div class="flex flex-row">
                        <div class=" basis-1/2 text-center pt-8 underline ">
                            <a href="#"
                                class="  inline-flex items-center font-medium text-orange-400 dark:text-orange-400 hover:underline">
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
                <div class="basis-1/2 pr-16 ">
                    <div class="flex flex-row">
                        <div class="basis-1/2 ">
                            <div class="flex flex-col  ml-10 ">
                                <div class="rounded-lg border-2 border-gray-700 p-2 ">
                                    <div class="px-3 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="  w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                        </svg>
                                    </div>
                                    <p class="pl-4 pb-2 mr-0  text-lg">
                                        Avantages fiscaux et reglementaires
                                    </p>

                                </div>
                                <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                    <div class="px-3 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                          </svg>

                                    </div>
                                    <p class="pl-4 pb-2 mr-0 text-lg">
                                        Partenariats et réseautage
                                    </p>

                                </div>
                                <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                    <div class="px-3 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                                          </svg>

                                    </div>
                                    <p class="pl-4 pb-2 mr-0 text-lg">
                                        Soutien gouvernemental
                                    </p>

                                </div>
                                <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                    <div class="px-3 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="  w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                        </svg>
                                    </div>
                                    <p class="pl-4 pb-2 mr-0 text-lg">
                                        Main d'oeuvre qualifiée
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="basis-1/2 ">
                            <div class="flex flex-col py-8 p-6">
                                <div class="rounded-lg border-2 border-gray-700 p-2 ">
                                    <div class="px-3 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                          </svg>

                                    </div>
                                    <p class="pl-4 pb-2 mr-0 text-lg">
                                        Avantages douaniers
                                    </p>

                                </div>
                                <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                    <div class="px-3 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                                          </svg>

                                    </div>
                                    <p class="pl-4 pb-2 text-lg">
                                        Un accès à un marché en plein essor
                                    </p>

                                </div>
                                <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                    <div class="px-3 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="  w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                        </svg>
                                    </div>
                                    <p class="pl-4 pb-2 mr-0 text-lg">
                                        Environnement d'innovation
                                    </p>
                                </div>
                                <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                    <div class="px-3 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                                          </svg>


                                    </div>
                                    <p class="pl-4 pb-2 mr-0 text-lg">
                                        Infrastructure de pointe
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col text-center pb-20">
                <h1 class="text-3xl font-bold text-slate-600 pb-8 ">
                    LE PARCOURS DE NOS FUTURS MEMBRES
                </h1>
                {{-- <img src="img/parcours.png" alt=""> --}}

                <div class=" pt-8 text-center">
                    <button type="button" style="background-color: #F18700"
                        class="font-bold rounded-none  white text-center pl-16 pt-4 pb-4 pr-16   ">
                        REJOIGNEZ NOUS
                    </button>
                </div>
            </div>
            {{-- <div class="flex flex-col  py-32">
                <h1 class="text-4xl text-center  font-bold text-slate-600 ">
                    NOS ACTUALITES
                </h1>
                <div class="flex ">
                                        <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                             <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="img/carousel-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="img/carousel-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="img/carousel-3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>

                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="img/carousel-5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>


                </div>
            </div> --}}
        </div>

                <div class="pl-32 pr-32  bg-no-repeat" style="background-image: url(img/background/vert.png);background-size:cover"  >
            <div class="pl-24 pr-16 ">
            <div class="flex flex-row  ">
                <div class="basis-1/2 text-lg">
                    <h1 class="text-5xl font-bold  ">
                        Projets & Services
                    </h1>
                    <p class="pt-8 pb-8 text-lg">Investissez sur ses opportunités dans un lieu unique </p>
                    <div class="grid grid-col-2 grid-flow-col gap-2 pt-4 ">
                        <div class="grid grid-col-2 ">
                            <div class="flex items-center  rounded-lg " role="alert">
                                <div
                                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <p class="ml-4 text-md font-normal">
                                    Immeubles à <br>
                                    bureaux
                                </p>
                            </div>
                            <div class="flex items-center  pt-8 rounded-lg " role="alert">
                                <div
                                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <p class="ml-4 text-md font-normal">
                                    Université
                                </p>
                            </div>
                            <div class="flex items-center pt-8 rounded-lg " role="alert">
                                <div
                                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <p class="ml-4 text-md font-normal">
                                    Clinique Médicale <br>
                                    Internationale
                                </p>
                            </div>
                            <div class="flex items-center pt-8 rounded-lg " role="alert">
                                <div
                                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <p class="ml-4 text-md font-normal">
                                    Allée <br>
                                    Commerciale
                                </p>
                            </div>
                        </div>
                        <div class="grid grid-col-2 ">
                            <div class="flex items-center  rounded-lg " role="alert">
                                <div
                                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <p class="ml-4 text-md font-normal">
                                    Entrepôts à <br>
                                    louer
                                </p>
                            </div>
                            <div class="flex items-center pt-8 rounded-lg " role="alert">
                                <div
                                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <p class="ml-4 text-md font-normal">
                                    Hôtels
                                </p>
                            </div>
                            <div class="flex items-center pt-8 rounded-lg " role="alert">
                                <div
                                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <p class="ml-4 text-md font-normal">
                                    Centre culturel
                                </p>
                            </div>

                        </div>

                    </div>
                    <div class="flex items-left pt-8 rounded-lg " role="alert">
                        <div class=" pt-4 underline ">
                            <a href="#"
                                class="  inline-flex items-center font-medium text-orange-400 dark:text-orange-400 hover:underline">
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
                <div class="basis-1/2">
                    <div>
                        <img src="img/image4.png " alt="">
                    </div>


                </div>
            </div>
            </div>


            <div class="flex flex-col  pt-20 pb-24">
                <div class="px-30">
                    <h1 class="text-5xl text-center font-bold text-slate-600  ">
                        Des sessions d'accompagnement conçus <br> pour nos futures locataires
                    </h1>
                </div>
                <div class="pl-64 pr-32">
                    <p class="text-center text-slate-600  text-lg pt-10  ">
                        Participez à des événements programmés conçus pour les entreprises à grande échelle.
                        Avec des programmes de développement créés pour nourrir et soutenir.
                        Et des es événementiels remplis de programmes d'information et de réflexion pour enrichir et
                        inspirer tout le monde.
                    </p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 pt-16">
                    <div class="ml-10">
                        <img class="h-auto max-w-full rounded-lg" src="img/Image2.png" alt="">
                        <h2 class="pt-8 text-2xl">
                            Programmes de formation des dirigeants
                        </h2>
                        <p class="text-justify pt-4">
                            Vous souhaitez passer à l'étape suivante de votre parcours de dirigeant ? Le programme Elevate
                            pour
                            les leaders émergents est un cours de leadership unique en son genre, spécialement conçu pour
                            les
                            leaders ambitieux au sein d'équipes très performantes.
                        </p>

                    </div>
                    <div class="ml-10">
                        <img class="h-auto max-w-full rounded-lg" src="img/Image3.png" alt="">
                        <h2 class="pt-8 text-2xl">
                            Produits Technologiques
                        </h2>
                        <p class="text-justify pt-4">Produits Technologiques" est une collection diversifiée d'appareils,
                            gadgets,
                            et équipements de pointe, conçue pour répondre aux besoins de la vie moderne et numérique. Cette
                            gamme de produits offre des solutions innovantes, pratiques et hautement performantes pour
                            améliorer
                            notre quotidien, tant sur le plan professionnel que personnel.</p>

                    </div>
                    <div class="ml-10">
                        <img class="h-auto max-w-full rounded-lg" src="img/Image1.png" alt="">
                        <h2 class="pt-8 text-2xl">
                            ScaleUP Africa meet-ups
                        </h2>
                        <p class="text-justify pt-4">
                            Hébergé à Tech, ScaleUP VITIB est un réseau de pairs pour les leaders émergents. Nous nous
                            réunissons en personne tous les mois et rassemblons des leaders de l'écosystème technologique
                            pour
                            se connecter, partager et apprendre les uns des autres. Posez votre candidature ci-dessous. </p>
                    </div>
                </div>
            </div>

            <div class=" flex flex-col bg-repeat-x " style="background-image: url('img/Image6.png')">
                <div class="pl-30 ">
                    <h1 class="text-4xl text-center font-bold ">
                        COMMENT NOUS REJOINDRE
                    </h1>

                    <div class="flex flex-row py-16">
                        <div class="basis-1/3">
                            <img class="h-auto max-w-full rounded-lg" src="img/Image7.png" alt="">
                        </div>
                        <div class="basis-1/3 pl-10">
                            <h2 class="font-bold py-4">
                                TÉLÉCHARGER DOSSIER DE DEMANDE D’AGRÉMENT
                            </h2>
                            <p class="text-justify">
                                Une opportunité exceptionnelle au VITIB.
                                Bénéficiez d'avantages fiscaux, d'une infrastructure de pointe et d'un écosystème dynamique
                                propice à l'innovation. Immergez votre entreprise dans un environnement stratégique et
                                prospère,
                                prêt à accueillir les entreprises technologiques les plus prometteuses.
                            </p>
                            <p class="text-justify">
                                Rejoignez-nous dès aujourd'hui et transformez l'avenir de votre entreprise au cœur de
                                l'Afrique.
                            </p>

                        </div>
                        <div class="basis-1/3 pl-10 ">
                            <div class="basis-2/3  border-dashed  border-l-2 border-gray-700">
                                <div class="flex flex-row ml-4 pb-4 py-6">
                                    <div class=" basis-1/5 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                        </svg>
                                    </div>
                                    <div class=" basis-3/5 ">
                                        <a href="" class="underline">
                                            Formulaire de demande
                                            d’agrément Pépinière
                                        </a>
                                    </div>
                                    <div class=" basis-1/5 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>

                                    </div>

                                    <div></div>
                                </div>
                                <div class="flex flex-row ml-4 pb-4">
                                    <div class=" basis-1/5 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                        </svg>
                                    </div>
                                    <div class=" basis-3/5 ">
                                        <a href="" class="underline">
                                            Consulter la liste des
                                            opportunités
                                            d’investissement
                                            (investir au VITIB)
                                        </a>
                                    </div>
                                    <div class=" basis-1/5 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>

                                    </div>

                                    <div></div>
                                </div>
                                <div class="flex flex-row ml-4 pb-4">
                                    <div class=" basis-1/5 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                        </svg>
                                    </div>
                                    <div class=" basis-3/5 ">
                                        <a href="" class="underline">
                                            Formulaire de demande d'agrement
                                        </a>
                                    </div>
                                    <div class=" basis-1/5 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>

                                    </div>

                                    <div></div>
                                </div>
                            </div>
                            <div class="basis-1/3">
                            </div>

                            <div class="border-dashed px-4 border-l-2 border-gray-700">
                                <button type="button" style="background-color: #F18700"
                                    class="font-bold rounded-none white text-center p-4 pl-20 pr-20">
                                    REJOIGNEZ NOUS
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="flex flex-col  py-20 pb-32">
                <div class="px-30 mb-20">
                    <h1 class="text-5xl text-center font-bold   ">
                        Témoignages de nos clients
                    </h1>
                </div>
                <div class="flex flex-row">
                    <div class="basis-1/3  pl-16 pr-10">
                        <div class="flex flex-col">
                            <div class="max-w-sm pl-4 py-4 pr-2  bg-white rounded-lg ">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full"
                                        src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTEhIVFhUVGRUXGBgXFhYXGhoYGhcXFxcdFxkYHSgiGBolGxgXITEhJikrLi4uGB8zODMsNygtLisBCgoKDg0OGxAQGy0lICUtLS0tLy8tLS0tLS0tLS0tLS8tLS0tLTctLy0yLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAABgQFAgMHAf/EAEoQAAIBAgMFBAUHCQcCBwEAAAECAwARBBIhBQYxQVETMmFxIkKBkaEHIzNSYnKxFENzkqLB0eHwFVNjgpOjwoOyJDRUZJTS0xb/xAAaAQACAwEBAAAAAAAAAAAAAAAABAIDBQEG/8QANxEAAQMCAgcIAQMCBwAAAAAAAQACAwQRITEFEkFRYbHwInGBkaHB0eETIzLxFBUGJDM0QmLC/9oADAMBAAIRAxEAPwDuNFFFCEUUUUIRRRRQhFFYk21NL+09540usQ7Ruvqj2+t7PfVkcT5DZguq5JWRi7zZMNVWM3ggj0z5j0X0vjw+NJmP2nLN9I5I+qNF9w4+29Q7Vox6OGch8B8rOl0icmDz+EzYne5j9HGB4sSfgLfjVZNt/Et+dIHRQB8bX+NVjsACSQANSToAPE1Cw+Mef/ysLzD+80jh/wBRu/8A5A1MvZS07dZ4A7/v2S7ZKmc2aSe76t6q0fHytxlkPmxP760FieJJ9tbYN3cS/wBLiUi+zBHmI/6k1w3P82KjbQ2DEpC9tiXYcWM7p7LQ5B8KoZpSne/UjBPG1h7cle/RtQGa8hA7zj7rYCRwrcmNkXhI48mI/A1V/wBhxfWn/wDlYr/9ambO3aD3yz4hAOYlMhv0+eDirJa6JjS5wwHd8quOilc7VYcfH2VnDt3ELwlY/es34i9WWH3ukH0kat90lT8b3+FUM27+KT6PERyj6s0eRif0kWg/06gYjFPD/wCZgeED84LSRePzidweLhKpjqqGowwvxGr64c1bJTV0GONuB1vnkui4PeOB9CxQ/bFh+sNPfVujgi4IIPMa1yuKQMAykMp1BBBBHgRxqXg8bJEbxuV8OR8wdDUpdGtOLDbvx69VyPSLhg8X7uvhdMopY2bvUpssy5T9ZblfaOI+PspjikDAMpBB4EG4PkazZYXxGzgtGKZkouwrZRRRVStRRRRQhFFFFCEUUUUIRRRRQhFFFFCEVB2ltKOBbudTwUcT5D99RNt7ZWAZRZpDwHIeLfw50l4idpGLOSzHiT/Wg8KdpqQydp2A5pKprBH2W4n0HW5S9qbYknNicqckHD2n1jVfXtqLVssY1g1WiwWO5xedZxuV5UTFYzKyxxoZZnBKRrYEgaFmJ0RBzY+QudKMbO+ZYoVDTyXyA3yqB3pJLcI1uPMkKNTTHsPYqYZTYl5HsZZWtnkbxtwUcFUaKOHOs3SGkhTjUZi70HE/C0KDR5qDrOwb6nu+VW7P3WDESY1hM4sREPoIz4IfpSPrPfwC0zCtM06p3iB/XSoUm11HdUnz0rzRbPUu1zd3H7yXpA6CmbqCw4dYqdPLlUt0F6WWYkknidTUzF7RLrlsAPfUKtWhp3QtJdmVm1k4lcA3IIplwkORAvv8+dLaNYg9CD7qs12w3NAfIkfxqNdFLKGhgw2+3uu0UscZJfns68lcUVWptdeasPcamQTq4upuPIj8ayJIJYxdzSB6ea1WTxvPZcCqTH7qRljJhmOGlJucgvG5/wAWHusTzYZW+1VOcS8TiLFII3bRGBvFKf8ADc8G+w1m6XGtPNRsfgo542imRXjYWZWFwf5g6g8RTdJpGanNr3buPtu5cEpV6OiqMcnbx77+fFLlql7N2nJAbo2nNTqp9nI+IqpxkD4JgsjF8MxCpM2rRsdFSc8weCyddG1sTMtXqoZo6mPWbiNx9+vFeXmhkppLOwIyI9uu8J92RtiOcaei44qePmOoq0rl8bFSCpII1BGhFOGw9uiW0clhJyPAN/BvD3dKzqmiMY1mZbtoWjTVmv2H580wUUUUgn0UUUUIRRRRQhFFFFCEVT7d2sIFsusjcB0HU/1rUvamPEMZc6ngo6nlSHPMzsXY3Zjcn+uVOUlN+Q6zsh6pKrqfxjVbmfQdZLU7liWYkk6knmaxrZai1bKx1rrVi8QsSNI59FASeZ06DmeQFSbVFWDtsVDEe5HfESeOQgQqfOQ5/wDo1TUziGJ0h2D+FdTwmaRsY29FWm6+y2iQyzC2Ins0gvfIAPQiU9EBN+rFjzq8oorxL3ue4ucbkr2rGNY0NbkFA2jgc/pDvD4+BqjZSDY6EU11Dx2BEmo0br+409SVv4+w/Lfu+uSSqqPX7TM9vFL9FZyxlTZhY1hWyCDiFj2tgUV6BW7DYVpD6I05nkKusJglj4at1P7ulLVFWyHDM7vndz4JmClfLjkN/wAb+XFQsHsy+smn2f49KtlUAWAsKqMbvRg4ZDHJiEV10YanKeNmKggHwNTtn7ShxCloJo5QNCUYNY9DbgfA1izzSSm78vQLXhijjFm/al0UUVQr1qxECurI6hlYFWUi4IOhBHMUnRwthpvyZyWQgth3OpZBbNG55ulxr6ykHiGp2qp3k2WcRAVQgSoRJCx9WVdVv9ltVb7LNTlDVGmlDthz7vrNJ1tIKiMt2jI8ftVdeitGzsWJoklUEBhex4qeDK3RlYEHxBqVavZh18QvHEbCm3d7bPaDs5D6Y4H6w/8AtV/XM0JBBBsRqCORp42HtMTpr310YfgR4Gsispgztty28FrUdTr9h2ezirSiiikU+iiiihCK8JtXtUW82OyJ2Y4vx+7z9/D31ONhe4NChJII2lx2Kh2zjzNJcdxdFHhzPmf4VAtXtq9tW81oa0NGQWA5xcS45lY2otWVqLVK6isbVs3VjzNiJ/rydkp+xAChH+qZ/fWEjhQWPAAk+QFzUnYKtDgYiULOIg7IgF2kcZ3C8rl2OpNtdTWNpmS0TWDaeX2QtjQ0d5XPOwc/4WO8m9EGCA7QlnYXWNBdiOFzewVfEkcDa50pEfe3aeOYjCRlFB/MqGt1DzyjID5ZTTDszcozStitpESSub9ipvEg9VWOnaZRpbReNwx9KnKKMKAqgKo0AAAAHQAcK8+S1uAxK37OdwC5Ud1trgiXtXLj0h/4pmcHoA5yey+Xlwp93Y2rNNGVxMLQ4iOwdSLK1xo8ZBIZTzsTYgjoTeUVxz9YWIUgyxwK0YnDLILMPI8xUCDZGvpm45Ac/PpVtRVkdRLG0tacD1huUH08b3azhj1nvWCKALAWFU286YyRBFg8iM/fmdsuReYTKCc562063ta8oqkGxurSLiy5nD8lj29LGIDroIGOp5kmUX9wqo2juZjsG3axXky8JMOWEgHE3TvWuOC5weddjoqYlddQ/EFzzdH5QQ5WLGFQx0WYWCseFpANEb7Q9G9+7oD0OljejcuDGXcARTn84o0Y2t86vrjhr3hbQ20qq3H2pPBL/ZuMFnUEwMTcMo4qreutgSp4gBgQMtq6QHC7fJcaS02cnyiiiqlak+KLssViYeRZMQo6LMDm/wB2OU/5qmWrDbK2x0Rt9Jh5QTz+aliIH+83vrbavX6Ok1qZhOzDyXkNIsDKl4Hf5rG1SNn4owyB15cR1HMf14VptXlqdNiLFJgkG4XRIJQ6hlNwQCK20tbq47jCT1Zf+Q/f76ZawZYzG8tW9DKJGByKKKKrVq8pE2liu1lZ+V7L90cP4+2mvbuIyQtbi3oj28fhek61aFCzAv8AD5WbXSYhnj8LXai1bLUWrQWetdqLVstRahCqt4r/AJJiMve7GUDzKMB8acAoGg4DQUr7ZX5iT7tNLV5/TR7TBwPst/Qo7LzxHuitcsyoLswUdWIH40jb975yRSjA4BQ+LfidCIgRcaHTNb0tdANTe9QdmfJQ+JtNjZZZ5WGrM5VOtluM5A1sdB4VnR0xeLnALTkqA02GK6BjMWEjMgsRpY301IA18zRgMYJVvwI4j+uVJqbrzbHLOuaTAPcYiFjnCKdDKnOwHeBGq342FmrZ2zuxb0WzJltqbnS1iTz86hLF+M2KnFKJBcKzoooqlWoqjxGLkeUrGSLGwtw04k+F6uz4UsY3GjZ8RdgZsRM2WOJOLsL5VXTRQLsznqfsipNFzhmuOIAuUyxAgDMbm2pta5rOuZ4jdnbeM+dlxcmHvqsUAkCqOhysuY+N286r5MdtrZpzO35XCveDAs4GlySQJAbX19IDiaYNI+2YSwqmXyK65VftXZST9mW0eF1kjccVYEEjxVhdWHMHrYiFujvTBtCLtITZlsJI2tmQ+PVTyYcfAggXtL9pp3FMYOHBFFFFRUktbwD/AMZhT/hYse84Y/urbasNua43DDpBiz75MIB++t9q9Tor/bN7zzK8rpQ/5l3cOS12otWy1Fq0Vnow8xRldeKkH+X7qfYZAyhhwIBHkaQrU0bsYjNGUPFD8DqPjeka1l2h25PUL7OLN/Prkrqiiis1aiW96ZbsidAWPt0H4H31R2qw22+aZ/Cw9wH771BtWvANWMBYs7taRx48ljai1ZWotVt1SsbUWrK1RdoTsuRI8vaSuETMCVXQs7MARcKisbXFzYXF71F7wxpc7IKTGF7g1uZWO1FvC46i3vq62piuyhllCl+zR3yji2VS1h4m1qX9pYWWMRgS9skssCksEUreVCxXIAGTsw/UggakE2aq87pGpZO5pZuPP6Xo9G074Wva/eOSSfkZ3bzxvtLEjPNimdgSPVzG/sLAn2DpTKJ/7SxeIw/auuFwZWOURuUaaZgSytIhDLEgFiAQWa9zZbGy2PJDhIVhAcIpfLZWcAM5fKAgJCjMQNLAAC9cUl2BiJcRi43jxSxyTTntEimtIjSF11y2IN9QasbKwtuComNzTYhebS2vDgMdNLsmQiGJxnjEjtDLZR2qkMTmUnNZteo5W7NhwmROyFoyqFB0QqCo9xFcuG6UkeFbC4bDyfOkKzyADKGsGka5BOVeAUX4aV1OKMKqqvdUBV+6oAHwApaqc0tFimKZrg43C8ikDC48R7QSCPMEEVsqNgoMikdXlb9eRn/5VJpNOBFT8Fs+MESlAZCuUORchSb2U+qDoTbjYX4C0Ct+3sU8eAxEsX0kcEzJb66xsR8RTVGLvKWqydUd6qRtrE4+aaHZ7xxRYduzlxTp2t5QLskEdwDluLuxtroDxKrvftrGbLmjXFzJj4JAWb5lIJ4lBAJQx2U8zqNbEacaStydvY7CYVkwGU5l7QqyhhnNgSL+tYWtzyjTSteFwWNxImxOPkOc6jtAL2AObQWEacLAC3HQc30irHevB/2Vi8PtTBnNh58pYLoro4zHTlmXW3JlB5iut4XELIiyIbo6qynqrC4PuNImN2dfdNO3PpJCsik6aNLmiH6rIPHSrj5M4Z02dCmIQoy5sobvdmSSmYeqbG1ugFJ1bRYOTdK43LdiaaKKKRTqWcac20Dp9Fhl1/TSsSP9gGplqrtmN2mIxk3IyiFT9mBFU/7rS/GrO1eroG6tOwcL+a8nXu1qh548ljai1ZWotTd0msbVabuS5ZrcnBHtGo/A++q21b8E+WRG6MPdfX4VCQazCOCsjdqvB4p3ooorGW7ZJWLN3c9WY/E1qtWbV5atgHBYJxJKxtRasrUWrt0LG1UmMzviJCt7QwqmYHgZ3vJb7QSKMAjUdqTyq9tUHYEQP5azkWecgnhZVw8CC58MpPtrP0lJqwW3kD39loaMYHT3OwE+3uqXZhIxeHwwW0atJiVsAFGWJ4XUAcBmlRx4s3hd6pI3bwzf2h2rlsxwpYIbgLHLMOz0I0ciEs19Rny+qKd68+/NeiYiiiioKaK1dsubJe7AXIHIcBfpfW3Wx6GttK2xtpmAGKaJxJnkLvx7Rsx9K56rlIF9Fso7pAkG3BXCcU00VTYjeKJBchrcOWp6AC5J8BUvZ20Vm7oI0B14WPCuWKLhTq1yxKwKsoYHiCAQfMGtlFcXVTNuthPUgWP9CWh4cL9kVB9tVm0tyUmGU4iXsyQWRshVlFvQLIFfKefpX1402UVYJXjIlVmJhzC8xNpEWN1QqpUhQtluhullJNspAI6EA8hXtFFRc9zjdxUmsDRYIqJtLHLBE0rcFGg5s3BVUc2ZrKANSSBUuqfa20IYj2jWZk4X1CE6afaN7aam9udcAuV0qk3f2Vjhh4xeKAgFmEqNM7yOS8hYJIojBdm0BY2tw4Cx2VjGkDrIoSWJzHKoNwGsGUqTa6MjKw8GsdQaoxtGbEszZ+zCMVylbuDoRdSbRixBtqSCDccKg4/HzdvG6SNE82HAkyhG9OCQqfpFOvztr25CtWCvex36h7O4bN1lmS6MbMA2Edo7Sc99+aeLV5akqPa2MXhiEf8ASwqb/wCkUtVjhd6iNMRAyj68JMq26slg48lDedaMekYH/wDK3fh9eqRm0NWxC5Zcf9cfTP0TJagiteCxscy54nV14XUg2PMHofA61o23jvyeCSW12UXRfrOxyxr7XKj205rWF1mBpJsM8uuKd/7QoriWTFf+vl99FYH9VBuXqv7VW8PNdHK17at2ISzMOlx8awtW2CvLkWNlhai1Z2otRdcssLVTYaH08fhucyiZPESQiBgPEPFc9O0XrV5aq7a2Gf0J4ReWEkhdB2iNYSx3PDMACOWZEJ0BpariMsRAzGI7wm6OYRSgnI4HxWvASB9ozMOBwmEI8jLiTTBStgMUj7RV4zdJ8HZdLWaCchlIOqsO2sVOoKkGmmvNEWXp2m6KK1TuVUkKWI1yi1z1tfS9utvMVS4fe7Cyv2UJlml1vHHDKXWxs2fMoEZB0OYjWuta52QQXAZlX9Rcbg1kFjoRwI4j+Va4/wAtksUwaxj/ANxOiG3XLAst/IkVMXZmL5vhx4BZD8bj8KtFPLnZVmojG1VEWw9fSfTwFj/KrWGFUFlFh/XvrI4PFD83C46rKyt7FZLft1HkxRT6WGaPzjLgeJeHOqjzIqLoZBmF1s0ZyKlUVGweOilBMUqSW0OR1axGhBsdDUmqlaiiiihCKKK8JoQq/bOKyJlB9JtPIc/4e2lcwXfM2uXuDkDbVvva28ADbvGpu1McpLSOwVFHFjYBRzJPDr7ar9myFkzEEZmZlBFiFLHLcHUEizWOovarWiwUDiVk8YWVXHFxkbxtd0J8vTH+eqDeLE5MTCq29GOZmHhI8VvK5RvcausS5DmSQhYYVLXJ4tlNzpwVVJHiWP1RdKWZpXedwQ0puAfVQaRr5hdT4lqmBcKyC/5AR39eKvcPiVfhx6VvpfViDcaGrbB4vPoe9+PlVTm2yWxHLrYHNb+zGbOLq9rZ1JRrdMykG3hetWIxMksqozuUiGchmYgubhBqdbDM3tQ1tlkCqWPBQSfIamtOBiKpdh6bEu3meXjlAC+SihsjmtIBNt1zbyQ6GN8gcWguzvYX4Y5jFWX5E3Siuif/AM54V7TH9KVnf3RqTt9sVihipYhN2UQKleyWzsGUE5pGvbUkeiFOnGl6MSr3cXih5zu/uEmYfCnX5S8JaWKTkyFT5ob/AIN8KTq5NNKHkaxwyU6KipXQNd+NpuMbi9ztxPFZx7Qxa8MbIR0eOBh7SEU/GpMW8WNXi2GceMUiH3iUj4VDorjayduTirHaJonZxjwuORVvDvbOPpMMhHWObX9V4wP2qnQb3RnvwzoehVG9xjdqWqxYX0Ooq5ukZhnY+CUk/wAP0jv26w7j8gqRtLb+F/KcPi4EcZJSs8hGSPs5FETM1zZ2B7M5lB0isT6IFdKrlc0SurIwurAqR4EWNNm4W1jNAYZTefDERuebLb5qTjwZfirUvNKZjrkWPWPz3qBohSNDWkkHfbP4tl3FNFc03swz7M2hHtOBbxyNaVRYemRZh5ONfvJqfSrpdQ9rbOTEwvDKLpILHqDxBH2gQCD1AqEcmo66rewOFlVY75WsCkaMiyys4vkQICn6TMwy+GmtUMvy1Nc5cALci2JIPuEOnvrl2OwrQyPE/fjZkNgdSDa4HQ8R4EVshwDHVjlHQWJ9p4D4+daeulWwNK6bF8tLX9LAC3MriST7jCL++rnZ/wAsuz3NphNAerKJF/2ize9RXIkwUY9UHxPpH3mt40rn5FM0otnbrwXeYcTszaVir4XEsLEao0i9CPXQ+6ou1t34sPE8qYvEwKgLG8omTQcxiVkKrpyItrXD5UVtGUN5gH8a3YnGSGMpJNM0XEo0srJ/plrfCuFzXZhR/pXD9rvZPW4G9OKxuIlWTszDGpYEIVe7PaLN6RGqhyQANVp9pZ3B2D+SYb0lyyyntHHNbiyp/lW1/tFqZqzpCC46uSZYLBFVW28XlXIOLcfAfzqfisQI1LHlwHU8hSBtLeWFJ+zmfKxFy5vkVj3VLcFOXXW2lutcY0uOC64gZrXOFeXM4MhRrRwi3o5bXkcMQM3AhjwBXLqdZZxkl7DDSeZeAL7T2ha3kp8qrsdvRENILTv9k+gPvSaj2C58OdL+MxM0300xI+pHeNPbY5mH3mNXW39eCGxud+3rn6KXt/aBmP5OGDKjXmYd0uNViXqFNi3iAOoqFXkcYUAKAAOAAsK9oKcjjDAivVNtRxrysJXyi/HgABxJJsAPEmw9tCmTbFWiTdqVXktmf2H5se0i/ktudXOycP2k0SWvmdFPkWF/heq3Z+G7NLHvH0mPVj+4CwHgBTXuFhO0xYblGrP7e4Pi1/ZVIGs8NG9NveY4XPOYHX3xuuqUUUVsXXjrJb36wPa4ViBrERIPIXDfskn2Vy2u5SxhgQRcEEEdQeNcZ2xgDh5pIj6psD1U6g+4ikKtliHL0Gh5rsdGdmI8eh5qHRRXhpNbC9rRicSqWFizt3UUXZvIdOpNgOZoVpJLdkLA69qwOSx4FBoZPMWXx5VPwOASK5F2du87as3meQ6KLAchRcDNJT1Yb2WYn0Hz3DDfuVd2eLPCKFfvzMT7ljt8axw74vCzri8sTBAVlSJnLSRHUgBlALKfSGo1BHOr6ioiQg3sEhJNI9uq53L4Ttg8UkqLJGwZHAZWHAgi4rfXPNi7TGz5cjm2Eme9zww8rH9mFz7FY8ga6HUu5VNN81yrffYZ/tIsoHz8YkBJsMyWjkt45eyP+Y+NaYNgqO+xPgNB/Gui7wbHXFIovkkjbPE9r5WsVNx6ylSQR0OliAQnYoTQG2IgkX7catNEfEOguo++q03HJdoCui/GMHdfxktEezol4Rr7Rm/GpKxKOCgewVFG0kPcWZz0jgmf/tS1T8LszGTdzD9kv18QwHtWKMlj5MUqRNs0x+WMZEeGPJRcU8aKWkyhRzIHPgB1J4AcTVnu3uuHkXEzQiNVs0URWzX4iSUciOKpy4nWwW42TuzFARLKxmmXXtJAAqaa9kg9GMcddWtxY1G2RAmLjbETxrIJnZ4hIoYLD3YcoYejmQCQ87yG/gtLOGtwS0khkwA662JorFmAFzoBVM2xYLWVDH+ieSH3GJltWjGbLmItHintp6EoEq6fa0kv4lyOdjSzZmHPBRLXDYq7erboRC9i1vRiQcXc90DxPwANc7TMATKsmdiWdmilUFjx1ZbWGgHgBTTjI3jm7TGqI8noxMDmhFwAzCQgWdibemFNtADqTYqbi41HUVf+YAWaoscWm/P+dvLvSPDOjdxla31SDb3cK2U1Y3Z8Uo+cjVvEjUeTDVT4g0t7Rwaxdm0cjNHI5SzHNYhXYFX4svoEa348amyQOV7Z8bEddd600UUVNMIrfsqHtH7Q9xCQvi/Bj5Lqo8S3QVEZWdhEhszak/UT1m8+Q8T4GmGCFUUIosqgADoBUXmwVsLNZ1zkOf1n32WyuifJxgMsLynjI1h91Lj/ALiw9lc/w0LSMqILsSFA8SbCuzbOwiwxJEvBFC+dhqfMnX21ZSMu/W3JbS02rEI9ruQ++SmUUUVoLzqKSflE2TmRcQo1T0W+4T6J9hP7XhTtWmaFXUqwBVgQQeBBFiDUJGB7S0q6nnMMgkGzltXD6uN14oZGkSSNWdCjqWGYZW0BAOmYMrcBpdetVu82Ekws7RdhK6jVHBiAZDw7zg3HA6cQeVqg7N2i8WJgmaMxrmMLlmQnJKVA7pIsJBGb34XrHkY6xG3vXpp3tkh1m5Z5G1vLq1lcyysJGSW4l1JB9YX7yfWTUcOFwDYi1ZU07Q2fHOuSVAwvccQVNrXRhqjanUEGqOfdmQfQ4k2+rNGJLDoGRkb2tmNLiRp4clllpChUVsfY+NHdXDOPGWWM+7sm/GouHlJLq65JI2yOt72awYWPrKVZWB6HkbgTBByUThms5YwylWAKsCCDqCDxBFe7pbwHDu2EnJ7FXEUEzG9iY0dYpDy0cBWPG1jyrKoOyIFlTE5wGSWaQEEaEIqQke+M1dFtByUXDG4XS6KSNlbcbBkRYpy2HJCxztqY+QSc/V5CT2N1p2BvqKkRZTBuvb0UVF2hjkhQvIbDgAASzMeCoo1ZjwAGpqIC6SqvegmUJg1P09+1I5YdbdrryL3WMffYju1ZKLaDQCoGy8M93mmFpZbXGh7NFv2cYI45QSSebM5GhAFhSczg52HXWXgpxiwuiiiiqlNBpb2zs7CrcLBGJG1LIoQ+ZKWuasdu7ajwyZndVPLMQAPP+HOkibbzyEmGF3v+clPZL5gEFz+qKvhjccR8KBGsdUC581NGzouaBvvEv/3E0v7XxHazG3ciui+L/nD7LBPCz9allMU/fxIQfVhjA/bkzH4CoUW7cIFmMr/elf8A4kU4zA3cevFXR0kgNyB5/F/5xWnLWEr24Akk2VRxY8gP60AJ4CpQ3Ywn9wvteQ/i1bodgwIQUV1I5rLKP+XDwqzXZx8vtMCCY5geZP8A5HNbdlYDslJaxkfVyOHgq/ZHAe086nVWyYpoT84c8Z9ewzJ99V4r9oDTmOdXGycMcS6JCQ3aHRgbi3NrjkBc1Wbk3zv10E00saLZW9OPW3imv5O9lZpGxDDRLqni5HpH2A2/zeFdFqHs3BLDEkScEFvM8yfEm59tTK1Io9Rtl5WrqPzyl+zZ3dYooooqxLIooooQqLefYoxUWUWEi3MbePQ/ZP8AA8q5FtLA5lkhkBUkMjA8QeHvBrvVKO+W7Xbjtoh86o1H94B/yHLrw6WVqIS7ttzWro6sEf6Un7Tlwv7FLe523/yiMRykDExALKl9TbQSL1RtDccCbUw1zHG4FXILZkkQnK6EpIh4GzDUeR0qz2dvXiILLi07aP8Avol9McPpIh3ud2TpwrHkhvizy+PjNPyU74+I37fH55J7pU3khyYqKQcJkaNvvx+nH+w036opi2dtCKdBJDIsiHgym48j0PgdaqN+IicOrro0UsLA2vYM4ic28Ekeqo7h9vBLPxbfxVTiZxGjOxsqAsfIC5rbuxgGEMMbaORmfwZyZJP2maqHaWzlAV8RLJIiyRls2VUVc4N8iAAi9rlr2XMdONdJ2TgsgzN3m+A6U+ywbff7fyqBi7Hrqy0YvYatfIdDoVbUH+Xvqlg2HisNphZWRP7pgJoRr6ilg0Y8FYDwq7x+3443MSK0844xRAMy9O0YkJEPvsL8r1DOCxGI1xMnZp/cQMwHlJNYO/koQcjmqJl1B2uvD5XbB2XXj8KoxG0toO5hSaNpBowghVezP+LJI8ix/dyluimrXYuwBExmmkefEG/zkhJyA8ViB+jXrbj5WAtcLhkjUJGioi6BVAUDyArbSsk5dgMBzVrYwDc/wiiiqTbm8SQHs0HazWv2YNgoPAyt6i+8nkDrVLWlxsFZwCtsViUiQvI6oi6lmIAHmTShtDeySX0cImRf76VSCf0cRsfa9vI1V4gvM4kxD9ow1UAWjT9Glzr9o3bxA0rOmmQtGePJNx0l8ZPL7+PNRkwa5+0ctJKeMkhzN/l5IPBQBUmiir061oaLAWCKKxY2qpxeNzkqp0HvPnXWtJUXyBgxUqfaAGi6+PL+dQZcSzcT7BoK1V4TVoaAlXPc7NerXYfk63RGCRpmQLPOAXH1F4hbcM3Nj1sNbXqp+Trc4gri8StjxijI4dHYdfqjlx42t0ym4YyO0VjVtQHfpt2Z/HyiiiimFnIooooQiiiihCKKKKEJP3s3TE15YQBJ6y8BJ/B/Hnz61zuSMqSrAgg2IIsQehB4V3SqDeHduLFDN3JANHA+Dj1h8RSk1Nrdpua1qLSX47Ml/bsO0fXJcw3cwCsZuxIixUbdorgsBIkl2UTqNJV7QSLrcqALEaU041PyvByKAUaWJ1sbZkcqVsbesr6ac1pdxuGl2diY5ZVsgJjdhqhici7A/YYIxvqFDaa06gW4Vjzgsd14+uPWDUrG65LTcHHvv0R4Kj3YVJ8OJSoYSqLgi4yMgJBB5HMbiomG7cM2Bw8p7GOwabXtIFIBECMbiSSx0c6opF7nKTjgpHjEuEia0pmlytYWiibLJnsdDlSREA5sVvpmsxYDBpCgjjFlXqbkkm7MxOrMSSSTqSSa5rlpJG3q/t9JcN1revx8owOCjhQRxIEUch15kk6sx4knU86kUUt7U3tjS64cCZhoWzZYlPD0pNcx4+igOosctVBrnnDEq4DYAmSqjaG8uGhYo0mZ17yRguy8/Ty6R6fWIpPxmInm1mnkYH1Iz2CeVlIYjwdmqLDgVAAKqFGoiUWQHqR65vzPhpfWr2QDNx668OKZbSvOeHXW/mr3Gb1POtsOjwqb3kkCZyP8JVLAA/XPsBvmFVFCEFlHMk6kkk6ksTqzE8SdTWyir2tDRYJuKFseWe9FFFFdVqKKKiT4Y8UYg9Lm38q6uEkZC6l1hLEraMoYeIB/Gqx5pU439wI99TNlLiMRII4Y+0bnYWAHVjeyjxNS1DsVRnYB2sO9YPsuM+qR91nHwBt8Ketzvk+VGWfEZjbVImsQDyaQWvfot9OeugYN2d1Ew4Ektnm6juqfsX4n7R18qaadhgIxf5LEra5juxCLbza3l8+SKKKKaWSiiiihCKKKKEIooooQiiiihCKKKKEKNjMJHMjRyorowsysAQR4g1TnYHZoEhY2UWUOSxAHdGY6tYWGpubannTDRVUsLJRZwVkcrmG7SufzrFgy8mIkSN5LZnkKx3C6Kq3PcW9gBfiTqSSa3F72RC4hR5m6gFE8LvIBdfFA3lXSsVhUkXLIiuvRgCPjSztLcaCTWNmjPTvr7mN/caz36Osbg39OvTgtCCriOEtx3Y/J9FzXaGIxGJuJ5QEP5mIWS3Ry1zLp1AHMAVikCrwGvUkk26XOtqasZuNik7mSUfZbKfc1h8TVLidkTx9+CRfHI1v1gLVAsc3C1ltQvpyP0yPPH1UOivLjpXtRBTRBCKwlfKCelZ1W7UnGiXHU/uH9eFdAuVB7tVt1s2ZNcFTxGvv/AJ/jU6q/ZmzcQ7KYoJXHVY3It52sKc8FuTin7wSMfbYX9y3+NqsMbicBdLsqY2Ns9wFuKXK2YeBpGCorMx4BQSfcKf8AZ+4UK6yu0h6D0F9upb4imfB4GKFcsUaoPsgC/meZ86tZSPP7sEpNpaJv+mNY+Q+eSRtjbiu1mxLZB9RSCx8zwX2X9lPGztnRQJkijVB4DierHix8TU2inI4msyWNUVcs57Zw3bOuJuiiiirEsiiiihCKKKKEIooooQiiiihCKKKKEIooooQiiiihCKKKKEIoooroXCqDefh7K5vtLjRRSVUt3RS04HiKf91e9/XhRRUaXNS0rkE3UUUU+VghFFFFcQiiiihCKKKKEIooooQiiiihCKKKKEL/2Q=="
                                        alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0 ">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Vitaly Friedman
                                    </p>
                                </div>
                                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 py-2">
                                    "What an incredible resource
                                    you've created! Thank you so much for putting together UX Tools! It's absolutely
                                    fantastic!
                                    Just wanted to send you warm hugs for your quality work 😄."</p>
                            </div>
                            <br>
                            <div class=" max-w-sm pl-4 pr-4 py-4 bg-white  rounded-lg  ">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full"
                                        src="data:image/jpeg;base64,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"
                                        alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Neil Sims
                                    </p>
                                </div>
                                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-justify">Go to this step
                                    by
                                    step guideline
                                    process on how to certify for your weekly benefits:</p>
                            </div>
                        </div>
                    </div>
                    <div class="basis-1/3 py-8   pr-10">
                        <div class="flex flex-col">
                            <div class="max-w-sm pl-4 py-4 pr-2  bg-white rounded-lg ">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full"
                                        src="data:image/jpeg;base64,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"
                                        alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0 ">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Vitaly Friedman
                                    </p>
                                </div>
                                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 py-2">"What an incredible
                                    resource
                                    you've created! Thank you so much for putting together UX Tools! It's absolutely
                                    fantastic!
                                    Just wanted to send you warm hugs for your quality work 😄."</p>
                            </div>
                            <br>
                            <div class=" max-w-sm pl-4 py-4 pr-2 bg-white  rounded-lg  ">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full"
                                        src="data:image/jpeg;base64,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"
                                        alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Neil Sims
                                    </p>
                                </div>
                                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">"Really enjoying all the
                                    quality
                                    work you guys have been putting out—from the website, articles and this channel. Feeling
                                    lucky since I'm pivoting from frontend dev to product design. Cannot wait for more!"</p>
                            </div>
                        </div>
                    </div>



                    <div class="basis-1/3 pr-20">
                        <div class="flex flex-col">
                            <div class="max-w-sm pl-4 py-4 pr-2  bg-white  rounded-lg ">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full"
                                        src="data:image/jpeg;base64,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" />
                                    alt="Neil image"/>
                                </div>
                                <div class="flex-1 min-w-0 ">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white text-justify">
                                        Chaithanya Reddy
                                    </p>
                                </div>
                                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 py-2">"The value you are
                                    providing
                                    through your website, newsletter and Instagram is absolutely incredible. I have learnt
                                    so
                                    much from you guys. Thank you so much for everything that you are doing."</p>
                            </div>
                            <br>
                            <div class=" max-w-sm pl-4 py-4 pr-4 bg-white rounded-lg  ">
                                <div class="flex-shrink-0">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Neil Sims
                                    </p>
                                </div>
                                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-justify">Go to this step
                                    by
                                    step guideline
                                    process on how to certify for your weekly benefits:</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="rounded-lg border-2 mt-20 border-gray-300 p-2 ml-72 mr-64 mb-10">
                    <img src="img/image5.png" alt="" width="3990">

                    <h1 class="font-bold font-sora text-5xl pl-32 pt-4 pb-8">
                        Contactez-nous
                    </h1>
                    <form action="#" class=" pl-32 mr-24  pr-16">
                        <div class="mb-6">

                            <input type="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Your email" required>
                        </div>
                        <div class="mb-6">

                            <input type="text" id="subject"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Subject" required>
                        </div>
                        <div class="mb-6">

                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Your message..."></textarea>
                        </div>
                        <button type="submit" style="background-color: #F18700"
                            class=" text-white p-8  hover:bg-amber-500 w-full focus:ring-8 focus:ring-amber-500 font-medium rounded-lg text-sm  ">Envoyer
                        </button>
                    </form>
                </div>

            </div>
        </div>
        </div>
    </div>
@endsection
