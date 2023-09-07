@extends('layouts')


@section('content')
    <div class=" pt-32 pr-24 pl-32 bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90%">
        <h1 class="text-gray-500 pb-4 text-2xl font-bold">
            Nos Albums
        </h1>

        <div class="grid grid-cols-2 gap-2">
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
            <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
            </div>

            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
            </div>
        </div>

        <div class=" pt-48 pb-10">
            <h1 data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="500" class="mb-24 text-3xl text-center font-bold tracking-tight text-gray-900">
                REJOIGNEZ-NOUS
            </h1>

            <div data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="600" class="flex flex-row justify-between  leading-normal bg-center">
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
