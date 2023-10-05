@extends('layouts')


@section('content')
<section class="bg-center bg-no-repeat  bg-blend-multiply" style="background-image: url(img/page_5/annonce.png)">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-16 md:pt-20  lg:py-0">
        <h1 data-aos="zoom-in" data-aos-duration="500"data-aos-delay="700"
            class=" text-4xl font-extrabold uppercase tracking-tight leading-none text-white md:pt-8 pt-10 lg:pb-8 lg:pt-32 xl:text-5xl lg:text-6xl ">
            <p>Projets, Services</p>
            <p class="pt-8 ">& Opportunités</p>
        </h1>
    </div>
</section>



    <div class="pt-16 xl:pt-32 md:pt-16 xl:pr-26 bg-gradient-to-r from-orange-100 from-20% to-green-100 to-90%">
        <div class="xl:flex flex-col xl:flex-row xl:pl-32 xl:pr-16 pb-10 px-6 md:ml-6 ">
            <div class="xl:w-1/2  ">
                <img data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" src="img/plan.png" alt="">
            </div>

            <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="800" class="xl:w-1/2 ">
                <h1 class="xl:text-4xl md:text-4xl text-3xl xl:pr-16 pt-4 font-bold tracking-tight">
                    UN LIEU PENSÉ POUR VOS BESOINS.
                </h1>
                <h3 class="pt-8 font-bold xl:text-lg">
                    #1 Zone Franche de la Biotechnologie : 624 hectares
                </h3>
                <p class="pt-4 xl:pt-8 xl:text-lg">
                    La phase 1 de développement est divisée en 3 sous-zones principales
                </p>
                <div class="flex items-center pt-4 rounded-lg" role="alert">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="ml-3 xl:text-lg font-normal">Zone Franche avec accès restreint.</div>
                </div>
                <div class="flex items-center pb-4 xl:pb-0 xl:rounded-lg" role="alert">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="ml-3 xl:text-lg font-normal">Cette zone accueillera les industries de la biotechnologie, les industries d'assemblage et les immeubles de bureaux.</div>
                </div>
                <div class="flex items-center pb-4 xl:pb-0 xl:rounded-lg" role="alert">
                    <div class="inline-flex items-center flex-shrink-0 w-8 h-8 text-green-500 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <p class="ml-3 xl:text-lg font-normal">
                        Zone résidentielle prévue hors des limites de la Zone Franche
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div style="overflow-x: hidden" class=" bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90% ">
        <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="800" class=" xl:py-10  lg:pb-10 md:px-4 px-4 lg:pr-0  xl:px-24 grid xl:grid-cols-5 md:grid-cols-2  grid-cols-2 gap-2 xl:gap-4   ">
            <div class="bg-amber-500 font-extrabold rounded-lg p-4 " style=" height:100px ">
                <p class="text-white text-center  ">
                    <strong> ADMINISTRATION
                        <br>ZONE</strong>
                </p>
            </div>
            <div class="bg-green-500 rounded-lg p-4 ">
                <p class="text-white text-center  ">
                    PRODUCTION ZONE
                    <br class="hidden xl:hidden">
                    <strong>(Assembly Industries)</strong>
                </p>

            </div>
            <div class="bg-orange-200 rounded-lg pt-2" style=" height:100px ">
                <p class="text-white text-center  ">
                    PRODUCTION ZONE

                    <strong>(Biotechnology Industries)</strong>
                </p>
            </div>

            <div class="bg-yellow-300 rounded-lg p-4">
                <p class="text-white text-center  ">
                    PRODUCTION ZONE
                    <br>
                    <strong>(Offices)</strong>
                </p>
            </div>

            <div class="bg-purple-300 font-extrabold rounded-lg p-4">
                <p class="text-white text-center  ">
                    <strong> FURTURE
                        <br>DEVELOPMENT</strong>
                </p>
            </div>
            <div class="bg-amber-800 font-extrabold rounded-lg p-4">
                <p class="text-white text-center  ">
                    <strong> LOGISTIQUE
                        <br>ZONE</strong>
                </p>
            </div>
            <div class="bg-pink-300 font-extrabold rounded-lg p-4">
                <p class="text-white text-center  ">
                    <strong> RESIDENTIAL
                        <br>ZONE</strong>
                </p>
            </div>

            <div class="bg-slate-700 font-extrabold rounded-lg p-4">
                <p class="text-white text-center  ">
                    <strong> BUS STATION</strong>
                </p>
            </div>
            <div class="bg-green-400 font-extrabold rounded-lg p-4">
                <p class="text-white text-center  ">
                    <strong> GREEN
                        ZONE</strong>
                </p>
            </div>
            <div class="bg-gray-400 font-extrabold rounded-lg p-4">
                <p class="text-white text-center  ">
                    <strong> UTILITY
                    </strong>
                </p>
            </div>
        </div>

    </div>
    <div class="bg-gradient-to-r from-gray-100 from-20%  to-orange-100 to-90%">
        <div class="  max-w-full xl:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl mx-auto px-4 xl:px-16  pt-16  ">

            <h1 data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="1000" class="mb-24 text-4xl xl:text-5xl md:text-4xl text-center font-bold tracking-tight text-gray-900">
                INVESTISSEZ SUR CES PROJETS D'AVENIR
            </h1>

            <div class=" grid grid-cols-1 xl:grid-cols-2 gap-2 md:px-2">
                <div data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="700">
                    <img class="h-auto max-w-full rounded-lg  xl:pr-10 md:pl-12 xl:pl-0 xl:pl-0" src="img/city.png" alt="">
                    <div class="md:px-12 md:py-4 xl:px-0 xl:py-0">
                    <h5 class="mb-2 text-2xl pt-4  font-bold tracking-tight text-gray-900 dark:text-white">
                        Entrepôts à louer
                    </h5>
                    <p class="text-justify   xl:pr-10 md:pr-10  ">
                        Ce projet vise à créer des infrastructures de type entrepôts, pouvant abriter les chaines d’assemblage
                        de divers produits TIC, ainsi que des espaces de stockage complémentaires pour des industriels et des
                        usagers de la ZBTIC.
                    </p>
                </div>
                </div>
                <div data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="700" class="">
                    <img class="h-auto max-w-full rounded-lg md:pl-12 xl:pl-0 " src="img/immeuble.png" alt="">
                    <div class="md:px-12 md:py-4 xl:px-0 xl:py-0">
                    <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                        Immeubles à bureaux
                    </h5>
                    <p class="text-justify pb-20  xl:pr-0 md:pr-6  ">
                        Cette zone inclut une zone économique TIC-soft, ayant pour objet l’hébergement des entreprises œuvrant
                        dans le secteur des TIC. Les infrastructures d’accueil de ce type d’entreprises répond à des standards
                        internationaux, en vue de répondre aux exigences des multinationales (Microsoft, Oracle, Apple, Google)
                        attendues dans le parc technologique de la zone franche. Ce sont un total de plus de 20 000 employés qui
                        sont attendus dans la zone.
                    </p>
                    </div>
                </div>
                <div data-aos="zoom-in-up" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="700">
                    <img class="h-auto max-w-full rounded-lg  md:pl-12 xl:pl-0  xl:pr-10" src="img/Picture9.png" alt="">
                    <div class="md:px-12 md:py-4 xl:px-0 xl:py-0">
                    <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                        Promotion Immobilière Bloc A
                    </h5>
                    <p class="text-justify   xl:pr-10 md:pr-10">
                        Cette promotion immobilière doit prendre en compte un compte un programme spécifique d’habitants
                        réalisées à titre gracieux pour VITIB S.A. Le reste de la parcelle (80%) pourra être commercialisé. 2 Ce
                        projet doit inclure à la fois des habitations collectives de moyen et haut standing (appartements) et
                        des habitations pavillonnaires (villas).
                    </p>
                    </div>
                </div>
                <div data-aos="zoom-in-up"data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="700">
                    <img class="h-auto max-w-full rounded-lg  md:pl-12 xl:pl-0  " src="img/universite.png" alt="">
                    <div class="md:px-12 md:py-4 xl:px-0 xl:py-0">
                    <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                        Université
                    </h5>
                    <p class="text-justify  pb-20 xl:pr-0 md:pr-6   ">
                        Le Village de l’Innovation Technologique a pour vocation d’être le centre de la réflexion technologique
                        en Afrique de l’Ouest. La création d’un établissement académique de niveau universitaire permettra de
                        former les scientifiques et les managers de demain. L’établissement tirera avantage de la proximité des
                        entreprises installées au sein de la zone économique spéciale.</p>
                </div>
                </div>
                <div data-aos="zoom-in-down "data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="700">
                    <img class="h-auto max-w-full rounded-lg  md:pl-12 xl:pl-0  xl:pr-10" src="img/hotel.png" alt="">
                    <div class="md:px-12 md:py-4 xl:px-0 xl:py-0">
                    <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                        Hôtels d’affaires
                    </h5>
                    <p class="text-justify   xl:pr-10 md:pr-10">
                        Voisin du futur centre des Congrès du parc technologique, cet hôtel d’affaires offrira une solution
                        d’hébergement aux différents experts, cadres et visiteurs des sociétés en opération sur le site de la
                        ZBTIC.
                    </p>
                    </div>
                </div>
                <div data-aos="zoom-in-up" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="700">
                    <img class="h-auto max-w-full rounded-lg  md:pl-12 xl:pl-0  " src="img/immobilier.png" alt="">
                    <div class="md:px-12 md:py-4 xl:px-0 xl:py-0">
                    <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                        Immeubles à bureaux
                    </h5>
                    <p class="text-justify pb-20 xl:pr-0 md:pr-6  ">
                        Cette zone inclut une zone économique TIC-soft, ayant pour objet l’hébergement des entreprises œuvrant
                        dans le secteur des TIC. Les infrastructures d’accueil de ce type d’entreprises répond à des standards
                        internationaux, en vue de répondre aux exigences des multinationales (Microsoft, Oracle, Apple, Google)
                        attendues dans le parc technologique de la zone franche. Ce sont un total de plus de 20 000 employés qui
                        sont attendus dans la zone.
                    </p>
                    </div>
                </div>
                <div data-aos="zoom-in-down"data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="700">
                    <img class="h-auto max-w-full rounded-lg  md:pl-12 xl:pl-0  xl:pr-10" src="img/centre.png" alt="">
                    <div class="md:px-12 md:py-4 xl:px-0 xl:py-0">
                    <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                        Entrepôts à louer
                    </h5>
                    <p class="text-justify    xl:pr-10 md:pr-10">
                        Ce projet vise à créer des infrastructures de type entrepôts, pouvant abriter les chaines d’assemblage
                        de divers produits TIC, ainsi que des espaces de stockage complémentaires pour des industriels et des
                        usagers de la ZBTIC.
                    </p>
                    </div>
                </div>
                <div data-aos="zoom-in-up" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="700">
                    <img class="h-auto max-w-full rounded-lg  md:pl-12 xl:pl-0  " src="img/centre_cultu.png" alt="">
                    <div class="md:px-12 md:py-4 xl:px-0 xl:py-0">
                    <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                        Immeubles à bureaux
                    </h5>
                    <p data-aos="zoom-in-right" class="text-justify pb-20   xl:pr-0 md:pr-6 ">
                        Cette zone inclut une zone économique TIC-soft, ayant pour objet l’hébergement des entreprises œuvrant
                        dans le secteur des TIC. Les infrastructures d’accueil de ce type d’entreprises répond à des standards
                        internationaux, en vue de répondre aux exigences des multinationales (Microsoft, Oracle, Apple, Google)
                        attendues dans le parc technologique de la zone franche. Ce sont un total de plus de 20 000 employés qui
                        sont attendus dans la zone.
                    </p>
                    </div>
                </div>
                <div data-aos="zoom-in-up"data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="700">
                    <img class="h-auto max-w-full rounded-lg  md:pl-12 xl:pl-0 xl:pl-0  xl:pr-10 " src="img/centre_commer.png" alt="">
                    <div class="md:px-12 md:py-4 xl:px-0 xl:py-0">
                    <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                        Entrepôts à louer
                    </h5>
                    <p class="text-justify    xl:pr-10 md:pr-10">
                        Ce projet vise à créer des infrastructures de type entrepôts, pouvant abriter les chaines d’assemblage
                        de divers produits TIC, ainsi que des espaces de stockage complémentaires pour des industriels et des
                        usagers de la ZBTIC.
                    </p>
                    </div>
                </div>
                <div data-aos="zoom-in-down"data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="700">
                    <img class="h-auto max-w-full rounded-lg  md:pl-12 xl:pl-0 xl:pl-0 xl:pl-0 " src="img/clinique.png" alt="">
                    <div class="md:px-12 md:py-4 xl:px-0 xl:py-0">
                    <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                        Clinique médicale internationale
                    </h5>
                    <p class="text-justify   xl:pr-0 md:pr-6 ">
                        Une clinique médicale de stature internationale correspondant aux standards internationaux, vise à
                        offrir à minima des services de médecine générale et des services spécialisés à la clientèle et aux
                        travailleurs de la ZBTIC.
                    </p>
                </div>
                </div>
            </div>
            <div class="pt-32">
                <h1 data-aos="zoom-out" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="700" class="mb-20 text-3xl text-center font-bold tracking-tight text-gray-900">
                    NOS SERVICES
                </h1>
                <div data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="500"
            class="  md:px-0 grid grid-cols-1 xl:grid-cols-4 md:grid-cols-2 md:gap-2 pt-24 md:py-8 xl:pt-4 ">
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

            <div class="pt-16 pb-8 sm:pt-32 xl:pt-48 lg:pt-64">
                <h1 data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="500"
                    class="mb-8 sm:mb-16 text-2xl sm:text-3xl xl:text-4xl lg:text-4xl text-center font-bold tracking-tight text-gray-900">
                    REJOIGNEZ-NOUS
                </h1>

                <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="600"
                    class="flex flex-col sm:flex-row justify-center sm:justify-between leading-normal bg-center">
                    <div class="w-full sm:w-1/2 mb-8 sm:mb-0 sm:pl-8 xl:pl-48  ">
                        <img class="sm:h-auto md:h-auto xl:h-auto max-w-full lg:pt-4 " src="img/join.png" alt="image description">
                    </div>
                    <div class="w-full sm:w-1/2  xl:mr-24  md:pl-2 lg:px-0">
                        <p class="font-normal text-justify text-gray-700 tracking-tight md:pt-0 pt-10 xl:pt-0">
                            Nous sommes fiers d'accueillir des entreprises innovantes qui transforment l'avenir de la Côte
                            d'Ivoire et de l'Afrique. Rejoignez-nous au VITIB et devenez acteur d'un écosystème florissant,
                            propice à l'épanouissement de votre entreprise. Contactez-nous dès aujourd'hui pour découvrir
                            comment vous pouvez vous implantez et prospérer au sein de notre zone franche technologique.
                            Ensemble, innovons au cœur de l'Afrique.
                        </p>
                        <div class="pt-2 sm:pt-2 ">
                            <button type="button" style="background-color: #F18700"
                                class="font-bold rounded-none text-white text-center p-3 sm:p-4 xl:p-5 lg:pl-12  lg:pr-12">
                                REJOIGNEZ-NOUS
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>
@endsection
