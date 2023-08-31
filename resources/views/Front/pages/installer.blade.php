@extends('layouts')


@section('content')
    <section class="bg-center bg-no-repeat  bg-blend-multiply " style="background-image: url(img/page_4/image2.png)">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-20  lg:py-48">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">COMMENT
                S'IMPLANTER</h1>
        </div>
    </section>
    <div class="bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90%">
    <div class="grid grid-cols-3 gap-3 pt-20 pr-48 pl-32 ">
        <div class="col-span-2">
            <h1 class="text-4xl font-bold text-justify pr-16 text-gray-600">
                Rejoignez-nous dès aujourd'hui et <br> transformez l'avenir de votre entreprise <br>au cœur de l'Afrique.
            </h1>
            <p class="pt-10 text-justify text-lg">
                L’État de Côte d’Ivoire permet aux entreprises nationales et internationales de faire <br>
                des affaires, de bénéficier des avantages qu’offre la loi N° 2004-429 du 30 août 2004 <br>
                instituant le Régime de ZBTIC en Côte d’Ivoire, pour créer des emplois et promouvoir <br>
                l’exportation à partir de la zone franche de la biotechnologie et des technologies de <br>
                l’information et de la communication (ZBTIC), située dans la commune de Grand- Bassam.
            </p>
        </div>
        <!-- ... -->
        <div>
            <img src="img/page_4/image4.png" alt="">
        </div>

    </div>
    <div class="grid grid-cols-3 gap-3 pt-20 pr-48 pl-32 pb-20">
        <div>
            <img src="img/page_4/image5.png" alt="">
        </div>
        <!-- ... -->
        <div class="col-span-2 pl-8">
            <h1 class="text-4xl font-bold text-justify pr-16 text-gray-600">
                Eligibilité – Pré-requis
            </h1>
            <p class="pt-4 text-justify text-lg ">
                Le bénéfice du régime de la ZBTIC est soumis à l’obtention d’un agrément délivré par l’EPE (VITIB S.A). Pour
                ce faire, les sociétés désireuses de s’implanter sur la zone franche en qualité d’Entreprises Utilisatrices
                doivent opérer dans les domaines d’activités suivants :
            </p>
            <div class="flex items-center pl-10 pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">

                </div>
                <p class="ml-4 text-lg font-normal">
                    Biotechnologie
                </p>
            </div>
            <div class="flex items-center pl-10 pt-4 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">

                </div>
                <p class="ml-4 text-lg font-normal">
                    Technologies de l’Information et de la Communication
                </p>
            </div>
            <div class="flex items-center pl-10 pt-4 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">

                </div>
                <p class="ml-4 text-lg font-normal">
                    Banques et Établissements financiers d’appui aux investissements réalisés dans
                    la Zone Franche.
                </p>
            </div>

            <p class="pt-6 text-justify text-lg ">
                VITIB offre également des opportunités d’investissements dans l’immobilier en BOO et BOT sur 180 Ha en
                aménagement, avec en vue la création d’une nouvelle ville. VITIB recherche des partenaires techniques et
                financiers en mode PPP pour le financement et la réalisation de projets urbains sur la Zone Franche de
                Grand- Bassam. Par ailleurs, une zone résidentielle et commerciale de 62 Ha est réservée pour offrir des
                solutions de logements de proximité à près de 20000 employés de la ZBTIC.
            </p>
        </div>
    </div>
    <section class="bg-center bg-no-repeat  bg-gray-600 bg-blend-multiply "
        style="background-image: url(img/page_4/terrain.jpg)">
        <div class="pl-4 mx-auto max-w-screen-xl text-center pt-8 pb-8 lg:pt-32 lg:pb-32">
            <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-4xl">
                ACTIVITES ELIGIBLES</h1>
        </div>
    </section>

    <div class="pt-20 pr-32 pl-32 pb-32">
        <h1 class="text-3xl font-bold text-justify">
            Activités industrielles
        </h1>
        <div class="grid grid-cols-3 gap-3">

            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>de
                    produits informatiques
                </p>
            </div>

            <div class="flex items-center pt-8  rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>de
                    produits télécoms et réseaux
                </p>
            </div>


            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>
                    d'instruments de test et de recherche <br>
                    biotechnologie
                </p>
            </div>

            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Fabrication de produits biotechnologies <br>
                    divers (médecine, pharmacie, agroalimentaire, <br>
                    énergie, environnement, industrie, mines )
                </p>
            </div>
            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Production de contenus audiovisuels
                </p>
            </div>
            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Edition de logiciels et progiciels
                </p>
            </div>
        </div>
    </div>
    <div class=" pr-32 pl-32 pb-32">
        <h1 class="text-3xl font-bold text-justify">
            Recherche et développement
        </h1>
        <div class="grid grid-cols-3 gap-3">

            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>de
                    produits informatiques
                </p>
            </div>

            <div class="flex items-center pt-8  rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>de
                    produits télécoms et réseaux
                </p>
            </div>


            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>
                    d'instruments de test et de recherche <br>
                    biotechnologie
                </p>
            </div>
        </div>

    </div>
    <div class=" pr-32 pl-32 pb-32">
        <h1 class="text-3xl font-bold text-justify">
            Renforcement des capacités
        </h1>
        <div class="grid grid-cols-3 gap-3">

            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>de
                    produits informatiques
                </p>
            </div>

            <div class="flex items-center pt-8  rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>de
                    produits télécoms et réseaux
                </p>
            </div>


            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>
                    d'instruments de test et de recherche <br>
                    biotechnologie
                </p>
            </div>
        </div>

    </div>
    <div class=" pr-32 pl-32 pb-32">
        <h1 class="text-3xl font-bold text-justify">
            Services à valeur ajoutée
        </h1>
        <p class="pt-10 text-justify text-md">
            Les services à valeur ajoutée sont des services dans le cadre desquels les fournisseurs “ajoutent une valeur”
            <br>
            aux informations fournies par le client en améliorant leur forme ou leur contenu ou en prévoyant leur stockage
            et leur recherche.
        </p>
        <div class="grid grid-cols-3 gap-3">

            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>de
                    produits informatiques
                </p>
            </div>

            <div class="flex items-center pt-8  rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>de
                    produits télécoms et réseaux
                </p>
            </div>


            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>
                    d'instruments de test et de recherche <br>
                    biotechnologie
                </p>
            </div>
        </div>

    </div>
    <div class=" pr-32 pl-32 pb-32">
        <h1 class="text-3xl font-bold text-justify">
            Activités d'accompagnement
        </h1>
        <p class="pt-10 text-justify text-md">
            Outre ces activités privilégiées, la ZBTIC accueille un ensemble de services d'accompagnement :
        </p>
        <div class="grid grid-cols-3 gap-3">

            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>de
                    produits informatiques
                </p>
            </div>

            <div class="flex items-center pt-8  rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>de
                    produits télécoms et réseaux
                </p>
            </div>


            <div class="flex items-center pt-8 rounded-lg " role="alert">
                <div
                    class="inline-flex items-center  flex-shrink-0 w-8 h-8 text-green-400 bg-green rounded-lg dark:bg-green-800 dark:text-green-200">
                    <img src="img/icon/check.png" alt="">
                </div>
                <p class="ml-4 text-md font-normal">
                    Conception, fabrication et assemblage <br>
                    d'instruments de test et de recherche <br>
                    biotechnologie
                </p>
            </div>
        </div>

    </div>

    <div class="flex flex-col text-center pb-20">
        <h1 class="text-3xl font-bold  uppercase">
            Procédure d'agrément
        </h1>
    </div>
    <div class=" flex flex-col bg-no-repeat " style="background-image: url('img/Image6.png')">
        <div class=" ">
            <h1 class="text-3xl text-center font-bold ">
                COMMENT NOUS REJOINDRE
            </h1>

            <div class=" pl-32 pr-32 flex flex-row py-16">
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
                            class="font-bold rounded-none  white text-center p-4 pl-20 pr-20">
                            REJOIGNEZ NOUS
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
