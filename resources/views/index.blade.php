@extends('layouts')


@section('content')
    <section>
        {{-- <div class=" pl-20 pb-5 bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90% sm:pl-2 pb-2 md:pl-4 ">
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
                    <video  class="w-full rounded)lg" muted autoplay controls>

                        <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div> --}}
        <div class=" pl-16 pb-5 bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90%  ">
            <div class="grid gap-8 md:grid-cols-2 md:items-center md:right pt-16 container pb-8">
                <div data-aos="zoom-out-left" data-aos-duration="1500" data-aos-delay="500" class=" lg:pt-12 sm:pl-8 md:pl-8 ">
                    <h1 class="text-6xl px-12  font-medium text-slate-600 tracking-tight  ">
                        LE <span class="text-orange ">VITIB </span> VOUS
                    </h1>
                    <h1 class="text-6xl px-12 font-medium pt-8 text-slate-600  ">
                        SOUHAITE LA
                    </h1>
                    <h1 class="text-6xl px-12 font-medium pt-8 text-slate-600  ">
                        BIENVENUE
                    </h1>
                    <p class="text-2xl font-medium px-12 text-slate-600  pt-8">
                        Le parc Technologique de Côte d'Ivoire
                    </p>
                    <div class=" pt-8 px-12  ">

                        <button type="button" style="background-color: #F18700"
                            class=" pl-16 pr-16 pt-4 pb-4 font-medium rounded-none  white text-center  ">
                            REJOIGNEZ NOUS
                        </button>
                    </div>
                </div>
                <div data-aos="zoom-out-right" data-aos-duration="1500" data-aos-delay="1000" class=" pr-24  bg-no-repeat"
                    style="background-image: url(img/Image9.png); background-size:cover">
                    <div
                        class="videoWrapper flex justify-center items-center  rounded-lg border-solid border-4 border-gray-300  ">
                        <span class="absolute  flex h-20 w-20">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" style="color: white"
                                    class=" relative inline-flex rounded-full h-16 w-16 pl-2 bg-amber-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                </svg>
                            </span>
                        </span>
                        <video class="md:w-full md:rounded-lg" muted autoplay controls>

                            <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">

                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </section>

    <div class=" bg-white md:flex flex-row  ">
        <div class=" basis-1/6 pl-36 ">
            <div class="rounded-none-4 blue text-white h-40   ">
                <h3 class=" text-lg pt-16 pl-4 mr-10">Nos <br> partenaires</h3>
            </div>
        </div>
        <div class=" basis-5/6  ">
        <div class=" md:flex flex-row relative overflow-x-hidden">
            <div class="basis-1/6 pl-8 pt-8 animate-marquee whitespace-nowrap">
                <img class="h-auto max-w-full rounded-lg" src="https://www.afi-global.org/wp-content/uploads/2021/02/Cote-d-Ivoire-e1614067202586.png" alt="">
            </div>
            <div class="basis-1/6 pl-8  animate-marquee whitespace-nowrap">
                <img src="https://www.umoatitres.org/wp-content/uploads/2018/03/logo_boad.jpg" alt="">
            </div>
            <div class="basis-1/6 pl-8 pt-10 animate-marquee whitespace-nowrap">
                <img src="data:image/png;base64,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" alt="">
            </div>
            <div class="basis-1/6 pl-8 pt-10 animate-marquee whitespace-nowrap">
                <img src="https://globalprimenews.com/wp-content/uploads/2020/09/IMG-20200929-WA0060.jpg" alt="">
            </div>
            <div class="basis-1/6 pl-8   animate-marquee whitespace-nowrap">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBMVFBMTERMRFBcVFBkZGBcYFB0bGhMXGxcYGRogGhoaICwkGxwpIBkYJDckKDoxMjI4HCI6PUU9PC0xMi8BCwsLDw4PHRERHTIpIyU8Oj08MTExLzEyMTEvMjExMTE8MTExMTExMTEvMTExMTQzMTExMTE0MTExMTExMTExMf/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABQYDBAcCAf/EAEAQAAICAQMCBAMFBAgEBwAAAAECAAMRBBIhBTETIkFRBjJhFCNCcYFSc5GzBzNicoKDobEWJENjFTRTkpOiwf/EABoBAQADAQEBAAAAAAAAAAAAAAABAgMEBQb/xAAuEQACAgECAwcCBwEAAAAAAAAAAQIDESExBBJBEyJRYXGBkTLBBRQjM6Gx0VL/2gAMAwEAAhEDEQA/AOzREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAPk87hnGecZx9JoW9TVLRVYroWAKuQNj5OMAg5BBIHIHce4mv10shpvrzmt9rL+3W4wV/MsEx9QJVySTfgTg2up6s1IHCFxuUMAcMAx2gqDwxyRxx3/AEO3TaHVWU5VgCD7gjIMjOsXB6a2Q5R3rOfpncv8WCj9Zg6Nqimkdnxuq8VmA5xy1i/ptZZl236nJ5ZJ5dMkh0jWG2veRjNlgH91bXVf4qFP6xdr1W6unGS6sc5+XAyM/nh//aZofCw21vX+xZtH5bE//czT6A/i6h3bJKqLAT6+JkJj6KgK/rI7bKjjqTy7+RZncDkkDkDn3JwP9SBPcgHu8bV1opOyje5weHsA8Pn3Clzj6qfYSX1eqStS1jBVH+v0AHJP0E2Uk9UVwbMTFTYGVWAI3AHB7jIzz9ZlliBERAEREAREQBERAEREAREQBERAERMF2oRPndF4J8zAcDuefQQDNEhdR1zRNuqbU1DeCpxZt77Rw47Hzrgg/l2OKr1nqmtos+zB7CF81TFQz3opVlyyHOcjacjBBbPz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" alt="">
            </div>
            <div class="basis-1/6 pl-8 pt-12 animate-marquee whitespace-nowrap">
                <img src="img/logo/image5.png" alt="">
            </div>
        </div>
        </div>

    </div>
    <hr>
    </div>
    <div class="bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
        <section class="">
            <div class="  pl-20 pt-24 sm:pl-2 md:pl-4 pt-8 ">
                <div class=" bg-no-repeat " style="background-image: url(img/background/font_logo.png)">
                    <div data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="500"
                        class="grid gap-8 md:grid-cols-1  md:right  ">
                        <div>
                            <h1 class=" text-center text-3xl font-bold text-slate-600  sm:p-2 lg:p-6">INNOVEZ AU COEUR
                                DE
                                L'AFRIQUE
                            </h1>
                        </div>
                        <div class=" tracking-tight">
                            <p
                                class="md:text-center text-justify sm:text-center md:text-lg md:lg:pl-72 lg:pr-80 md:sm:pl-2 sm:pr-8 md:pl-4 md:pr-8 ">
                                Bienvenue au VITIB - Village des
                                Technoloies de
                                l'Information et de la Biotechnologie, un centre d'excellence dédié à l'innvovation et
                                au
                                développement technologique en Côte D'Ivoire. Situé au coeur de l'Afrique, en Côte
                                d'Ivoire,
                                le
                                VITIB est une zonz franche technologique qui offre un environnement propice à la
                                croissance
                                des
                                entreprises technologiques. </p>
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <div class=" basis-1/2 text-right pt-4  ">
                            <a href="/about"
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
            </div>

            <div class="md:pl-32 md:pr-32  bg-no-repeat">
                <div class="md:flex flex-row pt-16 " style="background-image: url(img/Image8.png)">
                    <div data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500"
                        class="md:basis-1/2 md:pl-24 px-5 ">
                        <h1 class="md:text-4xl  font-bold  tracking-tight   ">
                            DECOUVREZ 8 AVANTAGES UNIQUE AU VITIB
                        </h1>
                        <p class="md:text-center md:text-lg text-justify md:tracking-tight pt-8 md:pr-16">
                            Le VITIB offre un écosystème favorable et attractif pour les entreprises technologiques qui
                            cherchent à développer leurs activités en Afrique de l'Ouest.
                            En combinant avantages fiscaux, infrastructures modernes, accès à un marché en pleine
                            croissance
                            et
                            soutien gouvernemental,
                            le VITIB se positionne comme un choix stratégique pour les entreprises qui souhaitent
                            prospérer
                            dans
                            le secteur technologique en Côte d'Ivoire.
                        </p>

                        <div class="flex flex-row">
                            <div class=" basis-1/2 text-center pt-8 ">
                                <a href="/about"
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
                    <div data-aos="fade-left" data-aos-duration="1500" data-aos-delay="500" class="basis-1/2 pr-16 ">
                        <div class="flex flex-row">
                            <div class="basis-1/2 ">
                                <div class="flex flex-col  ml-10 ">
                                    <div data-aos="zoom-in-right" class="rounded-lg border-2 border-gray-700 p-2 ">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                            </svg>

                                        </div>
                                        <p class="pl-4 pb-2 mr-0 text-lg">
                                            Partenariats et réseautage
                                        </p>

                                    </div>
                                    <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                        <div class="px-3 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
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
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                            </svg>

                                        </div>
                                        <p class="pl-4 pb-2 mr-0 text-lg">
                                            Avantages douaniers
                                        </p>

                                    </div>
                                    <div class="rounded-lg border-2 border-gray-700 p-2 mt-4 ">
                                        <div class="px-3 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
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
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
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
                <div class="flex flex-col text-center pb-20 pt-20">
                    <h1 class="text-5xl font-bold text-slate-600 pb-8 " data-aos="fade-in" data-aos-duration="1500"
                        data-aos-delay="800">
                        LE PARCOURS DE NOS FUTURS MEMBRES
                    </h1>
                    {{-- <img src="img/background/Parcours.svg" alt=""> --}}
                    <div class="py-20 ">
                        <div
                            class="flex flex-col md:flex-row flex-wrap items-center justify-center space-y-4 md:space-y-0">
                            <div data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="300"
                                class="flex items-center md:mx-6 lg:mx-10">
                                <div
                                    class="inline-flex w-7 h-7 mr-4 justify-center items-center rounded-full bg-gradient-to-br from-purple-500 via-red-500 to-purple-700 text-sm font-bold ">
                                    <p class="text-white">
                                        1
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-base  ">Cliquer sur le bouton</span>
                                    <span class="text-xs font-bold " style=" color:#F18700">REJOIGNEZ-NOUS</span>
                                </div>

                            </div>

                            <div data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="400"
                                class="flex items-center md:mx-6 lg:mx-10">
                                <div
                                    class="inline-flex w-7 h-7 mr-4 justify-center items-center rounded-full bg-gray-600 text-sm  text-white font-bold ">
                                    2</div>
                                <div class="flex flex-col">
                                    <span class=" font-base  ">Connectez vous ou </span>
                                    <span class="font-base  "> créer un nouveau compte</span>
                                </div>
                            </div>

                            <div data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="600"
                                class="flex items-center md:mx-6 lg:mx-10">
                                <div
                                    class="inline-flex w-7 h-7 mr-4 justify-center items-center rounded-full bg-gray-600 text-sm text-white font-bold ">
                                    3</div>
                                <div class="flex flex-col">
                                    <span class="font-base pl-4"> Renseignez les champs</span>
                                    <span class="font-base ">avec vos informations</span>
                                </div>
                            </div>

                            <div data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="700"
                                class="flex items-center md:mx-6 lg:mx-10">
                                <div
                                    class="inline-flex w-7 h-7 mr-4 justify-center items-center rounded-full bg-gray-600 text-sm text-white font-bold ">
                                    4</div>
                                <div class="flex flex-col">
                                    <span class="font-base  ">Et enfin </span>
                                    <span class="font-base "> Valider la demande</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" pt-8 text-center">
                        <a href="/installer">
                            <button type="button" style="background-color: #F18700"
                                class="font-bold rounded-none  white text-center pl-16 pt-4 pb-4 pr-16   ">
                                REJOIGNEZ NOUS
                            </button>
                        </a>
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

            <div class="md:pl-32 md:pr-32  bg-no-repeat"
                style="background-image: url(img/background/vert.png);background-size:cover">
                <div class="md:pl-24 md:pr-16 px-16 ">
                    <div class="md:flex flex-row  ">
                        <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500"
                            class="md:basis-1/2 text-lg">
                            <h1 class="md:text-5xl font-bold  ">
                                Projets & Services
                            </h1>
                            <p class="pt-8 pb-8 md:text-lg">Investissez sur ses opportunités dans un lieu unique </p>
                            <div class="grid grid-col-2 grid-flow-col gap-2 pt-4 ">
                                <div class="grid grid-col-2 ">
                                    <div data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="200"
                                        class="flex items-center  rounded-lg " role="alert">
                                        <div
                                            class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                            <img src="img/icon/check.png" alt="">
                                        </div>
                                        <p class="ml-4 text-md font-normal">
                                            Immeubles à <br>
                                            bureaux
                                        </p>
                                    </div>
                                    <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500"
                                        class="flex items-center  pt-8 rounded-lg " role="alert">
                                        <div
                                            class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                            <img src="img/icon/check.png" alt="">
                                        </div>
                                        <p class="ml-4 text-md font-normal">
                                            Université
                                        </p>
                                    </div>
                                    <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="800"
                                        class="flex items-center pt-8 rounded-lg " role="alert">
                                        <div
                                            class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                            <img src="img/icon/check.png" alt="">
                                        </div>
                                        <p class="ml-4 text-md font-normal">
                                            Clinique Médicale <br>
                                            Internationale
                                        </p>
                                    </div>
                                    <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="1000"
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
                                </div>
                                <div class="grid grid-col-2 ">
                                    <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="1300"
                                        class="flex items-center  rounded-lg " role="alert">
                                        <div
                                            class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                            <img src="img/icon/check.png" alt="">
                                        </div>
                                        <p class="ml-4 text-md font-normal">
                                            Entrepôts à <br>
                                            louer
                                        </p>
                                    </div>
                                    <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="1500"
                                        class="flex items-center pt-8 rounded-lg " role="alert">
                                        <div
                                            class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                                            <img src="img/icon/check.png" alt="">
                                        </div>
                                        <p class="ml-4 text-md font-normal">
                                            Hôtels
                                        </p>
                                    </div>
                                    <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="1700"
                                        class="flex items-center pt-8 rounded-lg " role="alert">
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
                                <div class=" pt-4  ">
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
                        <div data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="1000" class="basis-1/2">
                            <div>
                                <img src="img/Image4.png " alt="">
                            </div>
                        </div>
                    </div>
                </div>


                <div data-aos-anchor-placement="bottom-center"data-aos-duration="1500" data-aos-delay="500"
                    class="md:flex flex-col  pt-20 pb-24">
                    <div class="px-30">
                        <h1 data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="500"
                            class="text-5xl text-center font-bold text-slate-600  ">
                            Des sessions d'accompagnement conçus <br> pour nos futures locataires
                        </h1>
                    </div>
                    <div class="md:pl-64 md:pr-32">
                        <p data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="800"
                            class="md:text-center text-slate-600  tmd:ext-lg pt-10  ">
                            Participez à des événements programmés conçus pour les entreprises à grande échelle.
                            Avec des programmes de développement créés pour nourrir et soutenir.
                            Et des es événementiels remplis de programmes d'information et de réflexion pour enrichir et
                            inspirer tout le monde.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 pt-16">
                        <div class="ml-10" data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="400">
                            <img class="h-auto max-w-full rounded-lg" src="img/Image2.png" alt="">
                            <h2 class="pt-8 text-2xl">
                                Programmes de formation des dirigeants
                            </h2>
                            <p class="text-justify md:pt-4">
                                Vous souhaitez passer à l'étape suivante de votre parcours de dirigeant ? Le programme
                                Elevate
                                pour
                                les leaders émergents est un cours de leadership unique en son genre, spécialement conçu
                                pour
                                les
                                leaders ambitieux au sein d'équipes très performantes.
                            </p>

                        </div>
                        <div class="md:ml-10" data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="700">
                            <img class="h-auto max-w-full rounded-lg" src="img/Image3.png" alt="">
                            <h2 class="pt-8 text-2xl">
                                Produits Technologiques
                            </h2>
                            <p class="text-justify pt-4">Produits Technologiques" est une collection diversifiée
                                d'appareils,
                                gadgets,
                                et équipements de pointe, conçue pour répondre aux besoins de la vie moderne et
                                numérique.
                                Cette
                                gamme de produits offre des solutions innovantes, pratiques et hautement performantes
                                pour
                                améliorer
                                notre quotidien, tant sur le plan professionnel que personnel.</p>

                        </div>
                        <div class="ml-10" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="1000">
                            <img class="h-auto max-w-full rounded-lg" src="img/Image1.png" alt="">
                            <h2 class="pt-8 text-2xl">
                                ScaleUP Africa meet-ups
                            </h2>
                            <p class="text-justify pt-4">
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

                <div class="md:flex flex-col bg-repeat-x " style="background-image: url('img/Image6.png')">
                    <div class="px-30 py-12">
                        <h1 class="text-4xl  pb-24 text-center font-bold text-slate-600 space " data-aos="zoom-in-up"
                            data-aos-duration="1500" data-aos-delay="500">
                            COMMENT NOUS REJOINDRE
                        </h1>

                        <div class="md:flex flex-row py-8" data-aos="zoom-in-up" data-aos-duration="1500"
                            data-aos-delay="1000">
                            <div class="basis-1/3">
                                <img class="h-auto max-w-full rounded-lg pl-4" src="img/Image7.png" alt="">
                            </div>
                            <div class="basis-1/3 pl-10">
                                <h2 class="font-bold  text-lg">
                                    TÉLÉCHARGER DOSSIER DE DEMANDE D’AGRÉMENT
                                </h2>
                                <p class="text-justify text-lg ">
                                    Une opportunité exceptionnelle au VITIB.
                                    Bénéficiez d'avantages fiscaux, d'une infrastructure de pointe et d'un écosystème
                                    dynamique
                                    propice à l'innovation. Immergez votre entreprise dans un environnement stratégique
                                    et
                                    prospère,
                                    prêt à accueillir les entreprises technologiques les plus prometteuses.
                                </p>

                                <p class="text-justify text-lg">
                                    Rejoignez-nous dès aujourd'hui et transformez l'avenir de votre entreprise au cœur
                                    de
                                    l'Afrique.
                                </p>

                            </div>
                            <div class="md:basis-1/3 pl-10 ">
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
                                            <a href="/download-pdf" class="underline hover:underline">
                                                <p class="text-lg">
                                                    Formulaire de demande
                                                    d’agrément Pépinière
                                                </p>

                                            </a>
                                        </div>
                                        <div class=" basis-1/5 ">
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
                                        <div class=" basis-1/5 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                        </div>
                                        <div class=" basis-3/5 ">
                                            <a href="/opportunity-pdf" class=" underline hover:underline">
                                                <p class="text-lg">
                                                    Consulter la liste des
                                                    opportunités
                                                    d’investissement
                                                    (investir au VITIB)
                                                </p>
                                            </a>
                                        </div>
                                        <div class=" basis-1/5 ">
                                            <a href="/opportunity-pdf" class=" underline hover:underline">
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
                                        <div class=" basis-1/5 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                        </div>
                                        <div class=" basis-3/5 ">
                                            <a href="/telecharger-pdf" class=" underline hover:underline">
                                                <p class="text-lg">
                                                    Formulaire de demande d'agrement
                                                </p>
                                            </a>
                                        </div>
                                        <div class=" basis-1/5 ">
                                            <a href="/telecharger-pdf" class=" underline hover:underline">
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
                                <div class="basis-1/3">
                                </div>

                                <div class="border-dashed px-4 border-l-2 border-gray-700">
                                    <a href="/installer">
                                        <button type="button" style="background-color: #F18700"
                                            class="font-bold  text-lg rounded-none bg-amber-500 white text-center p-4 pl-20 pr-20">
                                            REJOIGNEZ NOUS
                                        </button>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="md:flex flex-col  pt-20 pb-32">
                    {{-- <div data-aos="zoom-in-up" class="px-30 mb-20">
                        <h1 class="text-5xl text-center font-bold " data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="500">
                            Témoignages de nos clients
                        </h1>
                    </div>
                    <div
                        class="md:flex flex-row pl-20 pr-20">
                        <div class="md:basis-1/3 pr-8 " data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="800">
                            <div class="md:flex flex-col">
                                <div class="max-w-sm pl-4 py-4 pr-2  bg-white rounded-lg ">
                                    <div class="flex-shrink-0">
                                        <img class="w-12 h-10 rounded-full"
                                            src="https://media.istockphoto.com/id/1178748441/video/what-a-cool-guy.jpg?s=640x640&k=20&c=AIm_Gh4V4yIfRLyot4rKybDmigpobUBs1JAcQgfd9z0=" alt="profile image">
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
                                        <img class="w-12 h-10 rounded-full"
                                        src="https://media.istockphoto.com/id/1178748441/video/what-a-cool-guy.jpg?s=640x640&k=20&c=AIm_Gh4V4yIfRLyot4rKybDmigpobUBs1JAcQgfd9z0=" alt="profile image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Neil Sims
                                        </p>
                                    </div>
                                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-justify">Go to
                                        this step by
                                        step guideline
                                        process on how to certify for your weekly benefits:</p>
                                </div>
                            </div>
                        </div>
                        <div class="md:basis-1/3 pt-24  pr-8" data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="1200">
                            <div class="flex flex-col">
                                <div class="max-w-sm pl-4 py-4 pr-2  bg-white rounded-lg ">
                                    <div class="flex-shrink-0">
                                        <img class="w-12 h-12 rounded-full"
                                            src="https://t4.ftcdn.net/jpg/03/98/85/77/360_F_398857704_n44BPhqM68Xk9vT31BeFkLQwWsgeZS6C.jpg" alt="profile image">
                                    </div>
                                    <div class="flex-1 min-w-0 ">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Vitaly Friedman
                                        </p>
                                    </div>
                                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 py-2">"What an
                                        incredible
                                        resource
                                        you've created! Thank you so much for putting together UX Tools! It's absolutely
                                        fantastic!
                                        Just wanted to send you warm hugs for your quality work 😄."</p>
                                </div>
                                <br>
                                <div class=" max-w-sm pl-4 py-4 pr-2 bg-white  rounded-lg  ">
                                    <div class="flex-shrink-0">
                                        <img class="w-12 h-12 rounded-full"
                                            src="https://t4.ftcdn.net/jpg/03/98/85/77/360_F_398857704_n44BPhqM68Xk9vT31BeFkLQwWsgeZS6C.jpg" alt="profile image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Neil Sims
                                        </p>
                                    </div>
                                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">"Really enjoying all
                                        the
                                        quality
                                        work you guys have been putting out—from the website, articles and this channel.
                                        Feeling
                                        lucky since I'm pivoting from frontend dev to product design. Cannot wait for
                                        more!"
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="md:basis-1/3 pr-8 " data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="1700">
                            <div class="flex flex-col">
                                <div class="max-w-sm pl-4 py-4 pr-2  bg-white  rounded-lg ">
                                    <div class="flex-shrink-0">
                                        <img class="w-12 h-12 rounded-full"
                                            src="https://media.istockphoto.com/id/1386479313/photo/happy-millennial-afro-american-business-woman-posing-isolated-on-white.webp?b=1&s=170667a&w=0&k=20&c=ahypUC_KTc95VOsBkzLFZiCQ0VJwewfrSV43BOrLETM=" alt="profile image">
                                    </div>
                                    <div class="flex-1 min-w-0 ">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white text-justify">
                                            Chaithanya Reddy
                                        </p>
                                    </div>
                                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 py-2">"The value you
                                        are
                                        providing
                                        through your website, newsletter and Instagram is absolutely incredible. I have
                                        learnt
                                        so
                                        much from you guys. Thank you so much for everything that you are doing."</p>
                                </div>
                                <br>
                                <div class=" max-w-sm pl-4 py-4 pr-4 bg-white rounded-lg  ">
                                    <div class="flex-shrink-0">
                                        <img class="w-12 h-12 rounded-full"
                                        src="https://media.istockphoto.com/id/1386479313/photo/happy-millennial-afro-american-business-woman-posing-isolated-on-white.webp?b=1&s=170667a&w=0&k=20&c=ahypUC_KTc95VOsBkzLFZiCQ0VJwewfrSV43BOrLETM=" alt="profile image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Neil Sims
                                        </p>
                                    </div>
                                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-justify">Go to
                                        this step by step guideline
                                        process on how to certify for your weekly benefits:</p>
                                </div>
                            </div>

                        </div>
                    </div> --}}

                    <div data-aos="zoom-in-up" data-aos-duration="1500"
                        data-aos-delay="500"class="rounded-lg border-2 mt-20 border-gray-300 p-2 md:ml-72 md:mr-64 mb-10">
                        <img src="img/Image5.png" alt="" width="3990">

                        <h1 class="font-bold font-sora md:text-5xl pl-40 pt-4 pb-8">
                            Contactez-nous
                        </h1>
                        <form action="#" class=" md:pl-40 md:mr-24 pb-10  md:pr-16">
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
                                class=" text-white p-8 mt-10 hover:bg-amber-500 w-full focus:ring-8 focus:ring-amber-500 font-medium text-sm  ">Envoyer
                            </button>
                        </form>
                    </div>

                </div>
            </div>
    </div>
    </section>
@endsection
