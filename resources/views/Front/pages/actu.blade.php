@extends('layouts')


@section('content')
<div class="p-8 md:p-24 bg-gradient-to-r from-orange-100 via-gray-100 to-gray-100">
    <h1 class="text-gray-500 pb-4 text-2xl md:text-3xl lg:text-4xl font-bold">
        Actualités récentes
    </h1>

    <div data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="500" class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="md:col-span-2">
            <div class="videoWrapper flex justify-center items-center rounded-lg border-solid border-4 border-gray-300">
                <video autoplay loop muted class="custom-video" poster="videos/792bd98f3e617786c850493560e11c45.png">
                    <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay"></div>
            </div>
            <h1 class="text-2xl pt-4 text-gray-500">
                <strong>
                    L'essor de l'économie des petits boulots sonne la fin pour ces travailleurs de l'ancien système
                </strong>
            </h1>
        </div>
        <div class="md:col">
        <div class="md:h-auto md:relative">
            <div class="md:absolute md:inset-0 rounded-lg" style="background-image: url('img/page_6/carousel_petit.png'); background-size: cover;"></div>
            <div class="mx-auto max-w-screen-xl text-center md:text-left md:pt-32 lg:pt-32">
                <p class="text-lg pl-4 md:text-lg lg:text-lg lg:pl-8 lg:pr-4 pb-16 tracking-tight leading-none text-white">
                    <strong>Opportunité d'emploi:</strong><br>numérique, marketing
                </p>
            </div>
        </div>
        <div class="md:h-auto md:relative">
            <div class="md:absolute md:inset-0 rounded-lg" style="background-image: url('img/page_6/karaoke.png'); background-size: cover;"></div>
            <div class="text-center md:text-left md:pt-32 lg:pt-32 pb-4">
                <p class="text-sm pb-16 font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-lg lg:pl-8 lg:pr-4">
                    Qu'est-il arrivé à la nouvelle vidéo virale ?
                </p>
            </div>
        </div>
        </div>
    </div>


        <div data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="500" class="md:mx-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 pt-24 ">
            <div class="  h-auto bg-no-repeat max-w-full rounded-lg" style="background-image: url('img/page_6/image3.png')">
                <div class="mx-auto max-w-screen-xl text-center md:text-center pt-24 md:pt-64">
                    <p class="text-lg font-extrabold tracking-tight leading-none text-white md:text-2xl lg:text-lg">
                        Pépinière
                        <br>
                        d'entreprises
                    </p>
                </div>
            </div>
            <div class="h-auto bg-no-repeat max-w-full rounded-lg" style="background-image: url('img/page_6/image4.png')">
                <div class="mx-auto max-w-screen-xl text-center md:text-center pt-24 md:pt-64">
                    <p class="text-lg font-extrabold tracking-tight leading-none text-white md:text-2xl lg:text-lg">
                        Produits
                        <br> technologiques
                    </p>
                </div>
            </div>
            <div class="h-auto bg-no-repeat max-w-full rounded-lg" style="background-image: url('img/page_6/image2.png')">
                <div class="mx-auto max-w-screen-xl text-center md:text-center pt-24 md:pt-64">
                    <p class="text-lg font-extrabold tracking-tight leading-none text-white md:text-2xl lg:text-lg">
                        Hebergements
                        <br>d'entreprises
                    </p>
                </div>
            </div>
            <div class="h-auto bg-no-repeat max-w-full rounded-lg" style="background-image: url('img/page_6/image5.png')">
                <div class="mx-auto max-w-screen-xl text-center md:text-center pb-20 pt-24 md:pt-64">
                    <p class="text-lg font-extrabold tracking-tight leading-none text-white md:text-2xl lg:text-lg">
                        Hebergements
                       <br>d'entreprises
                    </p>
                </div>
            </div>
        </div>



    </div>
    <div class="md:pt-16 pb-6 md:pb-10 bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90% ">
    <div class=" max-w-full md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl mx-auto px-4 md:px-24 ">

        <h1 data-aos="zoom-up" data-aos-duration="700" data-aos-delay="500" class="mb-6 md:mb-10 text-2xl md:text-3xl text-center font-bold tracking-tight text-gray-900">
            REJOIGNEZ-NOUS
        </h1>

        <div data-aos="zoom-up" data-aos-duration="1000" data-aos-delay="600"
                    class="flex flex-col sm:flex-row justify-center sm:justify-between leading-normal bg-center">
                    <div class="w-full sm:w-1/2 mb-8 sm:mb-0 sm:pl-8 md:pl-24 ">
                        <img class="h-64 sm:h-72 max-w-full ml-4" src="img/join.png" alt="image description">
                    </div>
                    <div class="w-full sm:w-1/2 sm:mr-8 md:mr-16 lg:mr-48 px-6 ">
                        <p class="font-normal text-justify text-gray-700 tracking-tight  pt-10 md:pt-0">
                            Nous sommes fiers d'accueillir des entreprises innovantes qui transforment l'avenir de la Côte
                            d'Ivoire et de l'Afrique. Rejoignez-nous au VITIB et devenez acteur d'un écosystème florissant,
                            propice à l'épanouissement de votre entreprise. Contactez-nous dès aujourd'hui pour découvrir
                            comment vous pouvez vous implantez et prospérer au sein de notre zone franche technologique.
                            Ensemble, innovons au cœur de l'Afrique.
                        </p>
                        <div class="pt-4  ">
                            <button type="button" style="background-color: #F18700"
                                class="font-bold rounded-none text-white text-center p-3 sm:p-4 md:p-5 lg:pl-12  lg:pr-12">
                                REJOIGNEZ-NOUS
                            </button>
                        </div>
                    </div>
                </div>
    </div>
</div>
    @endsection
