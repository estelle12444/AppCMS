@extends('layouts')


@section('content')
    <section style="overflow-x: hidden">
        <div class="bg-gradient-to-r from-orange-100 via-gray-100 to-gray-100">
            <div class=" md:px-28 pt-16 md:grid md:grid-cols-2 md:gap-8 md:items-center pb-8">
                <div data-aos="zoom-out-left" data-aos-delay="700" data-aos-delay="500"
                    class="px-8 md:pt-12 sm:px-8 md:px-8 text-center md:text-left">
                    <h1 class="text-4xl md:text-6xl font-medium text-slate-600 tracking-tight">
                        LE <span class="text-orange">VITIB</span> VOUS
                    </h1>
                    <h1 class="text-4xl md:text-6xl font-medium pt-4 md:pt-8 text-slate-600">
                        SOUHAITE LA
                    </h1>
                    <h1 class="text-4xl md:text-6xl font-medium pt-4 md:pt-8 text-slate-600">
                        BIENVENUE
                    </h1>
                    <p class="text-xl md:text-2xl font-medium pt-4 md:pt-8 text-slate-600">
                        Le parc Technologique de Côte d'Ivoire
                    </p>
                    <div class="py-8 md:pt-8">
                        <a href="{{ route('login') }} ">
                        <button type="button" style="background-color: #F18700"
                            class="px-8 md:px-16 py-2 md:py-4 font-medium rounded-none text-white text-center">
                            REJOIGNEZ-NOUS
                        </button>
                    </a>
                    </div>
                </div>

                <div data-aos="zoom-out-right" data-aos-delay="700" data-aos-delay="800"
                    class="md:pr-24 bg-no-repeat bg-cover bg-center" style="background-image: url(img/Image9.png);">
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
                        <video class="w-full rounded-lg" muted autoplay controls>
                            <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>

    </section>

    <div style="overflow-x: hidden" class="bg-white flex flex-col md:flex-row  md:px-36">
        <div class="w-full md:w-1/6 ">
            <div class="rounded-none-4 blue text-white h-20 md:h-full">
                <h3 class="md:text-lg text-center md:text-center md:py-10 py-2 md:px-2 font-bold">Nos<br>partenaires</h3>
            </div>
        </div>

        <div class="w-full md:w-5/6  items-center">
           <div class="flex flex-row justify-center relative overflow-x-auto md:overflow-x-hidden items-center md:my-4 my-10">
                <div class="w-1/4 md:w-1/6 md:px-auto text-center animate-marquee whitespace-nowrap">
                    <img class="  " style="height: 100px;width:100px"
                        src="img/logo/bidc.png"
                        alt="">
                </div>
                <div class="w-1/4 md:w-1/6 md:px-4 pl-4 animate-marquee whitespace-nowrap">
                    <img class=" " src="img/logo/india.png" style="height: 100px;width:100px"
                        alt="">
                </div>
                <div class="w-1/4 md:w-1/6 pl-4 animate-marquee whitespace-nowrap ">

                    <img class="" src="img/logo/armoirie-Côte-dIvoire.png" style="height: 100px;width:100px" alt="">
                </div>
                <div class="w-1/4 md:w-1/6 pl-4 animate-marquee whitespace-nowrap ">
                    <img class=" "
                        src="img/logo/boad.png" style="height: 90px;width:100px"
                        alt="">
                </div>

            </div>
        </div>
    </div>


    <hr>
    </div>
    <div class="bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
        <section  style="overflow-x: hidden" class="">
            <div class="pl-4 py-20 md:pl-20 md:pr-32 md:pt-24">
                <div class="bg-no-repeat "style="background-image: url(img/background/font_logo.png)">
                    <div data-aos="zoom-in-up" data-aos-delay="700" data-aos-delay="500">
                        <div>
                            <h1 class=" text-center font-bold text-slate-600 text-3xl md:text-5xl sm:p-2 lg:p-6">
                                INNOVEZ AU COEUR DE L'AFRIQUE
                            </h1>

                            <p class="text-center   md:text-lg  pt-4 md:pt-10">
                                Bienvenue au VITIB - Village des Technologies de l'Information

                                et de la Biotechnologie, <br class="hidden md:block">un centre d'excellence dédié à
                                l'innovation et
                                au développement technologique en Côte d'Ivoire.
                                <br class="hidden md:block"> Situé au cœur de l'Afrique,

                                en Côte d'Ivoire, le VITIB est une zone franche technologique qui <br
                                    class="hidden md:block"> offre un
                                environnement propice à la croissance des entreprises technologiques.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col-reverse sm:flex-row py-4 md:py-0">
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

            <div class="md:pl-32 md:pr-32  bg-no-repeat">

                <div class="md:flex flex-row pt-16" style="background-image: url(img/Image8.png)">
                    <div data-aos="fade-right" data-aos-delay="700" data-aos-delay="500" class="md:w-1/2 md:pl-24 px-5">
                        <h1 class=" font-bold tracking-tight text-3xl md:text-5xl">
                            DÉCOUVREZ 8 AVANTAGES UNIQUES AU VITIB
                        </h1>
                        <p
                            class="md:text-center lg:text-left md:text-lg lg:text-justify md:tracking-tight pt-4 md:pt-8 md:pr-16">
                            Le VITIB offre un écosystème favorable et attractif pour les entreprises technologiques qui
                            cherchent à développer leurs activités en Afrique de l'Ouest. En combinant avantages fiscaux,
                            infrastructures modernes, accès à un marché en pleine croissance et soutien gouvernemental, le
                            VITIB se positionne comme un choix stratégique pour les entreprises qui souhaitent prospérer
                            dans le secteur technologique en Côte d'Ivoire.
                        </p>

                        <div class="flex flex-row">
                            <div class="md:w-1/2 text-right md:text-right py-8 md:py-0 ">
                                <a href="/about"
                                    class="inline-flex items-center font-medium text-orange-400 dark:text-orange-400  hover:underline">
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
                    <div data-aos="fade-left" data-aos-delay="700" data-aos-delay="500"
                        class="md:w-1/2 pr-4 md:pr-16">
                        <div class=" md:flex flex-row">
                            <div class="md:w-1/2">
                                <div class="flex flex-col  md:ml-10">
                                    <div class="flex flex-col   px-4 ">
                                        <div data-aos="zoom-in-right" class="rounded-lg border-2 border-gray-700 p-2 ">
                                            <div class="px-3 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="  w-10 h-10">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                                </svg>
                                            </div>
                                            <p class="pl-4 pb-2 mr-0  md:text-lg">
                                                Avantages fiscaux et reglementaires
                                            </p>

                                        </div>
                                        <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                            <div class="px-3 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-10 h-10">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                                </svg>

                                            </div>
                                            <p class="pl-4 pb-2 mr-0 md:text-lg">
                                                Partenariats et réseautage
                                            </p>

                                        </div>
                                        <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                            <div class="px-3 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-10 h-10">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                                                </svg>

                                            </div>
                                            <p class="pl-4 pb-2 mr-0 md:text-lg">
                                                Soutien gouvernemental
                                            </p>

                                        </div>
                                        <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                            <div class="px-3 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="  w-10 h-10">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                                </svg>
                                            </div>
                                            <p class="pl-4 pb-2 mr-0 md:text-lg">
                                                Main d'oeuvre qualifiée
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="md:w-1/2">
                                <div class="flex flex-col py-8 md:p-6 ">
                                    <div class="md:flex flex-col py-8 p-6">
                                        <div class="rounded-lg border-2 border-gray-700 p-2 ">
                                            <div class="px-3 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-10 h-10">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                                </svg>

                                            </div>
                                            <p class="pl-4 pb-2 mr-0 md:text-lg">
                                                Avantages douaniers
                                            </p>

                                        </div>
                                        <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                            <div class="px-3 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-10 h-10">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                                                </svg>

                                            </div>
                                            <p class="pl-4 pb-2 md:text-lg">
                                                Un accès à un marché en plein essor
                                            </p>

                                        </div>
                                        <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                            <div class="px-3 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="  w-10 h-10">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                                </svg>
                                            </div>
                                            <p class="pl-4 pb-2 mr-0 md:text-lg">
                                                Environnement d'innovation
                                            </p>
                                        </div>
                                        <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                            <div class="px-3 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-10 h-10">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                                                </svg>


                                            </div>
                                            <p class="pl-4 pb-2 mr-0 md:text-lg">
                                                Infrastructure de pointe
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col text-center pb-10 pt-10 md:pb-20 md:pt-20">
                    <h1 class="text-3xl md:text-5xl font-bold text-slate-600 pb-4 md:pb-8" data-aos="fade-in"
                        data-aos-delay="700" data-aos-delay="800">
                        LE PARCOURS DE NOS FUTURS MEMBRES
                    </h1>
                    <div class="md:py-8 py-4 md:pt-20 md:px-24 px-6">
                        {{-- <div class="flex flex-col md:flex-row flex-wrap items-center justify-center space-y-2 md:space-y-0">
                            <div data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="400"
                            class="flex items-center md:mx-4 lg:mx-6 rounded-lg border-2 border-gray-50 p-4 bg-white ">
                                <div
                                    class="inline-flex w-5 h-5 md:w-7 h-7 mr-2 md:mr-4 justify-center items-center rounded-full bg-gray-600 text-xs md:text-sm text-white font-bold ">
                                    2
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-base  md:text-base">Connectez-vous ou</span>
                                    <span class="text-xs font-base  md:text-base">créez un nouveau compte</span>
                                </div>
                           </div>

                            <div data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="400"
                                class="flex items-center md:mx-4 lg:mx-6 rounded-lg border-2 border-gray-700 p-4 mt-4 ">
                                <div
                                    class="inline-flex w-5 h-5 md:w-7 h-7 mr-2 md:mr-4 justify-center items-center rounded-full bg-gray-600 text-xs md:text-sm text-white font-bold ">
                                    2
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-base  md:text-base">Connectez-vous ou</span>
                                    <span class="text-xs font-base  md:text-base">créez un nouveau compte</span>
                                </div>
                            </div>

                            <div data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="600"
                                class="flex items-center md:mx-4 lg:mx-6 rounded-lg border-2 border-gray-700 p-4 mt-4 ">
                                <div
                                    class="inline-flex w-5 h-5 md:w-7 h-7 mr-2 md:mr-4 justify-center items-center rounded-full bg-gray-600 text-xs md:text-sm text-white font-bold ">
                                    3
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-base pl-2  md:text-base">Renseignez les champs</span>
                                    <span class="text-xs font-base  md:text-base">avec vos informations</span>
                                </div>
                            </div>

                            <div data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="700"
                                class="flex items-center md:mx-4 lg:mx-6 rounded-lg border-2 border-gray-700 p-4 mt-4 ">
                                <div
                                    class="inline-flex w-5 h-5 md:w-7 h-7 mr-2 md:mr-4 justify-center items-center rounded-full bg-gray-600 text-xs md:text-sm text-white font-bold ">
                                    4
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-base  md:text-base">Et enfin</span>
                                    <span class="text-xs font-base  md:text-base">Valider la demande</span>
                                </div>
                            </div>
                        </div> --}}
                        <img data-aos="zoom-out-right" data-aos-delay="700" data-aos-delay="800"
                            src="img/background/Parcours.svg" alt="">
                    </div>

                    <div class="pt-4 md:pt-8 text-center">
                        <a href="{{ route('register') }}">
                            <button type="button" style="background-color: #F18700"
                                class="font-bold rounded-none white text-center px-8 md:px-16 pt-3 pb-3 md:pt-4 md:pb-4 md:pr-16">
                                REJOIGNEZ NOUS
                            </button>
                        </a>
                    </div>
                </div>


            </div>

            <div class="md:px-32 px-6  bg-no-repeat"
                style="background-image: url(img/background/vert.png);background-size:cover">
                <div class="md:pl-4 md:pr-4 px-4 sm:px-8 md:pl-24 md:pr-16 lg:px-16 ">
                    <div class="md:flex flex-row">
                        <div data-aos="zoom-in-right" data-aos-delay="700" data-aos-delay="500"
                            class="md:basis-1/2 md:text-lg">
                            <h1 class="text-3xl md:text-5xl font-bold">
                                Projets & Services
                            </h1>
                            <p class="pt-4 md:pt-8 pb-4 md:pb-8 md:text-lg">Investissez sur ses opportunités dans un lieu
                                unique</p>
                            <div class="grid grid-cols-2 md:grid-cols-2 gap-2 md:gap-2 pt-4">
                                <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="200"
                                    class="flex items-center  rounded-lg " role="alert">
                                    <div
                                        class="inline-flex items-center  flex-shrink-0 w-6 h-6 md:w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                        <img src="img/icon/check.png" alt="">
                                    </div>
                                    <p class="ml-2 md:ml-4 text-md font-normal">
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
                                        Allée <br>
                                        Commerciale
                                    </p>
                                </div>
                                <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                                class="flex items-center pt-8 rounded-lg " role="alert">
                                <div
                                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <img src="img/icon/check.png" alt="">
                                </div>
                                <p class="ml-4 text-md font-normal">
                                    Centre <br>
                                    Culturel
                                </p>
                            </div>

                            </div>

                            <div class="flex md:items-left items-center py-12 md:py-8  rounded-lg " role="alert" >
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
                        <div data-aos="zoom-in-right" data-aos-delay="700" data-aos-delay="700" class="md:basis-1/2">
                            <div>
                                <img src="img/Image4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>



                <div data-aos-anchor-placement="bottom-center" data-aos-delay="700" data-aos-delay="500"
                    class="md:flex flex-col pt-10 md:pt-20 pb-12 md:pb-24 px-6 md:px-30">
                    <div class="px-2 md:px-0">
                        <h1 data-aos="zoom-in-down" data-aos-delay="700" data-aos-delay="500"
                            class="text-3xl md:text-5xl md:text-justify lg:text-center font-bold text-slate-600">
                            Des sessions d'accompagnement conçues <br class="hidden md:block">
                            pour nos futures locataires
                        </h1>
                    </div>
                    <div class="px-0 md:px-32">
                        <p data-aos="zoom-in-right" data-aos-delay="700" data-aos-delay="800"
                            class="md:text-center text-slate-600 md:text-lg pt-4 md:pt-10">
                            Participez à des événements programmés conçus pour les entreprises à grande échelle.
                            Avec des programmes de développement créés pour nourrir et soutenir.
                            Et des événements remplis de programmes d'information et de réflexion pour enrichir et inspirer
                            tout le monde.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 pt-8 md:pt-16">
                        <div data-aos="zoom-in-right" data-aos-delay="700" data-aos-delay="400">
                            <img class="h-auto max-w-full rounded-lg mx-auto md:ml-0" src="img/Image2.png"
                                alt="">
                            <h2 class="pt-4 pb-6 md:pt-8 text-xl md:text-2xl text-center md:text-left font-semibold">
                                Programmes de formation des dirigeants
                            </h2>
                            <p class="text-justify md:pt-4">
                                Vous souhaitez passer à l'étape suivante de votre parcours de dirigeant ? Le programme
                                Elevate
                                pour
                                les leaders émergents est un cours de leadership unique en son genre, spécialement conçu
                                pour les
                                leaders ambitieux au sein d'équipes très performantes.
                            </p>
                        </div>
                        <div data-aos="zoom-in-right" data-aos-delay="700" data-aos-delay="700">
                            <img class="h-auto max-w-full rounded-lg mx-auto md:ml-0" src="img/Image3.png"
                                alt="">
                            <h2 class="pt-4 pb-6 md:pt-8 text-xl md:text-2xl text-center md:text-left font-semibold">
                                Produits Technologiques
                            </h2>
                            <p class="text-justify md:pt-4 ">
                                "Produits Technologiques" est une collection diversifiée d'appareils, gadgets,
                                et équipements de pointe, conçue pour répondre aux besoins de la vie moderne et numérique.
                                Cette
                                gamme de produits offre des solutions innovantes, pratiques et hautement performantes
                                pour
                                améliorer
                                notre quotidien, tant sur le plan professionnel que personnel.
                            </p>
                        </div>
                        <div data-aos="zoom-in-right" data-aos-delay="700" data-aos-delay="700">
                            <img class="h-auto max-w-full rounded-lg mx-auto md:ml-0" src="img/Image1.png"
                                alt="">
                            <h2 class="pt-4 pb-6 md:pt-8 text-xl md:text-2xl text-center md:text-left font-semibold">
                                ScaleUP Africa meet-ups
                            </h2>
                            <p class="text-justify md:pt-4">
                                Hébergé à Tech, ScaleUP VITIB est un réseau de pairs pour les leaders émergents. Nous
                                nous
                                réunissons en personne tous les mois et rassemblons des leaders de l'écosystème
                                technologique
                                pour
                                se connecter, partager et apprendre les uns des autres. Posez votre candidature
                                ci-dessous.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="md:flex flex-col bg-repeat-x" style="background-image: url('img/Image6.png')">
                    <div class="  md:py-12">
                        <h1 class="text-2xl md:text-4xl pb-4 md:pb-24 text-center font-bold text-slate-600 space"
                            data-aos="zoom-in-up" data-aos-delay="700" data-aos-delay="500">
                            COMMENT NOUS REJOINDRE
                        </h1>

                        <div class="md:flex flex-row py-4 md:py-8" data-aos="zoom-in-up" data-aos-delay="700"
                            data-aos-delay="700">
                            <div class="md:w-1/3">
                                <img class="h-auto max-w-full rounded-lg pl-4" src="img/Image7.png" alt="">
                            </div>
                            <div class="md:w-1/3 md:pl-8 mt-4 md:mt-0">
                                <h2 class="font-bold md:text-lg">
                                    TÉLÉCHARGER DOSSIER DE DEMANDE D’AGRÉMENT
                                </h2>
                                <p class="text-justify md:text-lg">
                                    Une opportunité exceptionnelle au VITIB.
                                    Bénéficiez d'avantages fiscaux, d'une infrastructure de pointe et d'un écosystème
                                    dynamique
                                    propice à l'innovation. Immergez votre entreprise dans un environnement stratégique
                                    et
                                    prospère,
                                    prêt à accueillir les entreprises technologiques les plus prometteuses.
                                </p>

                                <p class="text-justify md:text-lg">
                                    Rejoignez-nous dès aujourd'hui et transformez l'avenir de votre entreprise au cœur
                                    de
                                    l'Afrique.
                                </p>
                            </div>
                            <div class="md:w-1/3 md:pl-4 mt-4 md:mt-0">
                                <div class=" border-dashed border-l-2 border-gray-700">
                                    <div class="flex flex-row ml-4 pb-4 py-6">
                                        <div class="md:w-1/5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                        </div>
                                        <div class="md:w-3/5">
                                            <a href="/download-pdf" class="underline hover:underline">
                                                <p class="md:text-lg">
                                                    Formulaire de demande d’agrément Pépinière
                                                </p>
                                            </a>
                                        </div>
                                        <div class="md:w-1/5">
                                            <a href="/download-pdf" class="underline hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                                </svg>
                                            </a>
                                        </div>

                                        <div></div>
                                    </div>
                                    <div class="flex flex-row ml-4 pb-4">
                                        <div class="md:w-1/5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                        </div>
                                        <div class="md:w-3/5">
                                            <a href="/opportunity-pdf" class="underline hover:underline">
                                                <p class="md:text-lg">
                                                    Consulter la liste des opportunités d’investissement (investir au VITIB)
                                                </p>
                                            </a>
                                        </div>
                                        <div class="md:w-1/5">
                                            <a href="/opportunity-pdf" class="underline hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                                </svg>
                                            </a>
                                        </div>

                                        <div></div>
                                    </div>
                                    <div class="flex flex-row ml-4 pb-4">
                                        <div class="w-1/5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                        </div>
                                        <div class="w-3/5">
                                            <a href="/telecharger-pdf" class="underline hover:underline">
                                                <p class="md:text-lg">
                                                    Formulaire de demande d'agrement
                                                </p>
                                            </a>
                                        </div>
                                        <div class="w-1/5">
                                            <a href="/telecharger-pdf" class="underline hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                                </svg>
                                            </a>
                                        </div>

                                        <div></div>
                                    </div>
                                </div>
                                <div class=" w-auto mt-4 md:mt-0">
                                    <div class="border-dashed px-4 border-l-2 border-gray-700">
                                        <div class="pt-2 sm:pt-2 ">
                                            <a href="{{ route('login') }} ">
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
                    </div>
                </div>

                <div class="md:flex flex-col pb-10 justify-content-center">

                    <div data-aos="zoom-in-up" data-aos-delay="700" data-aos-delay="500"
                        class="rounded-lg border-2 mt-10  border-gray-300 p-2  mb-10 md:mx-72 ">

                        <img src="img/Image5.png" class="w-full" />
                        <h1
                            class="font-bold text-3xl md:text-5xl text-center md:text-center py-8 ">
                            Contactez-nous
                        </h1>
                        <form action="#" class="md:mx-28     md:mb-5">
                            <div class="mb-6">
                                <input type="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Votre email" required>
                            </div>
                            <div class="mb-6">
                                <input type="text" id="subject"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Sujet" required>
                            </div>
                            <div class="mb-6">
                                <textarea id="message" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Votre message..."></textarea>
                            </div>
                            <button type="submit" style="background-color: #F18700"
                                class="text-white p-4  mt-4 md:mt-2 hover:bg-amber-500 w-full focus:ring-8 focus:ring-amber-500 font-medium text-sm">
                                Envoyer
                            </button>
                        </form>
                    </div>
                </div>

            </div>
    </div>
    </section>
@endsection
