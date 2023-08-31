@extends('layouts')


@section('content')
    <div class=" pt-32 pr-24 pl-32 bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90%">
        <h1 class="text-gray-500 pb-4 text-2xl font-bold">
            Recherche
        </h1>
        <div class="grid grid-col-3 grid-flow-col gap-4">
            <div class="row-span-3 col-span-2 ">
                <div
                    class="videoWrapper flex justify-center items-center  rounded-lg border-solid border-4 border-gray-300  ">
                    <video autoplay="" loop="" muted="" class="custom-video"
                        poster="videos/792bd98f3e617786c850493560e11c45.png">

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
            <div class=" rounded-lg"
                    style="background-image: url('img/page_6/carousel_petit.png'); background-size:cover; ">
                    <div class=" mx-auto max-w-screen-xl text-left pt-32 lg:pt-32 ">
                        <p class=" text-lg  pl-8 pb-16 tracking-tight leading-none white md:text-lg lg:text-lg lg:pl-8 lg:p-8">
                           <strong> Opportunité d'emploi:</strong>
                            <br> numérique, marketing
                        </p>
                    </div>
            </div>
                <div class="h-auto bg-no-repeat max-w-full rounded-lg"
                style="background-image: url('img/page_6/karaoke.png');background-size:cover; ">
                <div class="   text-left pt-32 lg:pt-32">
                    <p class=" text-sm  pb-16 font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-lg lg:p-8">
                        Qu'est-il arrivé à la nouvelle <br>vidéo virale ?
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-col-2 grid-flow-col gap-2 pt-24 ">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="img/page_6/image1.png" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="img/page_6/image1.png" alt="">
            </div>
        </div>
        <div class="grid grid-col-4 grid-flow-col gap-4 pt-16">
            <div class="h-auto bg-no-repeat max-w-full rounded-lg"
                    style="background-image: url('img/page_6/image2.png')">
                    <div class=" mx-auto max-w-screen-xl text-left pt-64 lg:pt-64">
                        <p class=" text-lg font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-lg">
                            Pépinière
                            <br>
                            d'entreprises
                        </p>
                    </div>
                </div>
                <div class="h-auto bg-no-repeat max-w-full rounded-lg"
                    style="background-image: url('img/slider/tech.png')">
                    <div class=" mx-auto max-w-screen-xl text-left pt-64 lg:pt-64">
                        <p class=" text-4xl font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-lg">
                            Produits
                            <br> technologiques
                        </p>
                    </div>
                </div>
                <div class="h-auto bg-no-repeat max-w-full rounded-lg"
                    style="background-image: url('img/slider/immeuble.png')">
                    <div class=" mx-auto max-w-screen-xl text-left pt-64 lg:pt-64">
                        <p class=" text-4xl font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-lg">
                            Hebergements
                            <br> d'entreprises
                        </p>
                    </div>
                </div>
                <div class="h-auto bg-no-repeat max-w-full rounded-lg"
                    style="background-image: url('img/slider/immeuble.png')">
                    <div class=" mx-auto max-w-screen-xl text-left pt-64 lg:pt-64">
                        <p class=" text-4xl font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-lg">
                            Hebergements
                            <br> d'entreprises
                        </p>
                    </div>
                </div>
        </div>
        <div class=" pt-48 pb-10">
            <h1 class="mb-24 text-3xl text-center font-bold tracking-tight text-gray-900">
                REJOIGNEZ-NOUS
            </h1>

            <div class="flex flex-row justify-between  leading-normal bg-center">
                <div class="basis-1/2 pl-48">
                    <img class="h-72  max-w-lg mx-auto  " src="img/join.png" alt="image description">
                </div>
                <div class="basis-1/2  mr-48">
                    <p class="font-normal text-justify  text-gray-700 tracking-tight pt-10  ">
                        Nous sommes fiers d'accueillir des entreprises innovantes qui transforment l'avenir de la Côte
                        d'Ivoire et de l'Afrique. Rejoignez-nous au VITIB et devenez acteur d'un écosystème florissant,
                        propice à l'épanouissement de votre entreprise. Contactez-nous dès aujourd'hui pour découvrir
                        comment vous pouvez vous implantez et prospérer au sein de notre zone franche technologique.
                        Ensemble, innovons au cœur de l'Afrique.
                    </p>
                    <div class="pt-10">
                        <button type="button" style="background-color: #F18700"
                            class="font-bold rounded-none  white text-center p-4  pl-20 pr-20">
                            REJOIGNEZ NOUS
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @endsection
