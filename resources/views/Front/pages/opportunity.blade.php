@extends('layouts')


@section('content')
    <section class="bg-center bg-no-repeat bg-blend-multiply" style="background-image: url(img/slider/header_1.png)">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-20 lg:pb-48 lg:pt-32">
            <h1 class="uppercase mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
               <p> Projets, Services</p>
               <p class="pt-8"> & Opportunités</p></h1>
        </div>
    </section>


    <div class="   pt-32 pr-20  bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
        <div class="flex flex-row pl-32 pr-16 pb-10">
            <div class="basis-1/2 md:basis-1/2">
                <img src="img/plan.png" class="" alt="">
            </div>

            <div class="basis-1/2 md:basis-1/2">
                <h1 class=" text-5xl  pr-16 pt-4 font-bold tracking-tight ">
                    UN LIEU PENSÉ POUR VOS BESOINS.
                </h1>
                <h3 class=" pt-8 font-bold text-lg">
                    #1 Zone Franche de la Biotechnologie : 624 hectares
                </h3>
                <p class="pt-8 text-lg">
                    La phase 1 de développement est divisée en 3 sous-zones principales
                </p>
                <div class="flex items-center pt-4  rounded-lg " role="alert">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                        <img src="img/icon/check.png" alt="">

                    </div>
                    <div class="ml-3 text-lg font-normal">Zone Franche avec accès restreint.</div>

                </div>
                <div class="flex items-center pb-4 rounded-lg " role="alert">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                        <img src="img/icon/check.png" alt="">

                    </div>
                    <div class="ml-3 text-lg font-normal">Cette zone accueillera les industries de la biotechnologie,
                        les industries d'assemblage et les immeubles de bureaux.</div>

                </div>
                <div class="flex items-center  pb-4 rounded-lg " role="alert">
                    <div
                        class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-500 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                        <img src="img/icon/check.png" alt="">

                    </div>
                    <p class="ml-3 text-lg font-normal">
                        Zone résidentielle prévue hors des limites de la Zone Franche
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class=" bg-gradient-to-r from-orange-100 from-20%  to-green-100 to-90%">
        <div class="grid grid-cols-5 gap-4   pt-5 pr-32 pb-10 md:pl-20 md:pb-5 lg:pl-40 lg:pb-10">
            <div class="bg-amber-500 font-extrabold rounded-lg p-4" style=" height:100px ">
                <p class="text-white text-center  ">
                    <strong> ADMINISTRATION
                        <br>ZONE</strong>
                </p>
            </div>
            <div class="bg-green-500 rounded-lg p-4">
                <p class="text-white text-center  ">
                    PRODUCTION ZONE
                    <br>
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
    <div class=" md:container  md:mx-auto px-24 pt-16  ">

        <h1 class="mb-24 text-5xl text-center font-bold tracking-tight text-gray-900">INVESTISSEZ SUR CES PROJETS D'AVENIR
        </h1>

        <div class=" grid grid-cols-2 gap-2">
            <div>
                <img class="h-auto max-w-full rounded-lg  pr-10" src="img/city.png" alt="">
                <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                    Entrepôts à louer
                </h5>
                <p class="text-justify  pr-10">
                    Ce projet vise à créer des infrastructures de type entrepôts, pouvant abriter les chaines d’assemblage
                    de divers produits TIC, ainsi que des espaces de stockage complémentaires pour des industriels et des
                    usagers de la ZBTIC.
                </p>
            </div>
            <div class="">
                <img class="h-auto max-w-full rounded-lg " src="img/immeuble.png" alt="">
                <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                    Immeubles à bureaux
                </h5>
                <p class="text-justify pb-20  ">
                    Cette zone inclut une zone économique TIC-soft, ayant pour objet l’hébergement des entreprises œuvrant
                    dans le secteur des TIC. Les infrastructures d’accueil de ce type d’entreprises répond à des standards
                    internationaux, en vue de répondre aux exigences des multinationales (Microsoft, Oracle, Apple, Google)
                    attendues dans le parc technologique de la zone franche. Ce sont un total de plus de 20 000 employés qui
                    sont attendus dans la zone.
                </p>
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg pr-10" src="img/Picture9.png" alt="">
                <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                    Promotion Immobilière Bloc A
                </h5>
                <p class="text-justify   pr-10">
                    Cette promotion immobilière doit prendre en compte un compte un programme spécifique d’habitants
                    réalisées à titre gracieux pour VITIB S.A. Le reste de la parcelle (80%) pourra être commercialisé. 2 Ce
                    projet doit inclure à la fois des habitations collectives de moyen et haut standing (appartements) et
                    des habitations pavillonnaires (villas).
                </p>
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg " src="img/universite.png" alt="">
                <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                    Université
                </h5>
                <p class="text-justify  pb-20 ">
                    Le Village de l’Innovation Technologique a pour vocation d’être le centre de la réflexion technologique
                    en Afrique de l’Ouest. La création d’un établissement académique de niveau universitaire permettra de
                    former les scientifiques et les managers de demain. L’établissement tirera avantage de la proximité des
                    entreprises installées au sein de la zone économique spéciale.</p>
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg pr-10" src="img/hotel.png" alt="">
                <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                    Hôtels d’affaires
                </h5>
                <p class="text-justify   pr-10">
                    Voisin du futur centre des Congrès du parc technologique, cet hôtel d’affaires offrira une solution
                    d’hébergement aux différents experts, cadres et visiteurs des sociétés en opération sur le site de la
                    ZBTIC.
                </p>
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg " src="img/immobilier.png" alt="">
                <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                    Immeubles à bureaux
                </h5>
                <p class="text-justify pb-20 ">
                    Cette zone inclut une zone économique TIC-soft, ayant pour objet l’hébergement des entreprises œuvrant
                    dans le secteur des TIC. Les infrastructures d’accueil de ce type d’entreprises répond à des standards
                    internationaux, en vue de répondre aux exigences des multinationales (Microsoft, Oracle, Apple, Google)
                    attendues dans le parc technologique de la zone franche. Ce sont un total de plus de 20 000 employés qui
                    sont attendus dans la zone.
                </p>
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg pr-10" src="img/centre.png" alt="">
                <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                    Entrepôts à louer
                </h5>
                <p class="text-justify   pr-10">
                    Ce projet vise à créer des infrastructures de type entrepôts, pouvant abriter les chaines d’assemblage
                    de divers produits TIC, ainsi que des espaces de stockage complémentaires pour des industriels et des
                    usagers de la ZBTIC.
                </p>
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg " src="img/centre_cultu.png" alt="">
                <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                    Immeubles à bureaux
                </h5>
                <p class="text-justify pb-20  ">
                    Cette zone inclut une zone économique TIC-soft, ayant pour objet l’hébergement des entreprises œuvrant
                    dans le secteur des TIC. Les infrastructures d’accueil de ce type d’entreprises répond à des standards
                    internationaux, en vue de répondre aux exigences des multinationales (Microsoft, Oracle, Apple, Google)
                    attendues dans le parc technologique de la zone franche. Ce sont un total de plus de 20 000 employés qui
                    sont attendus dans la zone.
                </p>
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg pr-10" src="img/centre_commer.png" alt="">
                <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                    Entrepôts à louer
                </h5>
                <p class="text-justify   pr-10">
                    Ce projet vise à créer des infrastructures de type entrepôts, pouvant abriter les chaines d’assemblage
                    de divers produits TIC, ainsi que des espaces de stockage complémentaires pour des industriels et des
                    usagers de la ZBTIC.
                </p>
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg " src="img/clinique.png" alt="">
                <h5 class="mb-2 text-2xl pt-4 font-bold tracking-tight text-gray-900 dark:text-white">
                    Clinique médicale internationale
                </h5>
                <p class="text-justify  ">
                    Une clinique médicale de stature internationale correspondant aux standards internationaux, vise à
                    offrir à minima des services de médecine générale et des services spécialisés à la clientèle et aux
                    travailleurs de la ZBTIC.
                </p>
            </div>

        </div>
        <div class="pt-32">
            <h1 class="mb-20 text-3xl text-center font-bold tracking-tight text-gray-900">
                NOS SERVICES
            </h1>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="h-auto bg-no-repeat max-w-full rounded-lg"
                    style="background-image: url('img/slider/pepiniere.png')">
                    <div class=" mx-auto max-w-screen-xl text-left pt-64 lg:pt-64">
                        <p class=" text-3xl font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-3xl">
                            Pépinière
                            <br>
                            d'entreprises
                        </p>
                    </div>
                </div>
                <div class="h-auto bg-no-repeat max-w-full rounded-lg"
                    style="background-image: url('img/slider/tech.png')">
                    <div class=" mx-auto max-w-screen-xl text-left pt-64 lg:pt-64">
                        <p class=" text-4xl font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-3xl">
                            Produits
                            <br> technologiques
                        </p>
                    </div>
                </div>
                <div class="h-auto bg-no-repeat max-w-full rounded-lg"
                    style="background-image: url('img/slider/immeuble.png')">
                    <div class=" mx-auto max-w-screen-xl text-left pt-64 lg:pt-64">
                        <p class=" text-4xl font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-3xl">
                            Hebergements
                            <br> d'entreprises
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" pt-24 pb-10">
            <h1 class="mb-20 text-3xl text-center font-bold tracking-tight text-gray-900">
                REJOIGNEZ-NOUS
            </h1>

            <div class="flex flex-row justify-between  leading-normal bg-center">
                <div class="basis-1/2 pl-24">
                    <img class="h-72  max-w-lg mx-auto  " src="img/join.png" alt="image description">
                </div>
                <div class="basis-1/2  mr-48">
                    <p class="font-normal text-justify  text-gray-700 tracking-tight  ">
                        Nous sommes fiers d'accueillir des entreprises innovantes qui transforment l'avenir de la Côte
                        d'Ivoire et de l'Afrique. Rejoignez-nous au VITIB et devenez acteur d'un écosystème florissant,
                        propice à l'épanouissement de votre entreprise. Contactez-nous dès aujourd'hui pour découvrir
                        comment vous pouvez vous implantez et prospérer au sein de notre zone franche technologique.
                        Ensemble, innovons au cœur de l'Afrique.
                    </p>
                    <div class="pt-10">
                        <a href="/installer">
                        <button type="button" style="background-color: #F18700"
                            class="font-bold rounded-none  white text-center p-4  pl-20 pr-20">
                            REJOIGNEZ NOUS
                        </button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
