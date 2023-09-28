@extends('layouts')


@section('content')
    <div class="pt-16 md:pt-32 px-4 md:px-6 xl:px-32 bg-gradient-to-r from-orange-100 from-20% to-gray-100 to-90%">
        <h1 class="text-gray-500 pb-4 text-xl md:text-2xl lg:text-3xl font-bold">
            Nos Albums
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-2">
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                <img class="h-auto max-w-full rounded-lg"
                    src="img/carousel-2.jpg" alt="">
            </div>

            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                <img class="h-auto max-w-full rounded-lg"
                    src=" img/carousel-4.jpg" alt="">
            </div>
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                <img class="h-auto max-w-full rounded-lg"
                    src="img/carousel-4.jpg" alt="">
            </div>
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                <img class="h-auto max-w-full rounded-lg"
                    src="img/carousel-1.jpg" alt="">
            </div>
        </div>

        <div class="md:pt-24 py-20 pb-6 md:pb-10 bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90% ">
            <div class=" max-w-full md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl mx-auto  xl:px-24 md:px-0 ">

                <h1 data-aos="zoom-up" data-aos-duration="700" data-aos-delay="500" class="mb-6 md:mb-10 text-2xl md:text-3xl text-center font-bold tracking-tight text-gray-900">
                    REJOIGNEZ-NOUS
                </h1>

                <div data-aos="zoom-up" data-aos-duration="500" data-aos-delay="600"
                            class="flex flex-col sm:flex-row justify-center sm:justify-between leading-normal bg-center">
                            <div class="w-full sm:w-1/2 mb-2  pl-6 xl:pl-24 md:px-4  ">
                                <img class="h-64 sm:h-72 max-w-full " src="img/join.png" alt="image description">
                            </div>
                            <div class="w-full sm:w-1/2 mr-8 xl:mr-16 md:mr-0  px-4 ">
                                <p class="font-normal text-justify text-gray-700 tracking-tight  pt-10 md:pt-0">
                                    Nous sommes fiers d'accueillir des entreprises innovantes qui transforment l'avenir de la Côte
                                    d'Ivoire et de l'Afrique. Rejoignez-nous au VITIB et devenez acteur d'un écosystème florissant,
                                    propice à l'épanouissement de votre entreprise. Contactez-nous dès aujourd'hui pour découvrir
                                    comment vous pouvez vous implantez et prospérer au sein de notre zone franche technologique.
                                    Ensemble, innovons au cœur de l'Afrique.
                                </p>
                                <div class="pt-4  ">
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
@endsection
