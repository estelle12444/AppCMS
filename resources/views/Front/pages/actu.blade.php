@extends('layouts')


@section('content')
    <div class="p-8 xl:p-24 bg-gradient-to-r from-orange-100 via-gray-100 to-gray-100">
        <h1 class="text-gray-500 md:py-8 py-8 text-2xl xl:text-4xl md:text-4xl font-bold">
            Actualités récentes
        </h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            <!-- Colonne 1 : Vidéo -->
            <div class="lg:col-span-2">
                <div class="videoWrapper flex justify-center items-center rounded-lg border-solid border-4 border-gray-300">
                    <video autoplay loop muted class="custom-video" poster="videos/792bd98f3e617786c850493560e11c45.png">
                        <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="overlay"></div>
                </div>
                <h1 class="text-lg lg:text-2xl pt-4 text-gray-500 text-center">
                    <strong>
                        L'essor de l'économie des petits boulots sonne la fin pour ces travailleurs de l'ancien système
                    </strong>
                </h1>
            </div>

            <!-- Colonne 2 : Images 1 et 2 avec texte superposé -->
            <div class="lg:col relative">
                <!-- Image 1 -->
                <div class="relative bg-no-repeat mb-4"
                    style="background-image: url('img/page_6/carousel_petit.png'); background-size: cover; height: 0; padding-bottom: 55%;"></div>
                <!-- Texte 1 -->
                <div class="absolute inset-0 flex items-center justify-center text-white text-center">
                    <p class="text-lg font-bold tracking-tight leading-none mb-48 md:mb-96 lg:mb-72 md:text-2xl">
                        <strong>Opportunité d'emploi:</strong><br>numérique, marketing
                    </p>
                </div>

                <!-- Image 2 -->
                <div class="relative bg-no-repeat"
                    style="background-image: url('img/page_6/karaoke.png'); background-size: cover; height: 0; padding-bottom: 55%;"></div>
                <!-- Texte 2 -->
                <div class="absolute inset-0 flex items-center justify-center text-white text-center">
                    <p class="text-lg font-bold tracking-tight leading-none mt-48 px-2 lg:mt-36 md:mt-96 md:text-2xl ">
                        Qu'est-il arrivé à la nouvelle vidéo virale ?
                    </p>
                </div>
            </div>
        </div>

        <div data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="500"
            class="  md:px-0 grid grid-cols-1 xl:grid-cols-4 md:grid-cols-2 md:gap-2 pt-24 md:py-8 xl:pt-16 ">
            <div class="  h-auto xl:bg-no-repeat max-w-full rounded-lg" style="background-image: url('img/page_6/image3.png');background-size: cover;">
                <div class="mx-auto max-w-screen-xl text-center xl:text-center pb-4 pt-24 md: pr-0 xl:pt-64">
                    <p class="xl:text-lg font-extrabold tracking-tight leading-none text-white xl:text-2xl lg:text-lg">
                        Pépinière
                        <br>
                        d'entreprises
                    </p>
                </div>
            </div>
            <div class="h-auto bg-no-repeat max-w-full rounded-lg" style="background-image: url('img/page_6/image4.png');background-size: cover;">
                <div class="mx-auto max-w-screen-xl text-center xl:text-center pb-4 pt-24 xl:pt-64">
                    <p class="xl:text-lg font-extrabold tracking-tight leading-none text-white xl:text-2xl lg:text-lg">
                        Produits
                        <br> technologiques
                    </p>
                </div>
            </div>
            <div class="h-auto bg-no-repeat max-w-full rounded-lg" style="background-image: url('img/page_6/image2.png');background-size: cover;">
                <div class="mx-auto max-w-screen-xl text-center xl:text-center pb-4 pt-24 xl:pt-64">
                    <p class="xl:text-lg font-extrabold tracking-tight leading-none text-white xl:text-2xl lg:text-lg">
                        Hebergements
                        <br>d'entreprises
                    </p>
                </div>
            </div>
            <div class="h-auto bg-no-repeat max-w-full rounded-lg" style="background-image: url('img/page_6/image5.png');background-size: cover;">
                <div class="mx-auto max-w-screen-xl text-center xl:text-center pb-4 pt-24 xl:pt-64">
                    <p class="xl:text-lg font-extrabold tracking-tight leading-none text-white xl:text-2xl lg:text-lg">
                        Hebergements
                        <br>d'entreprises
                    </p>
                </div>
            </div>
        </div>



    </div>
    <div class="px-4 md:px-6 xl:px-32 bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90%">
    <div class="md:pt-24 py-20 pb-6 md:pb-10  ">
        <div class=" max-w-full md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl mx-auto  xl:px-24 md:px-0 ">

            <h1 data-aos="zoom-up" data-aos-duration="700" data-aos-delay="500"
                class="mb-6 md:mb-10 text-2xl md:text-3xl text-center font-bold tracking-tight text-gray-900">
                REJOIGNEZ-NOUS
            </h1>

            <div data-aos="zoom-up" data-aos-duration="500" data-aos-delay="600"
                class="flex flex-col sm:flex-row justify-center sm:justify-between leading-normal bg-center">
                <div class="w-full sm:w-1/2 mb-2   xl:pl-24 lg:px-4  ">
                    <img class=" sm:h-auto md:h-auto xl:h-auto max-w-full lg:pt-4 " src="img/join.png" alt="image description">
                </div>
                <div class="w-full sm:w-1/2  xl:mr-24  md:pl-2 lg:px-0 ">
                    <p class="font-normal text-justify text-gray-700 tracking-tight  pt-10 lg:pt-4 md:pt-0">
                        Nous sommes fiers d'accueillir des entreprises innovantes qui transforment l'avenir de la Côte
                        d'Ivoire et de l'Afrique. <br class="xl:block hidden">Rejoignez-nous au VITIB et devenez acteur
                        d'un écosystème florissant,
                        propice à l'épanouissement de votre entreprise. Contactez-nous dès aujourd'hui pour découvrir
                        comment vous pouvez vous implantez et prospérer au sein de notre zone franche technologique.
                        <br class="xl:block hidden">Ensemble, innovons au cœur de l'Afrique.
                    </p>
                    <div class="pt-4 md:pt-2 lg:pt-4 xl:pt-6  ">
                        <a href="{{ route('login') }} ">
                            <button type="button" style="background-color: #F18700"
                                class="font-bold rounded-none text-white text-center p-4 md:p-4 lg:p-5 xl:lg-6 lg:px-12  ">
                                REJOIGNEZ-NOUS
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
