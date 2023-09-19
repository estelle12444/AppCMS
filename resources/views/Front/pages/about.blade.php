@extends('layouts')


@section('content')
    <style>
        #carte-map {
            height: 300px
        }
    </style>
    <section class="bg-center bg-no-repeat bg-slate-500 bg-blend-multiply" style="background-image: url(img/immobilier1.png)">
        <div class="container mx-auto px-4 flex items-center justify-center h-full ">

            <div class="text-center py-16  md:py-24">
                <br>
                <br>
                <br>
                <h1 class="mb-4 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-none text-white">
                    LE VITIB VOUS SOUHAITE <br> LA BIENVENUE
                </h1>
                <br>
                <p class="mb-8 text-base md:text-lg lg:text-md font-normal text-center text-gray-100 sm:px-8 md:px-16 lg:px-32">
                    Bienvenue au VITIB - Village des Technologies de l'Information et de la Biotechnologie, un <br > centre
                    d'excellence dédié à l'innovation et au développement technologique en Côte d'Ivoire. <br> Situé au cœur de
                    l'Afrique, le VITIB est une zone franche technologique qui offre un <br> environnement propice à la
                    croissance des entreprises technologiques.
                </p>
            </div>
        </div>
    </section>


    {{-- <section class="" style="height:1480px; ">
    <div class="md:px-32 px-12  relative bg-repeat-x " style="background-image: url(img/Image8.png);  ">

        <div class="md:flex flex-row ">
            <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class="basis-1/2">
                <img src="img/dg.png" width="" alt="">
            </div>
            <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="md:basis-1/2 ">
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
                <h2 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class=" font-bold  tracking-tight ">
                    1. Infrastructure de pointe :
                </h2>
                <p  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600" class="text-justify pt-4 pb-4   tracking-tight">

                    Une zone techno pôle devrait disposer d'infrastructures modernes, telles que des centres de recherche, des
                    laboratoires, des espaces de travail collaboratifs et des équipements technologiques de pointe.
                    <br>Cela
                    faciliterait le développement et la mise en œuvre de nouvelles technologies.
                </p>
                <h2  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class=" font-bold tracking-tight ">
                    2. Collaboration entre les acteurs :
                </h2>
                 <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="800" class="text-justify pt-4 pb-4 tracking-tight ">

                    Une vision forte serait de promouvoir la collaboration entre les entreprises, les universités, les centres
                    de recherche et les gouvernements locaux. <br> En favorisant les partenariats stratégiques, les échanges de
                    connaissances et les initiatives communes, on peut stimuler l'innovation et accélérer le développement
                    technologique.
                </p>

                <h2  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600" class="font-bold font-bold  tracking-tight">
                    3. Formation et développement des talents :
                </h2>
                 <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="text-justify pt-4 pb-4 tracking-tight ">

                    Une zone techno pôle devrait s'engager à former et à développer une main-d'œuvre qualifiée.
                    <br>Cela peut être
                    réalisé en établissant des programmes de formation spécialisés, en offrant des opportunités d'apprentissage
                    continu et en favorisant les interactions entre les étudiants, les chercheurs et les professionnels de
                    l'industrie.
                </p>

            </div>
            <div class="md:basis-1/2 md:pt-56 md:pl-8 md:pr-32">

                <h2 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class=" font-bold  tracking-tight ">
                    4. Soutien à l'entrepreneuriat :
                </h2>
                 <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"class="text-justify pt-4 pb-4 tracking-tight ">

                    Encourager l'entrepreneuriat et la création de startups est essentiel pour stimuler l'innovation. <br> Une vision
                    pour une zone techno pôle pourrait inclure des incubateurs d'entreprises, des fonds d'investissement,<br> des
                    programmes d'accélération et un soutien financier pour les entrepreneurs afin de favoriser l'émergence de
                    nouvelles entreprises technologiques.
                </p>
                <h2 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="font-bold  tracking-tight ">
                    5. Durabilité et responsabilité sociale :
                </h2>
                <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="800" class="text-justify pt-4 pb-4 tracking-tight">

                    Une vision moderne pour une zone techno pôle devrait intégrer des principes de durabilité environnementale
                    et de responsabilité sociale. <br>Il est important d'adopter des pratiques respectueuses de l'environnement, <br>de
                    promouvoir l'énergie propre et d'encourager le développement de solutions technologiques qui contribuent à
                    résoudre les défis sociaux et environnementaux.
                </p>
                <h2 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600" class=" font-bold  tracking-tight ">
                    6. Image de marque et réputation :
                </h2>
                 <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="text-justify pt-4 pb-4 tracking-tight">

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
        <div class="md:px-32 md:px-12 md:px-4  relative bg-repeat-x" style="background-image: url(img/Image8.png);">

            <div class="md:flex flex-row">
                <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class="w-full md:w-1/2">
                    <img src="img/dg.png" width="" alt="">
                </div>
                <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="md:w-1/2  mx-4 md:mx-0">
                    <h2 class="font-bold md:text-5xl py-8 text-4xl ">Mot du directeur Général</h2>
                    <p class="text-justify text-gray-600 md:text-lg tracking-tight">
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
                <div class="md:flex flex-row white md:absolute md:mt-6 left-0 py-6 md:top-[90%] mt-24 md:mt-0" style="background-image: url(img/blue.png);">
                    <div class="md:w-1/2 md:pl-32 px-4 md:pr-8 pt-10">
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
                            class="text-justify py-4   tracking-tight">

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
                            class="text-justify py-4 tracking-tight ">

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
                            class="text-justify py-4 tracking-tight ">

                            Une zone techno pôle devrait s'engager à former et à développer une main-d'œuvre qualifiée.
                            <br>Cela peut être
                            réalisé en établissant des programmes de formation spécialisés, en offrant des opportunités
                            d'apprentissage
                            continu et en favorisant les interactions entre les étudiants, les chercheurs et les professionnels
                            de
                            l'industrie.
                        </p>

                    </div>

                    <div class="md:w-1/2 md:pt-56 md:pl-8 md:pr-32 px-4 ">
                        <h2 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                            class=" font-bold  tracking-tight ">
                            4. Soutien à l'entrepreneuriat :
                        </h2>
                        <p data-aos="zoom-in-right" data-aos-duration="800"
                            data-aos-delay="600"class="text-justify py-4 tracking-tight ">

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

            {{-- <div class="md:flex flex-row white absolute left-0" style="background-image: url(img/blue.png); top:90%">
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
            </div> --}}
        </div>
    </section>



    <div class="mx-auto px-5 md:px-20 md:py-12 py-4 bg-gradient-to-r from-gray-100 from-10% to-orange-100 to-90%">
        <div class="md:flex flex-col md:flex-row py-16 md:px-24">
            <div class="md:w-1/2">
                <h1 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
                    class="font-bold text-3xl md:text-6xl pl-4">
                    Un espace Tech <br> pour vous
                </h1>
                <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="1000"
                    class="text-justify text-gray-600 pt-4 pl-2 md:pr-16">
                    Nous sommes fiers de proposer un écosystème dynamique, où les entreprises peuvent prospérer grâce à des
                    avantages fiscaux et réglementaires attractifs, ainsi qu'à une infrastructure de pointe. Le VITIB met à
                    disposition des espaces de bureaux modernes, des laboratoires de recherche de pointe, une connectivité
                    Internet haut débit et bien plus encore.
                </p>
                <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="1300" class="pt-8 md:pt-20">
                    <img src="img/city.png" class="h-64 md:h-80 w-full pr-2 md:pr-16 pl-2" alt="">
                </div>
            </div>
            <div class="md:w-1/2">
                <img data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" src="img/tech.png"
                    class="h-48 md:h-64 w-full" alt="">
                <h1 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="1000"
                    class="font-bold text-3xl md:text-6xl pt-8 md:pt-20">
                    Smart city
                </h1>
                <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="1300"
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

    <div class="md:flex flex-row md:pl-32 relative px-4 " style="background-image: url(img/blue1.png)">
        <div class="md:w-1/2">
            {{-- <img src="img/plan_carte.png" width="" alt=""> --}}
            <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" id='carte-map'
                class="md:py-4 ">
            </div>
        </div>
        <div class="md:w-1/2 md:pr-16 md:pl-8 md:pt-16 py-4">
            <div class="md:sticky md:top-0"> <!-- Ajoutez ces classes pour rendre le bloc de droite fixe -->
                <p data-aos="zoom-in-left" data-aos-duration="800" data-aos-delay="700"
                    class="text-justify md:text-lg text-white">
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
    </div>



    {{-- <div class=" relative md:flex flex-row bg-gradient-to-r from-gray-100 from-20%  to-orange-100 to-90%  ">

        <div class="md:basis-3/4 pl-24 pb-32">
            <h3 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"  class="font-bold text-6xl pl-10 pt-24 pb-8">
                8 avantages unique au Vitib
            </h3>

            <div class="md:flex flex-row">
                <div class="basis-1/2 pr-10">
                    <h5  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600" class=" font-bold text-3md  pt-8 pb-4">
                        Avantages fiscaux et réglementaires
                    </h5>
                    <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="text-justify pb-4 ">
                        Les entreprises établies au VITIB bénéficient d'un régime fiscal avantageux, comprenant des
                        exonérations d'impôts sur les bénéfices et les dividendes, ainsi que des droits de douane réduits
                        voire nuls sur les importations de biens d'équipement. Ces incitations fiscales visent à encourager
                        l'investissement et la croissance des entreprises dans la zone.
                    </p>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <h5  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class=" font-bold text-3md  pt-8 pb-4">
                        Main-d'œuvre qualifiée
                    </h5>
                    <p  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="800" class="text-justify pb-4 text-lg">
                        La Côte d'Ivoire dispose d'une main-d'œuvre jeune, dynamique et qualifiée. Le VITIB offre aux
                        entreprises un accès à un réservoir de talents en croissance, grâce à la proximité des
                        établissements d'enseignement supérieur et des centres de formation spécialisés.
                    </p>
                    <h5  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class=" font-bold text-3md  pt-8 pb-4">
                        Un accès à un marché en
                        plein essor
                    </h5>
                    <p  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="text-justify pb-4 text-lg">
                        La Côte d'Ivoire est l'une des économies en croissance les plus rapides en Afrique. En choisissant
                        le VITIB comme base opérationnelle, les entreprises peuvent accéder à un marché régional en pleine
                        expansion et profiter des opportunités commerciales qu'offre la région de l'Afrique de l'Ouest.
                    </p>
                    <h5  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"class=" font-bold text-3md  pt-8 pb-4">
                        Un environnement
                        d'innovation
                    </h5>
                    <p  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600" class="text-justify pb-4 text-lg">
                        La Côte d'Ivoire dispose d'une main-d'œuvre jeune, dynamique et qualifiée. Le VITIB offre aux
                        entreprises un accès à un réservoir de talents en croissance, grâce à la proximité des
                        établissements d'enseignement supérieur et des centres de formation spécialisés.Le VITIB est conçu
                        pour encourager l'innovation et la recherche technologique. En tant que centre d'excellence, il
                        offre un cadre stimulant aux entreprises pour développer de nouvelles solutions, produits et
                        services.
                    </p>
                </div>
                <div class="basis-1/2">
                    <h5  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="300" class=" font-bold text-3md  text-lg pl-10 pt-8 pb-4">
                        Avantages douaniers
                    </h5>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="400" class="flex flex-row">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>

                    <h5  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="800" class=" font-bold text-3md pl-10 pt-8 pb-4">
                        Infrastructure de pointe
                    </h5>
                    <p   data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"class="text-justify pl-10 pb-4 text-lg">
                        Le VITIB propose des infrastructures modernes et de haute qualité, avec des espaces de bureaux
                        équipés, des laboratoires de recherche technologique, des parcs industriels, et une connectivité
                        Internet haut débit. Ces infrastructures permettent aux entreprises de démarrer leurs activités
                        rapidement et de manière efficace.</p>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="800"class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <div  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700" class="flex flex-row pb-4">
                        <div class="basis-1/6 pl-10">
                            <img src="img/icon/check.png" alt="">
                        </div>
                        <div class="basis-5/6">
                            <p>
                                0% de droits de douanes et taxes à l’Importation et à l’exportation
                            </p>
                        </div>
                    </div>
                    <h5  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class=" font-bold text-3md  pt-8 pl-10 pb-4">
                        Des partenariats et
                        réseautage unique
                    </h5>
                    <p  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600" class="text-justify pl-10 pb-4 text-lg">
                        En s'installant au VITIB, les entreprises ont la possibilité de créer des partenariats stratégiques
                        avec d'autres entreprises du secteur, des centres de recherche, des universités et des incubateurs
                        d'entreprises. Ces collaborations favorisent l'innovation, le partage des connaissances et l'accès à
                        de nouveaux marchés.

                    </p>
                    <h5  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" class=" font-bold text-3md pl-10 pt-8 pb-4">
                        Un soutien gouvernemental
                    </h5>
                    <p  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600" class="text-justify pl-10 pb-4 text-lg">
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
            <h3 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                class="font-bold text-5xl md:text-3xl pl-10 pt-24 pb-8">
                8 avantages unique au Vitib
            </h3>

            <div class="md:flex flex-row  px-4">
                <div class="w-full md:w-1/2 md:pr-10">
                    <h5 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"
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
                        class="text-justify pb-4 md:text-lg">
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
                        class="text-justify pb-4 md:text-lg">
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
                <div class="w-full md:w-1/2">
                    <h5  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="300" class=" font-bold text-3md  md:text-lg md:pl-10 pt-8 pb-4">
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

                <h5  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="800" class=" font-bold text-3md md:pl-10 pt-8 pb-4">
                    Infrastructure de pointe
                </h5>
                <p   data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500"class="text-justify md:pl-10 pb-4 md:text-lg">
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
                <h5  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500" class=" font-bold text-3md  pt-8 md:pl-10 pb-4">
                    Des partenariats et
                    réseautage unique
                </h5>
                <p  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="600" class="text-justify md:pl-10 pb-4 md:text-lg">
                    En s'installant au VITIB, les entreprises ont la possibilité de créer des partenariats stratégiques
                    avec d'autres entreprises du secteur, des centres de recherche, des universités et des incubateurs
                    d'entreprises. Ces collaborations favorisent l'innovation, le partage des connaissances et l'accès à
                    de nouveaux marchés.

                </p>
                <h5  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="500" class=" font-bold text-3md md:pl-10 pt-8 pb-4">
                    Un soutien gouvernemental
                </h5>
                <p  data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="600" class="text-justify md:pl-10 pb-4 md:text-lg">
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
            <img data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500" src="img/cadre.png"
                class="pt-16 pb-8 h-auto">
            <h1 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"
                class="font-bold text-2xl md:text-3xl lg:text-4xl text-center pb-4">
                Le hub des partenariats stratégiques en Afrique
            </h1>
            <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
                class="text-center text-base md:text-lg ">
                Au VITIB, nous croyons en la puissance des partenariats stratégiques. En vous installant ici, vous aurez la
                possibilité de collaborer avec des entreprises locales et internationales, des centres de recherche, des
                universités et des incubateurs d'entreprises pour stimuler votre croissance et votre compétitivité.
            </p>
        </div>

        <div class="text-center pt-8 md:pt-48 md:mb-8">
            <h1 data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500"
                class="font-bold text-3xl md:text-4xl lg:text-5xl text-center pb-4">
                Nos partenaires
            </h1>
            <p data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="600"
                class="text-center text-base md:text-lg  md:px-24 lg:px-72 px-4 pb-4">
                Notre mission est soutenue par l'engagement du gouvernement ivoirien, qui favorise activement le
                développement
                technologique en investissant dans l'innovation et en offrant un soutien précieux aux entreprises établies
                dans
                notre zone.
            </p>
            <div class="flex flex-row">
                <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="700"
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

    <div class=" md:mx-auto md:px-36 md:h-32 ">
        <div class="w-full  items-center">
            <div class="flex flex-row justify-center relative overflow-x-auto md:overflow-x-hidden items-center md:my-4 my-10">
                 <div class="w-1/4 md:w-1/6 md:px-auto text-center animate-marquee whitespace-nowrap">
                     <img class="  " style="height: 100px;width:100px"
                         src="img/logo/bidc.png"
                         alt="">
                 </div>
                 <div class="w-1/4 md:w-1/6 md:px-4 pl-4 animate-marquee whitespace-nowrap">
                     <img class=" " src="img/logo/india.png" style="height: 100px;width:100px"
                         alt="">
                 </div>
                 <div class="w-1/4 md:w-1/6 pl-4 animate-marquee whitespace-nowrap ">

                     <img class="" src="img/logo/armoirie-Côte-dIvoire.png" style="height: 100px;width:100px" alt="">
                 </div>
                 <div class="w-1/4 md:w-1/6 pl-4 animate-marquee whitespace-nowrap ">
                     <img class=" "
                         src="img/logo/boad.png" style="height: 90px;width:100px"
                         alt="">
                 </div>

             </div>
         </div>
    </div>
    <div class="md:pl-32 md:pr-32 px-6 md:py-24 bg-no-repeat  bg-gradient-to-r from-orange-100 from-10% via-30% to-green-100 to-90%"
   >
    <div class="md:flex flex-col bg-repeat-x" style="background-image: url('img/Image6.png')">
        <div class="  md:py-12">
            <h1 class="text-2xl md:text-4xl pb-4 md:pb-14 text-center font-bold text-slate-600 space"
                data-aos="zoom-in-up" data-aos-duration="800" data-aos-delay="500">
                COMMENT NOUS REJOINDRE
            </h1>

            <div class="md:flex flex-row py-4 md:py-8" data-aos="zoom-in-up" data-aos-duration="800"
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
                    <div class="border-dashed border-l-2 border-gray-700">
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
