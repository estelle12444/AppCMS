@extends('layouts')


@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="text-align: justify">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">LE VITIB</h6>
                    <h1 class="display-6 mb-4">#1 Zone Franche de la Biotechnologie <span class="text-primary">624 hectares</span></h1>

                    <p class="mb-4">

                            Par décret, la société VITIB S.A. a été désignée EPE (Entreprise de Promotion et d’Exploitation) avec délégation de service public conformément à la loi instituant le régime de la ZBTIC.</p>



                            La Zone Franche de la Biotechnologie, des Technologies de l’Information et de la Communication (ZBTIC) est la première zone franche ivoirienne avec une étendue de 624 hectares.

                            Elle a pour but d’accueillir des entreprises au niveau technologique élevé et qui présentent un fort potentiel de croissance et de création d’emplois.

                            La zone choisie pour la ZBTIC présente une forte valeur écologique et paysagère.
                            Elle est bordée par la Lagune Ebrié, qui s’étend le long de l’Océan Atlantique et constitue le plus grand système lagunaire de Côte d’Ivoire.
                        </p>
                        <P>
                            On y retrouve les mangroves et la forte biodiversité, caractéristiques de la commune de Grand-Bassam : des atouts qui présentent un fort potentiel de mise en valeur. Par ailleurs, le site présente plusieurs points forts : un accès facile grâce à l’autoroute, au sud, qui le relie à l’aéroport International d’Abidjan (situé à moins de 20 km) et une topographie à très faible relief, avec une légère pente de l’autoroute vers la lagune.

                            Les grands projets d’infrastructures prévus par le Schéma Directeur d’Urbanisme du Grand Abidjan rendront le site encore plus attractif en termes d’accès, avec la réalisation d’un transport léger sur rail qui reliera Grand-Bassam à l’aéroport et à Abidjan, la construction de la nouvelle rocade Nord et l’élargissement de la Route de Bonoua.
                        </p>
                    </div>
                </div>



            </div>
            <br>

        </div>



        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="section-title bg-white text-center text-primary px-3">la ZBTIC</h6>
                    <h4 class="display-6 mb-4">L’organisation de la ZBTIC</h1>
                    <p>La ZBTIC est subdivisée en trois blocs distincts : les blocs A et B situés à cheval de la nouvelle autoroute Abidjan – Bassam (réalisée en 2015) et le futur bloc C, situé sur l’île de Vitré et séparé du bloc B par la lagune Ebrié. </p>
                </div>
                <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="project-item border rounded h-100 p-4" data-dot="01">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded" src="img/project-1.jpg" alt="">
                            <a href="img/project-1.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                        </div>
                        <h6>La Zone Franche(zone sous douane)</h6>
                        <span>Elle accueille les industries de la biotechnologie, les industries d’assemblage et les immeubles de bureaux.
                            Cette zone  a une entrée restreinte.
                        </span>
                    </div>
                    <div class="project-item border rounded h-100 p-4" data-dot="02">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded" src="img/project-2.jpg" alt="">
                            <a href="img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                        </div>
                        <h6>La Zone Administrative</h6>
                        <span>Avec une superficie de 17787 m², la zone administrative comprend des immeubles qui constituent en effet le caractère premier du site vu qu’ils font face à l’axe routier.</span>
                    </div>
                    <div class="project-item border rounded h-100 p-4" data-dot="03">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded" src="img/project-3.jpg" alt="">
                            <a href="img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                        </div>
                        <h6>La Zone Commerciale</h6>
                        <span>Ce secteur abrite un grand espace commercial, un parc de loisirs, un hôtel, les équipements d’enseignement supérieur et de santé et des immeubles d’usage mixte. </span>
                    </div>
                    <div class="project-item border rounded h-100 p-4" data-dot="04">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded" src="img/project-4.jpg" alt="">
                            <a href="img/project-4.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                        </div>
                        <h6>La Zone Résidentielle </h6>
                        <span>Le secteur consacré à l’habitat est situé dans la partie nord du site pour éviter les nuisances causées par le trafic, les activités économiques et profiter au maximum du paysage lagunaire. </span>
                    </div>

                </div>
            </div>
        </div>


        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="section-title bg-white text-center text-primary px-3">Nos Services</h6>
                    <h1 class="display-6 mb-4">Nous excerçons dans ces secteurs</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item d-block rounded text-center h-100 p-4" href="">
                            <img class="img-fluid rounded mb-4" src="img/service-1.jpg" alt="">
                            <h4 class="mb-0">Hébergement d’entreprises</h4>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item d-block rounded text-center h-100 p-4" href="">
                            <img class="img-fluid rounded mb-4" src="img/service-2.jpg" alt="">
                            <h4 class="mb-0">Produits technologiques</h4>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item d-block rounded text-center h-100 p-4" href="">
                            <img class="img-fluid rounded mb-4" src="img/service-3.jpg" alt="">
                            <h4 class="mb-0">Pépinière d’entreprises</h4>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection
