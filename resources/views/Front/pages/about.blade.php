@extends('layouts')


@section('content')
    <style>
        #carte-map {
            height: 300px
        }
    </style>
    <section class="bg-center bg-no-repeat bg-slate-500 bg-blend-multiply" style="background-image: url(img/immobilier1.png)">
        <div class="container mx-auto  px-4 text-center pt-16 pb-16 lg:pt-24 lg:pb-32">
            <h1
                class="mb-4 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-none text-white">
                LE VITIB VOUS SOUHAITE <br> LA BIENVENUE</h1>
            <br>
            <p class="mb-8 text-base sm:text-lg lg:text-md font-normal text-center text-gray-100 sm:px-8 md:px-16 lg:px-32">
                Bienvenue au VITIB - Village des Technologies de l'Information et de la Biotechnologie, un <br> centre
                d'excellence dédié à l'innovation et au développement technologique en Côte d'Ivoire. <br> Situé au cœur de
                l'Afrique, le VITIB est une zone franche technologique qui offre un <br> environnement propice à la
                croissance des entreprises technologiques.</p>
        </div>
    </section>

    {{-- <section class="" style="height:1480px; ">
    <div class="md:px-32 px-12  relative bg-repeat-x " style="background-image: url(img/Image8.png);  ">

        <div class="md:flex flex-row ">
            <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class="basis-1/2">
                <img src="img/dg.png" width="" alt="">
            </div>
            <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class="md:basis-1/2 ">
                <h2 class="font-bold text-5xl py-8">Mot du directeur Géneral</h2>
                <p class="text-justify text-gray-600  text-lg tracking-tight">
                    Bienvenue sur le site Internet du Village des Technologies de l’Information et de la Biotechnologie
                    (VITIB
                    SA).
                <p class="text-justify text-gray-600 ">
                    Ce site est une plateforme d’informations de qualité sur nos missions, nos objectifs. Les thématiques
                    développées ici vous permettront d’avoir une meilleure visibilité de nos activités et les perspectives
                    de
                    partenariat avec le VITIB SA.
                </p>

                <p class=" text-justify text-gray-600">
                    Le VITIB SA se veut un instrument de développement de la Côte d’Ivoire, particulièrement dans les
                    domaines
                    des Technologies de l’Information et de la Communication (TIC) ainsi que de la Biotechnologie,
                    conformément
                    à la vison de son Excellence Alassane OUATTARA, Président de la République, de faire de notre Pays un
                    hub
                    régional dans ce secteur. A ce titre, le VITIB, eu égard son statut de Zone économique spéciale, offre
                    un
                    cadre fiscal attractif aux entreprises désirant s’y installer.
                </p>
                <p class="text-justify text-gray-600">
                    Notre ambition est d’être un vecteur puissant pour le développement de notre Pays et de la sous-région.
                    Aussi, nous sommes résolument engagés, avec l’Etat de Côte d’Ivoire et nos partenaires, dans l’élan de
                    création d’opportunités et d’emplois pour les jeunes, acteurs clés pour l’avenir.
                </p>
                <p class="text-justify text-gray-600">
                    Vos opinions nous intéressent fortement et sera pour nous une source de motivation supplémentaire pour
                    enrichir qualitativement nos offres et services ; nous serons heureux de les recevoir afin de faire de
                    cette
                    plateforme une source interactive de collaboration avec vous.
                    Notre engagement et notre détermination nous feront avancer ensemble.

                </p>
                <p class="text-justify text-gray-600">
                    Cordialement.
                </p>

                </p>
                <div class="py-8" style="float:right">
                    <h3 class="font-bold ">
                        M. Mebeti Dosso
                    </h3>
                    <p>
                        Directeur General du Vitib
                    </p>
                </div>
            </div>
        </div>

        <div class="md:flex flex-row white absolute  left-0" style="background-image: url(img/blue.png); top:90%">
            <div class="md:basis-1/2 md:pl-32 pl-6 md:pr-8 pt-10  ">
                <h2  class="font-bold text-4xl ">
                    Notre vision
                </h2>
                <p  class="text-justify pt-8 pb-8  ">
                    Notre vision est de devenir un pôle d’innovation et de développement technologique qui catalyse la
                    croissance économique, encourage l’entrepreneuriat et transforme la zone en un hub technologique régional de
                    renommée internationale. <br>
                    Cette vision  inclut quelques éléments clés qui sont:
                </p>
                <h2 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class=" font-bold  tracking-tight ">
                    1. Infrastructure de pointe :
                </h2>
                <p  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600" class="text-justify pt-4 pb-4   tracking-tight">

                    Une zone techno pôle devrait disposer d'infrastructures modernes, telles que des centres de recherche, des
                    laboratoires, des espaces de travail collaboratifs et des équipements technologiques de pointe.
                    <br>Cela
                    faciliterait le développement et la mise en œuvre de nouvelles technologies.
                </p>
                <h2  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class=" font-bold tracking-tight ">
                    2. Collaboration entre les acteurs :
                </h2>
                 <p data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="800" class="text-justify pt-4 pb-4 tracking-tight ">

                    Une vision forte serait de promouvoir la collaboration entre les entreprises, les universités, les centres
                    de recherche et les gouvernements locaux. <br> En favorisant les partenariats stratégiques, les échanges de
                    connaissances et les initiatives communes, on peut stimuler l'innovation et accélérer le développement
                    technologique.
                </p>

                <h2  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600" class="font-bold font-bold  tracking-tight">
                    3. Formation et développement des talents :
                </h2>
                 <p data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class="text-justify pt-4 pb-4 tracking-tight ">

                    Une zone techno pôle devrait s'engager à former et à développer une main-d'œuvre qualifiée.
                    <br>Cela peut être
                    réalisé en établissant des programmes de formation spécialisés, en offrant des opportunités d'apprentissage
                    continu et en favorisant les interactions entre les étudiants, les chercheurs et les professionnels de
                    l'industrie.
                </p>

            </div>
            <div class="md:basis-1/2 md:pt-56 md:pl-8 md:pr-32">

                <h2 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class=" font-bold  tracking-tight ">
                    4. Soutien à l'entrepreneuriat :
                </h2>
                 <p data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600"class="text-justify pt-4 pb-4 tracking-tight ">

                    Encourager l'entrepreneuriat et la création de startups est essentiel pour stimuler l'innovation. <br> Une vision
                    pour une zone techno pôle pourrait inclure des incubateurs d'entreprises, des fonds d'investissement,<br> des
                    programmes d'accélération et un soutien financier pour les entrepreneurs afin de favoriser l'émergence de
                    nouvelles entreprises technologiques.
                </p>
                <h2 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class="font-bold  tracking-tight ">
                    5. Durabilité et responsabilité sociale :
                </h2>
                <p data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="800" class="text-justify pt-4 pb-4 tracking-tight">

                    Une vision moderne pour une zone techno pôle devrait intégrer des principes de durabilité environnementale
                    et de responsabilité sociale. <br>Il est important d'adopter des pratiques respectueuses de l'environnement, <br>de
                    promouvoir l'énergie propre et d'encourager le développement de solutions technologiques qui contribuent à
                    résoudre les défis sociaux et environnementaux.
                </p>
                <h2 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600" class=" font-bold  tracking-tight ">
                    6. Image de marque et réputation :
                </h2>
                 <p data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class="text-justify pt-4 pb-4 tracking-tight">

                    Le fait d'être associé à VITIB Technopolis, un projet phare en matière de technologie et d'innovation en
                    Cote d’Ivoire, peut améliorer la marque et la réputation de votre entreprise. <br> Elle témoigne de votre
                    engagement en faveur de l'innovation, du progrès technologique et de la durabilité,ce qui peut attirer des
                    investisseurs, des partenaires et des clients.
                </p>

            </div>
        </div>
    </div>

    </section> --}}
    <section class="" style="min-height: 1480px;">
        <div class="md:px-32 px-12 relative bg-repeat-x" style="background-image: url(img/Image8.png);">

            <div class="md:flex flex-row">
                <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class="w-full md:w-1/2">
                    <img src="img/dg.png" width="" alt="">
                </div>
                <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class="md:w-1/2">
                    <h2 class="font-bold text-5xl py-8">Mot du directeur Général</h2>
                    <p class="text-justify text-gray-600 text-lg tracking-tight">
                        Bienvenue sur le site Internet du Village des Technologies de l’Information et de la Biotechnologie
                        (VITIB SA).
                    </p>
                    <p class="text-justify text-gray-600">
                        Ce site est une plateforme d’informations de qualité sur nos missions, nos objectifs. Les
                        thématiques
                        développées ici vous permettront d’avoir une meilleure visibilité de nos activités et les
                        perspectives
                        de partenariat avec le VITIB SA.
                    </p>
                    <p class=" text-justify text-gray-600">
                        Le VITIB SA se veut un instrument de développement de la Côte d’Ivoire, particulièrement dans les
                        domaines
                        des Technologies de l’Information et de la Communication (TIC) ainsi que de la Biotechnologie,
                        conformément
                        à la vison de son Excellence Alassane OUATTARA, Président de la République, de faire de notre Pays
                        un
                        hub
                        régional dans ce secteur. A ce titre, le VITIB, eu égard son statut de Zone économique spéciale,
                        offre
                        un
                        cadre fiscal attractif aux entreprises désirant s’y installer.
                    </p>
                    <p class="text-justify text-gray-600">
                        Notre ambition est d’être un vecteur puissant pour le développement de notre Pays et de la
                        sous-région.
                        Aussi, nous sommes résolument engagés, avec l’Etat de Côte d’Ivoire et nos partenaires, dans l’élan
                        de
                        création d’opportunités et d’emplois pour les jeunes, acteurs clés pour l’avenir.
                    </p>
                    <p class="text-justify text-gray-600">
                        Vos opinions nous intéressent fortement et sera pour nous une source de motivation supplémentaire
                        pour
                        enrichir qualitativement nos offres et services ; nous serons heureux de les recevoir afin de faire
                        de
                        cette
                        plateforme une source interactive de collaboration avec vous.
                        Notre engagement et notre détermination nous feront avancer ensemble.

                    </p>
                    <p class="text-justify text-gray-600">
                        Cordialement.
                    </p>


                    <!-- Ajoutez d'autres paragraphes ici -->

                    <div class="py-8" style="float:right">
                        <h3 class="font-bold">
                            M. Mebeti Dosso
                        </h3>
                        <p>
                            Directeur General du VITIB
                        </p>
                    </div>
                </div>
            </div>

            <div class="md:flex flex-row white absolute left-0" style="background-image: url(img/blue.png); top:90%">
                <div class="md:w-1/2 md:pl-32 pl-6 md:pr-8 pt-10">
                    <h2 class="font-bold text-4xl">
                        Notre vision
                    </h2>
                    <p class="text-justify pt-8 pb-8">
                        Notre vision est de devenir un pôle d’innovation et de développement technologique qui catalyse la
                        croissance économique, encourage l’entrepreneuriat et transforme la zone en un hub technologique
                        régional de renommée internationale. <br>
                        Cette vision inclut quelques éléments clés qui sont:
                    </p>
                    <h2 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                        class=" font-bold  tracking-tight ">
                        1. Infrastructure de pointe :
                    </h2>
                    <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"
                        class="text-justify pt-4 pb-4   tracking-tight">

                        Une zone techno pôle devrait disposer d'infrastructures modernes, telles que des centres de
                        recherche, des
                        laboratoires, des espaces de travail collaboratifs et des équipements technologiques de pointe.
                        <br>Cela
                        faciliterait le développement et la mise en œuvre de nouvelles technologies.
                    </p>
                    <h2 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
                        class=" font-bold tracking-tight ">
                        2. Collaboration entre les acteurs :
                    </h2>
                    <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="800"
                        class="text-justify pt-4 pb-4 tracking-tight ">

                        Une vision forte serait de promouvoir la collaboration entre les entreprises, les universités, les
                        centres
                        de recherche et les gouvernements locaux. <br> En favorisant les partenariats stratégiques, les
                        échanges de
                        connaissances et les initiatives communes, on peut stimuler l'innovation et accélérer le
                        développement
                        technologique.
                    </p>

                    <h2 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"
                        class="font-bold font-bold  tracking-tight">
                        3. Formation et développement des talents :
                    </h2>
                    <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
                        class="text-justify pt-4 pb-4 tracking-tight ">

                        Une zone techno pôle devrait s'engager à former et à développer une main-d'œuvre qualifiée.
                        <br>Cela peut être
                        réalisé en établissant des programmes de formation spécialisés, en offrant des opportunités
                        d'apprentissage
                        continu et en favorisant les interactions entre les étudiants, les chercheurs et les professionnels
                        de
                        l'industrie.
                    </p>

                </div>

                <div class="md:w-1/2 md:pt-56 md:pl-8 md:pr-32">
                    <h2 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                        class=" font-bold  tracking-tight ">
                        4. Soutien à l'entrepreneuriat :
                    </h2>
                    <p data-aos="zoom-in-right" data-aos-duration="800"
                        data-aos-delay="600"class="text-justify pt-4 pb-4 tracking-tight ">

                        Encourager l'entrepreneuriat et la création de startups est essentiel pour stimuler l'innovation.
                        <br> Une vision
                        pour une zone techno pôle pourrait inclure des incubateurs d'entreprises, des fonds
                        d'investissement,<br> des
                        programmes d'accélération et un soutien financier pour les entrepreneurs afin de favoriser
                        l'émergence de
                        nouvelles entreprises technologiques.
                    </p>
                    <h2 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
                        class="font-bold  tracking-tight ">
                        5. Durabilité et responsabilité sociale :
                    </h2>
                    <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="800"
                        class="text-justify pt-4 pb-4 tracking-tight">

                        Une vision moderne pour une zone techno pôle devrait intégrer des principes de durabilité
                        environnementale
                        et de responsabilité sociale. <br>Il est important d'adopter des pratiques respectueuses de
                        l'environnement, <br>de
                        promouvoir l'énergie propre et d'encourager le développement de solutions technologiques qui
                        contribuent à
                        résoudre les défis sociaux et environnementaux.
                    </p>
                    <h2 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"
                        class=" font-bold  tracking-tight ">
                        6. Image de marque et réputation :
                    </h2>
                    <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
                        class="text-justify pt-4 pb-4 tracking-tight">

                        Le fait d'être associé à VITIB Technopolis, un projet phare en matière de technologie et
                        d'innovation en
                        Cote d’Ivoire, peut améliorer la marque et la réputation de votre entreprise. <br> Elle témoigne de
                        votre
                        engagement en faveur de l'innovation, du progrès technologique et de la durabilité,ce qui peut
                        attirer des
                        investisseurs, des partenaires et des clients.
                    </p>

                </div>
            </div>
        </div>
    </section>



    <div class="mx-auto px-5 md:px-20 py-5 bg-gradient-to-r from-gray-100 from-10% to-orange-100 to-90%">
        <div class="md:flex flex-col md:flex-row pt-16 pb-16 md:pl-24 md:pr-24">
            <div class="md:w-1/2">
                <h1 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700"
                    class="font-bold text-3xl md:text-6xl pl-4">
                    Un espace Tech <br> pour vous
                </h1>
                <p data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1000"
                    class="text-justify text-gray-600 pt-4 pl-2 md:pr-16">
                    Nous sommes fiers de proposer un écosystème dynamique, où les entreprises peuvent prospérer grâce à des
                    avantages fiscaux et réglementaires attractifs, ainsi qu'à une infrastructure de pointe. Le VITIB met à
                    disposition des espaces de bureaux modernes, des laboratoires de recherche de pointe, une connectivité
                    Internet haut débit et bien plus encore.
                </p>
                <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1300" class="pt-8 md:pt-20">
                    <img src="img/city.png" class="h-64 md:h-80 w-full pr-2 md:pr-16 pl-2" alt="">
                </div>
            </div>
            <div class="md:w-1/2">
                <img data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" src="img/tech.png"
                    class="h-48 md:h-64 w-full" alt="">
                <h1 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1000"
                    class="font-bold text-3xl md:text-6xl pt-8 md:pt-20">
                    Smart city
                </h1>
                <p data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="1300"
                    class="text-justify text-gray-600 py-4">
                    La ZBTIC est un territoire sur lequel s’appliquent des politiques fiscales et douanières avantageuses.
                    La législation ivoirienne relative à la ZBTIC (loi N° 429-2004 du 30 août 2004) attribue le monopole de
                    la gestion, de l’exploitation, de l’aménagement et de la promotion du Village de l’Innovation
                    Technologique à l’entreprise VITIB S.A. A son tour, VITIB S.A. a fait concevoir un Plan de Masse
                    conforme à un statut de ville intelligente (smart city). Ce plan de masse s’appuyant sur un certain
                    nombre d’études menées par des cabinets de renom, prévoit la réalisation d’un certain nombre
                    d’infrastructures. Dans l’optique d’optimiser ses ressources et se concentrer sur son cœur de métier, à
                    savoir la promotion et l’exploitation de son parc technologique, VITIB souhaite s’entourer de
                    partenaires investisseurs nationaux et internationaux pour le développement de cette « ville
                    intelligente ».
                </p>
            </div>
        </div>
    </div>

    <div class="md:flex flex-row md:pl-32" style="background-image: url(img/blue1.png)">
        <div class="md:w-1/2">
            {{-- <img src="img/plan_carte.png" width="" alt=""> --}}
            <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" id='carte-map'
                class="pt-4 pb-4">
            </div>
        </div>
        <div class="md:w-1/2 md:pr-16 md:pl-8 md:pt-16">
            <p data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="700"
                class="text-justify text-lg text-white">
                La ZBTIC est subdivisée en trois blocs distincts : les <br>
                blocs A et B situés à cheval de la nouvelle autoroute <br>
                Abidjan – Bassam (réalisée en 2015) et le futur bloc C, <br>
                situé sur l’île de Vitré et séparé du bloc B par la <br>
                lagune Ebrié.
            </p>
            <div class="flex flex-row pt-8 underline">
                <a href="#"
                    class="inline-flex items-center font-medium text-orange-400 dark:text-orange-400 hover:underline">
                    Voir plus
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>


    {{-- <div class=" relative md:flex flex-row bg-gradient-to-r from-gray-100 from-20%  to-orange-100 to-90%  ">

        <div class="md:basis-3/4 pl-24 pb-32">
            <h3 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500"  class="font-bold text-6xl pl-10 pt-24 pb-8">
                8 avantages unique au Vitib
            </h3>

            <div class="md:flex flex-row">
                <div class="basis-1/2 pr-10">
                    <h5  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600" class=" font-bold text-3md  pt-8 pb-4">
                        Avantages fiscaux et réglementaires
                    </h5>
                    <p data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class="text-justify pb-4 ">
                        Les entreprises établies au VITIB bénéficient d'un régime fiscal avantageux, comprenant des
                        exonérations d'impôts sur les bénéfices et les dividendes, ainsi que des droits de douane réduits
                        voire nuls sur les importations de biens d'équipement. Ces incitations fiscales visent à encourager
                        l'investissement et la croissance des entreprises dans la zone.
                    </p>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <h5  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class=" font-bold text-3md  pt-8 pb-4">
                        Main-d'œuvre qualifiée
                    </h5>
                    <p  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="800" class="text-justify pb-4 text-lg">
                        La Côte d'Ivoire dispose d'une main-d'œuvre jeune, dynamique et qualifiée. Le VITIB offre aux
                        entreprises un accès à un réservoir de talents en croissance, grâce à la proximité des
                        établissements d'enseignement supérieur et des centres de formation spécialisés.
                    </p>
                    <h5  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class=" font-bold text-3md  pt-8 pb-4">
                        Un accès à un marché en
                        plein essor
                    </h5>
                    <p  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class="text-justify pb-4 text-lg">
                        La Côte d'Ivoire est l'une des économies en croissance les plus rapides en Afrique. En choisissant
                        le VITIB comme base opérationnelle, les entreprises peuvent accéder à un marché régional en pleine
                        expansion et profiter des opportunités commerciales qu'offre la région de l'Afrique de l'Ouest.
                    </p>
                    <h5  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500"class=" font-bold text-3md  pt-8 pb-4">
                        Un environnement
                        d'innovation
                    </h5>
                    <p  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600" class="text-justify pb-4 text-lg">
                        La Côte d'Ivoire dispose d'une main-d'œuvre jeune, dynamique et qualifiée. Le VITIB offre aux
                        entreprises un accès à un réservoir de talents en croissance, grâce à la proximité des
                        établissements d'enseignement supérieur et des centres de formation spécialisés.Le VITIB est conçu
                        pour encourager l'innovation et la recherche technologique. En tant que centre d'excellence, il
                        offre un cadre stimulant aux entreprises pour développer de nouvelles solutions, produits et
                        services.
                    </p>
                </div>
                <div class="basis-1/2">
                    <h5  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="300" class=" font-bold text-3md  text-lg pl-10 pt-8 pb-4">
                        Avantages douaniers
                    </h5>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="400" class="flex flex-row">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500"class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>

                    <h5  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="800" class=" font-bold text-3md pl-10 pt-8 pb-4">
                        Infrastructure de pointe
                    </h5>
                    <p   data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500"class="text-justify pl-10 pb-4 text-lg">
                        Le VITIB propose des infrastructures modernes et de haute qualité, avec des espaces de bureaux
                        équipés, des laboratoires de recherche technologique, des parcs industriels, et une connectivité
                        Internet haut débit. Ces infrastructures permettent aux entreprises de démarrer leurs activités
                        rapidement et de manière efficace.</p>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600"class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600"class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="800"class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <h5  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class=" font-bold text-3md  pt-8 pl-10 pb-4">
                        Des partenariats et
                        réseautage unique
                    </h5>
                    <p  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600" class="text-justify pl-10 pb-4 text-lg">
                        En s'installant au VITIB, les entreprises ont la possibilité de créer des partenariats stratégiques
                        avec d'autres entreprises du secteur, des centres de recherche, des universités et des incubateurs
                        d'entreprises. Ces collaborations favorisent l'innovation, le partage des connaissances et l'accès à
                        de nouveaux marchés.

                    </p>
                    <h5  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" class=" font-bold text-3md pl-10 pt-8 pb-4">
                        Un soutien gouvernemental
                    </h5>
                    <p  data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600" class="text-justify pl-10 pb-4 text-lg">
                        Le VITIB bénéficie du soutien actif du gouvernement ivoirien, qui s'engage à promouvoir le
                        développement technologique et à faciliter l'implantation des entreprises dans la zone. Cela se
                        traduit par des mesures d'accompagnement, des facilités administratives et un environnement propice
                        aux affaires.
                    </p>

                </div>
            </div>
        </div>
        <div class=" md:basis-1/4 pl-64 mt-24 ml-8 bg-no-repeat" style=" background-size:cover; background-image:url('img/image15.png')">

        </div>
    </div> --}}
    <div class="relative md:flex flex-row bg-gradient-to-r from-gray-100 from-20% to-orange-100 to-90%">

        <div class="md:w-3/4 md:pl-24 md:pb-32">
            <h3 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500"
                class="font-bold text-5xl md:text-3xl pl-10 pt-24 pb-8">
                8 avantages unique au Vitib
            </h3>

            <div class="md:flex flex-row">
                <div class="w-full md:w-1/2 md:pr-10">
                    <h5 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600"
                        class="font-bold text-3xl md:text-3xl pt-8 pb-4">
                        Avantages fiscaux et réglementaires
                    </h5>
                    <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="text-justify pb-4 ">
                        Les entreprises établies au VITIB bénéficient d'un régime fiscal avantageux, comprenant des
                        exonérations d'impôts sur les bénéfices et les dividendes, ainsi que des droits de douane réduits
                        voire nuls sur les importations de biens d'équipement. Ces incitations fiscales visent à encourager
                        l'investissement et la croissance des entreprises dans la zone.
                    </p>
                    <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                        class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"
                        class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
                        class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                        class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"
                        class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <h5 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
                        class=" font-bold text-3md  pt-8 pb-4">
                        Main-d'œuvre qualifiée
                    </h5>
                    <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="800"
                        class="text-justify pb-4 text-lg">
                        La Côte d'Ivoire dispose d'une main-d'œuvre jeune, dynamique et qualifiée. Le VITIB offre aux
                        entreprises un accès à un réservoir de talents en croissance, grâce à la proximité des
                        établissements d'enseignement supérieur et des centres de formation spécialisés.
                    </p>
                    <h5 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
                        class=" font-bold text-3md  pt-8 pb-4">
                        Un accès à un marché en
                        plein essor
                    </h5>
                    <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
                        class="text-justify pb-4 text-lg">
                        La Côte d'Ivoire est l'une des économies en croissance les plus rapides en Afrique. En choisissant
                        le VITIB comme base opérationnelle, les entreprises peuvent accéder à un marché régional en pleine
                        expansion et profiter des opportunités commerciales qu'offre la région de l'Afrique de l'Ouest.
                    </p>
                    <h5 data-aos="zoom-in-right" data-aos-duration="800"
                        data-aos-delay="500"class=" font-bold text-3md  pt-8 pb-4">
                        Un environnement
                        d'innovation
                    </h5>
                    <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"
                        class="text-justify pb-4 text-lg">
                        La Côte d'Ivoire dispose d'une main-d'œuvre jeune, dynamique et qualifiée. Le VITIB offre aux
                        entreprises un accès à un réservoir de talents en croissance, grâce à la proximité des
                        établissements d'enseignement supérieur et des centres de formation spécialisés.Le VITIB est conçu
                        pour encourager l'innovation et la recherche technologique. En tant que centre d'excellence, il
                        offre un cadre stimulant aux entreprises pour développer de nouvelles solutions, produits et
                        services.
                    </p>

                </div>
                <div class="basis-1/2">
                    <h5  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="300" class=" font-bold text-3md  text-lg pl-10 pt-8 pb-4">
                        Avantages douaniers
                    </h5>

                <div  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="400" class="flex flex-row">
                    <div class="basis-1/6 pl-10">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="basis-5/6">
                        <p>
                            0% de droits de douanes et taxes à l’Importation et à l’exportation
                        </p>
                    </div>
                </div>
                <div  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500"class="flex flex-row pb-4">
                    <div class="basis-1/6 pl-10">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="basis-5/6">
                        <p>
                            0% de droits de douanes et taxes à l’Importation et à l’exportation
                        </p>
                    </div>
                </div>
                <div  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="600" class="flex flex-row pb-4">
                    <div class="basis-1/6 pl-10">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="basis-5/6">
                        <p>
                            0% de droits de douanes et taxes à l’Importation et à l’exportation
                        </p>
                    </div>
                </div>
                <div  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="700" class="flex flex-row pb-4">
                    <div class="basis-1/6 pl-10">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="basis-5/6">
                        <p>
                            0% de droits de douanes et taxes à l’Importation et à l’exportation
                        </p>
                    </div>
                </div>

                <h5  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="800" class=" font-bold text-3md pl-10 pt-8 pb-4">
                    Infrastructure de pointe
                </h5>
                <p   data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500"class="text-justify pl-10 pb-4 text-lg">
                    Le VITIB propose des infrastructures modernes et de haute qualité, avec des espaces de bureaux
                    équipés, des laboratoires de recherche technologique, des parcs industriels, et une connectivité
                    Internet haut débit. Ces infrastructures permettent aux entreprises de démarrer leurs activités
                    rapidement et de manière efficace.</p>
                <div  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="600"class="flex flex-row pb-4">
                    <div class="basis-1/6 pl-10">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="basis-5/6">
                        <p>
                            0% de droits de douanes et taxes à l’Importation et à l’exportation
                        </p>
                    </div>
                </div>
                <div  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500" class="flex flex-row pb-4">
                    <div class="basis-1/6 pl-10">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="basis-5/6">
                        <p>
                            0% de droits de douanes et taxes à l’Importation et à l’exportation
                        </p>
                    </div>
                </div>
                <div  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="600"class="flex flex-row pb-4">
                    <div class="basis-1/6 pl-10">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="basis-5/6">
                        <p>
                            0% de droits de douanes et taxes à l’Importation et à l’exportation
                        </p>
                    </div>
                </div>
                <div data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="700" class="flex flex-row pb-4">
                    <div class="basis-1/6 pl-10">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="basis-5/6">
                        <p>
                            0% de droits de douanes et taxes à l’Importation et à l’exportation
                        </p>
                    </div>
                </div>
                <div  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="800"class="flex flex-row pb-4">
                    <div class="basis-1/6 pl-10">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="basis-5/6">
                        <p>
                            0% de droits de douanes et taxes à l’Importation et à l’exportation
                        </p>
                    </div>
                </div>
                <div  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="700" class="flex flex-row pb-4">
                    <div class="basis-1/6 pl-10">
                        <img src="img/icon/check.png" alt="">
                    </div>
                    <div class="basis-5/6">
                        <p>
                            0% de droits de douanes et taxes à l’Importation et à l’exportation
                        </p>
                    </div>
                </div>
                <h5  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500" class=" font-bold text-3md  pt-8 pl-10 pb-4">
                    Des partenariats et
                    réseautage unique
                </h5>
                <p  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="600" class="text-justify pl-10 pb-4 text-lg">
                    En s'installant au VITIB, les entreprises ont la possibilité de créer des partenariats stratégiques
                    avec d'autres entreprises du secteur, des centres de recherche, des universités et des incubateurs
                    d'entreprises. Ces collaborations favorisent l'innovation, le partage des connaissances et l'accès à
                    de nouveaux marchés.

                </p>
                <h5  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500" class=" font-bold text-3md pl-10 pt-8 pb-4">
                    Un soutien gouvernemental
                </h5>
                <p  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="600" class="text-justify pl-10 pb-4 text-lg">
                    Le VITIB bénéficie du soutien actif du gouvernement ivoirien, qui s'engage à promouvoir le
                    développement technologique et à faciliter l'implantation des entreprises dans la zone. Cela se
                    traduit par des mesures d'accompagnement, des facilités administratives et un environnement propice
                    aux affaires.
                </p>

 </div>
            </div>
        </div>
        <div class="md:w-1/4 md:pl-64 md:mt-24 md:ml-8 bg-no-repeat"
            style="background-size: cover; background-image: url('img/image15.png')">
            <!-- Content for the right column -->
        </div>
    </div>


    <div class="mx-auto px-5 md:px-20 py-5 bg-gradient-to-r from-orange-100 from-10% via-30% to-green-100 to-90%">
        <div class="text-center md:px-12 lg:px-96">
            <img data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500" src="img/cadre.png"
                class="pt-16 pb-8 h-auto">
            <h1 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600"
                class="font-bold text-2xl md:text-3xl lg:text-4xl text-center pb-4">
                Le hub des partenariats stratégiques en Afrique
            </h1>
            <p data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700"
                class="text-center text-base md:text-lg ">
                Au VITIB, nous croyons en la puissance des partenariats stratégiques. En vous installant ici, vous aurez la
                possibilité de collaborer avec des entreprises locales et internationales, des centres de recherche, des
                universités et des incubateurs d'entreprises pour stimuler votre croissance et votre compétitivité.
            </p>
        </div>

        <div class="text-center pt-8 md:pt-48">
            <h1 data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500"
                class="font-bold text-3xl md:text-4xl lg:text-5xl text-center pb-4">
                Nos partenaires
            </h1>
            <p data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="600"
                class="text-center text-base md:text-lg  md:px-24 lg:px-72 px-4 pb-4">
                Notre mission est soutenue par l'engagement du gouvernement ivoirien, qui favorise activement le
                développement
                technologique en investissant dans l'innovation et en offrant un soutien précieux aux entreprises établies
                dans
                notre zone.
            </p>
            <div class="flex flex-row">
                <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="700"
                    class="basis-1/2 md:text-right">
                    <a href="#"
                        class="inline-flex items-center font-medium text-orange-400 dark:text-orange-400 underline hover:underline">
                        Voir plus
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=" md:mx-auto px-20 py-2 ">


        <div class="w-full items-center">
            <div class="flex flex-row justify-center relative overflow-x-auto md:overflow-x-hidden items-center">
                <div class="w-1/4 md:w-1/6 md:px-auto pt-4 text-center animate-marquee whitespace-nowrap ">
                    <img src="https://www.afi-global.org/wp-content/uploads/2021/02/Cote-d-Ivoire-e1614067202586.png" alt="">
                </div>
                <div class="w-1/4 md:w-1/6 pl-4 pt-2 animate-marquee whitespace-nowrap">
                    <img class="h-36 " src="https://www.umoatitres.org/wp-content/uploads/2018/03/logo_boad.jpg" alt="">
                </div>
                <div class="w-1/4 md:w-1/6 pl-4 pt-4  animate-marquee whitespace-nowrap ">

                    <img class="h-36 " src="https://finances.gouv.ci/images/ComPress.jpg" alt="">
                </div>
                <div class="w-1/4 md:w-1/6 pl-4 animate-marquee whitespace-nowrap ">
                    <img class="  h-36" src= "data:image/png;base64,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" alt="">
                </div>

            </div>
        </div>
    </div>
    <div class="md:pl-32 md:pr-32 px-6  bg-no-repeat  bg-gradient-to-r from-orange-100 from-10% via-30% to-green-100 to-90%"
   >
    <div class="md:flex flex-col bg-repeat-x" style="background-image: url('img/Image6.png')">
        <div class="  md:py-12">
            <h1 class="text-2xl md:text-4xl pb-4 md:pb-24 text-center font-bold text-slate-600 space"
                data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="500">
                COMMENT NOUS REJOINDRE
            </h1>

            <div class="md:flex flex-row py-4 md:py-8" data-aos="zoom-in-up" data-aos-duration="1000"
                data-aos-delay="1000">
                <div class="md:w-1/3">
                    <img class="h-auto max-w-full rounded-lg pl-4" src="img/Image7.png" alt="">
                </div>
                <div class="md:w-1/3 md:pl-8 mt-4 md:mt-0">
                    <h2 class="font-bold text-lg">
                        TÉLÉCHARGER DOSSIER DE DEMANDE D’AGRÉMENT
                    </h2>
                    <p class="text-justify text-lg">
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
                <div class="md:w-1/3 md:pl-4 mt-4 md:mt-0">
                    <div class="md:w-2/3 border-dashed border-l-2 border-gray-700">
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
                                    <p class="text-lg">
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
                                    <p class="text-lg">
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
                                    <p class="text-lg">
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
                                <button type="button" style="background-color: #F18700"
                                    class="font-bold rounded-none text-white text-center p-3 sm:p-4 md:p-5 lg:pl-12  lg:pr-12">
                                    REJOIGNEZ-NOUS
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

    <script>
        //5.230592230474829, -3.757789933512643
        var map = L.map('carte-map').setView([5.230592230474829, -3.757789933512643], 15);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker = L.marker([5.230592230474829, -3.757789933512643])
        marker.titre = 'VITIB'
        marker.addTo(map);
    </script>
@endsection
