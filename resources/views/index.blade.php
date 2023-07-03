@extends('layouts')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s" >
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="3" aria-label="Slide 4">
                    <img class="img-fluid" src="img/carousel-4.jpg" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg"  style="height: 650px" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Ensemble bâtissons une autre Afrique
                            </h4>
                            <h3 class="display-1 text-white mb-0 animated zoomIn">celle de grands défis de la nouvelle
                                économie.</h3>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg"  style="height: 650px" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Nous sommes les leader en</h4>
                            <h3 class="display-1 text-white mb-0 animated zoomIn">Solution numérique créative et innovante
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg"  style="height: 650px" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">des Data Center de la zone franche
                            </h4>
                            <h3 class="display-1 text-white mb-0 animated zoomIn"> aux normes internationales</h3>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-4.jpg" style="height: 650px"alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Nous vous invitons  à un
                                partenariat</h4>
                            <h3 class="display-1 text-white mb-0 animated zoomIn">GAGNANT-GAGNANT.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Années d'Expériences</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">15</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Entreprises</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">900</h1>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Visiteurs</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">2000000+</h1>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Projets réalisés</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">2000</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">LE VITIB</h6>
                        <h1 class="display-6 mb-4">#1 La Zone Franche de la Biotechnologie : <span class="text-primary">624
                                hectares</span> d'étendue</h1>
                        <p>La première zone franche ivoirienne.
                            Elle a pour but d’accueillir des entreprises au niveau technologique élevé et qui présentent un
                            fort potentiel de croissance et de création d’emplois.
                            La zone choisie pour la ZBTIC présente une forte valeur écologique et paysagère.</p>
                        <p class="mb-4">Elle est bordée par la Lagune Ebrié, qui s’étend le long de l’Océan Atlantique et
                            constitue le plus grand système lagunaire de Côte d’Ivoire.</p>
                        <div class="d-flex align-items-center mb-4 pb-2">
                            <img class="flex-shrink-0 rounded-circle" src="img/team-2.jpg" alt=""
                                style="width: 50px; height: 50px;">
                            <div class="ps-4">
                                <h6>DOSSO MEBETTI </h6>
                                <small>Directeur Général VITIB SA </small>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="/about">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Projets</h6>
                <h1 class="display-6 mb-4">Nous vous offrons le meilleur dans tous les secteurs </h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-1.jpg" alt="">
                        <h4 class="mb-0">Entrepôts à louer</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-1.jpg" alt="">
                        <h4 class="mb-0">Entrepôts à louer</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/affaire.jpg" alt="">
                        <h4 class="mb-0">Immeubles à bureaux</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-3.jpg" alt="">
                        <h4 class="mb-0">Tours jumelles</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-4.jpg" alt="">
                        <h4 class="mb-0">Allée Commerciale</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-5.jpg" alt="">
                        <h4 class="mb-0">Hôtels</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-6.jpg" alt="">
                        <h4 class="mb-0">Université</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-6.jpg" alt="">
                        <h4 class="mb-0">Université</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-6.jpg" alt="">
                        <h4 class="mb-0">Université</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-6.jpg" alt="">
                        <h4 class="mb-0">Université</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-6.jpg" alt="">
                        <h4 class="mb-0">Université</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="img/service-6.jpg" alt="">
                        <h4 class="mb-0">Université</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">NOUS REJOINDRE</h6>
                        <h1 class="display-6 mb-4">Pourquoi rejoindre la Zone Franche ?</h1>
                        <p class="mb-4"> La ZBTIC est un territoire sur lequel s’appliquent des politiques fiscales et
                            douanières avantageuses.</p>
                        <div class="row g-4">
                            <div class="col-12" style="text-align: justify">

                                La législation ivoirienne relative à la ZBTIC (loi N° 429-2004 du 30 août 2004) attribue le
                                monopole de la gestion, de l’exploitation, de l’aménagement et de la promotion du Village de
                                l’Innovation Technologique à l’entreprise VITIB S.A.

                                A son tour, VITIB S.A. a fait concevoir un Plan de Masse conforme à un statut de ville
                                intelligente (smart city).
                                Ce plan de masse s’appuyant sur un certain nombre d’études menées par des cabinets de renom,
                                prévoit la réalisation d’un certain nombre d’infrastructures.

                                Dans l’optique d’optimiser ses ressources et se concentrer sur son cœur de métier, à savoir
                                la promotion et l’exploitation de son parc technologique, VITIB souhaite s’entourer de
                                partenaires investisseurs nationaux et internationaux pour le développement de cette « ville
                                intelligente ».

                            </div>
                        </div>
                        <br>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="/join">En savoir plus</a>


                    </div>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/feature.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
@endsection
