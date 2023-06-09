@extends('layouts')


@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Opportunités</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Opportunités</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <h6 class="section-title bg-white text-center text-primary px-3">Services</h6> --}}
                <h1 class="display-6 mb-4">Projets d'investissements</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded  h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-1.jpg" alt="">

                    </a>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-0 titre"><strong>Entrepots à louer</strong></h4>
                    <p class="texte">Ce projet vise à créer des infrastructures de type
                        entrepôts, pouvant abriter les chaines
                        d’assemblage de divers produits TIC, ainsi que des espaces de stockage
                        complémentaires pour des industriels et des usagers de la ZBTIC.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4  class="mb-0 titre">Immeubles à bureaux</h4>
                    <p class="texte">Cette zone inclut une zone économique TIC-soft, ayant pour
                        objet l’hébergement des
                        entreprises œuvrant dans le secteur des TIC.
                        Les infrastructures d’accueil de ce type d’entreprises répond à des standards
                        internationaux, en vue de répondre aux exigences des multinationales (Microsoft,
                        Oracle, Apple, Google) attendues dans le parc technologique de la zone franche.
                        Ce sont un total de plus de 20 000 employés qui sont attendus dans la zone.</p>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-2.jpg" alt="">

                    </a>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-3.jpg" alt="">

                    </a>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-0 titre">Tours jumelles</h4>
                    <p class="texte">
                        Situées à l’entrée même de la ZBTIC, ces deux grandes tours jumelles de haut standing
                        ambitionnent de marquer avec force le statut de « parc technologique » de la ZBTIC.
                        Ces deux tours, à l’instar des grandes villes au monde, représenteront la signature
                        architecturale de la ZBTIC.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-0 titre">Immeubles à Bureaux TIC</h4>
                    <p class="texte">La zone administrative du VITIB a pour ambition de devenir
                        le second centre des
                        affaires (business district) de la Côte d’Ivoire, après la commune du Plateau.
                        Il s’agira d’infrastructures de type bureaux, destinées aux entreprises du secteur des
                        TIC qui désirent s’installer en zone franche.
                        C’est la zone prestigieuse du VITIB qui sera rejointe par le train urbain d’Abidjan (dans
                        sa dernière phase).</p>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-4.jpg" alt="">

                    </a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-5.jpg" alt="">

                    </a>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-0 titre">Promotion Immobilière Bloc Ar</h4>
                    <p class="texte">Cette promotion immobilière doit prendre en compte un compte
                        un programme
                        spécifique d’habitants réalisées à titre gracieux pour VITIB S.A.
                        Le reste de la parcelle (80%) pourra être commercialisé.

                        2
                        Ce projet doit inclure à la fois des habitations collectives de moyen et haut standing
                        (appartements) et des habitations pavillonnaires (villas).</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-0 titre">Promotion Immobilière Bloc B</h4>
                    <p class="texte">Ce projet est prévu en trois phases.
                        Il comportera des immeubles à appartement moyen et haut standing, ainsi que des
                        villas haut standing, dont certaines donnent un accès à la plage lagunaire.
                        Cela nécessitera également les travaux de viabilisation (VRD).</p>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-6.jpg" alt="">

                    </a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-5.jpg" alt="">

                    </a>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-0 titre">Université</h4>
                    <p class="texte">Le Village de l’Innovation Technologique a pour vocation
                        d’être le centre de la réflexion
                        technologique en Afrique de l’Ouest.
                        La création d’un établissement académique de niveau universitaire permettra de former
                        les scientifiques et les managers de demain.
                        L’établissement tirera avantage de la proximité des entreprises installées au sein de la
                        zone économique spéciale.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-0 titre">Hôtels d’Affaires</h4>
                    <p class="texte">Voisin du futur centre des Congrès du parc technologique,
                        cet hôtel d’affaires offrira
                        une solution d’hébergement aux différents experts, cadres et visiteurs des sociétés en
                        opération sur le site de la ZBTIC.</p>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-6.jpg" alt="">

                    </a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-5.jpg" alt="">

                    </a>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-0 titre">Hôtel de villégiature</h4>
                    <p class="texte">Ce complexe hôtelier, à la fois pour les affaires et les
                        loisirs, est idéalement situé en
                        bordure de lagune, au cœur de la zone résidentielle et commerciale, à 1km du futur
                        centre des congrès de stature internationale.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-0 titre">Centre des Congrès</h4>
                    <p class="texte">Il s’agit de bâtir un grand centre des congrès
                        international, à 15 minutes de l’aéroport
                        international d’Abidjan, permettant de combler un déficit évident en infrastructure de
                        ce type.</p>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-2.jpg" alt="">

                    </a>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-3.jpg" alt="">

                    </a>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-0 titre">Centre Culturel</h4>
                    <p class="texte">
                        La ville de Grand- Bassam, haut lieu de l’histoire contemporaine de la Côte d’Ivoire et
                        classée au patrimoine mondial de l’UNESCO, souffre de l’absence de centrte culturel à
                        la dimension de sa réputation.
                        Ce projet vise à construire un centre socio-culturel et sportif, comprenant des salles
                        polyvalentes, une bibliothèque, un stade en plein air avec des gradins et une piscine.
                        L’objectif est de faire de ce lieu, un espace de loisirs, d’insertion et d’éducation
                        populaire, de soutien aux créations artistiques et culturelles et un pôle de diffusion et
                        d’innovation socioculturelle.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item d-block rounded text-center h-100 p-4" href="">
                            <img class="img-fluid rounded mb-4" src="img/service-1.jpg" alt="">

                        </a>
                    </div>
                    <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class="mb-0 titre">Centre Commercial</h4>
                        <p class="texte">Le centre commercial sera composé notamment d’un
                            hypermarché, d’une galerie
                            marchande et de parkings destiné à sa clientèle.

                            3
                            µSon dimensionnement définitif sera du ressort de l’investisseur et devra prendre en
                            compte aussi bien nla population de la ZBTIC que celle de la ville de Grand- Bassam et
                            de ses environs.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class="mb-0 titre">Clinique Médiale Internationale</h4>
                        <p class="texte">Une clinique médicale de stature internationale
                            correspondant aux standards
                            internationaux, vise à offrir à minima des services de médecine générale et des
                            services spécialisés à la clientèle et aux travailleurs de la ZBTIC.</p>
                    </div>
                    <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item d-block rounded text-center h-100 p-4" href="">
                            <img class="img-fluid rounded mb-4" src="img/service-2.jpg" alt="">

                        </a>
                    </div>
                </div>
                {{-- <div class="row g-4">
                    <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                       <h5> ACQUISITIONS </h5>
                        <ul>
                        <li> Appels d’offre </li>
                        <li> Demandes de manifestation d’intérêt </li>
                            <li>Demandes de cotation</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h5>OFFRES D’EMPLOI</h5>
                        <ul>
                        <li>Appels à candidature </li>
                        <li> Offres d’emploi </li>
                        </ul>
                    </div>
                </div> --}}


            </div>

        </div>
    </div>
    </div>
    <!-- Service End -->
@endsection
