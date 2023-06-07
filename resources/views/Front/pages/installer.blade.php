@extends('layouts')


@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">S'installer chez Nous</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">S'installer</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    {{-- <div class=" col-md-6 card  container-xxl py-5"style="text-align:justify;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="container">
            <h4>Comment s'installer ?</h4>
            <P> L’État de Côte d’Ivoire permet aux entreprises nationales et internationales de faire
                des affaires, de bénéficier des avantages qu’offre la loi N° 2004-429 du 30 août 2004
                instituant le Régime de ZBTIC en Côte d’Ivoire, pour créer des emplois et promouvoir
                l’exportation à partir de la zone franche de la biotechnologie et des technologies de
                l’information et de la communication (ZBTIC), située dans la commune de Grand-
                Bassam.</P>
        </div>
        <br><br>

        <div class="container">
            <h4>ELIGIBILITE – PRE-REQUIS</h4>
            <P>Le bénéfice du régime de la ZBTIC est soumis à l’obtention d’un agrément délivré
                par l’EPE (VITIB S.A).
                Pour ce faire, les sociétés désireuses de s’implanter sur la zone franche en qualité
                d’Entreprises Utilisatrices doivent opérer dans les domaines d’activités suivants :
            </P>
            <ol>
                <li>  Biotechnologie </li>
                <li> Technologies de l’Information et de la Communication </li>
                <li>  Banques et Établissements financiers d’appui aux investissements réalisés
                    dans la Zone Franche. </li>
            </ol>
            <p>VITIB offre également des opportunités d’investissements dans l’immobilier en BOO
                et BOT sur 180 Ha en aménagement, avec en vue la création d’une nouvelle ville.
                VITIB recherche des partenaires techniques et financiers en mode PPP pour le
                financement et la réalisation de projets urbains sur la Zone Franche de Grand-
                Bassam.
                Par ailleurs, une zone résidentielle et commerciale de 62 Ha est réservée pour offrir
                des solutions de logements de proximité à près de 20000 employés de la ZBTIC.</P>
        </div>
        <br><br>

        <div class="container">
            <h4>ACTIVITES ELIGIBLES</h4>
            <br>
            <h5>Activités industrielles</h5>
            <ul>
                <li>Conception, fabrication et assemblage de produits informatiques</li>
                <li> Conception, fabrication et assemblage de produits télécoms et réseaux</li>
                <li>  Conception, fabrication et assemblage de produits audiovisuels</li>
                <li>  Conception, fabrication et assemblage d&#39;instruments de test et de recherche biotechnologique</li>
                <li>  Fabrication de produits biotechnologiques divers (médecine, pharmacie,agroalimentaire, énergie, environnement, industrie, mines )</li>
                <li>  Production de contenus audiovisuels</li>
                <li>  Edition de logiciels et progiciels</li>

            </ul>

            <h4>ACTIVITES ELIGIBLES</h4>
            <h5>Activités industrielles</h5>
            <ul>
                <li> </li>
                <li></li>
                <li> </li>
            </ul>

            <h4>ACTIVITES ELIGIBLES</h4>
            <h5>Activités industrielles</h5>
            <ul>
                <li> </li>
                <li></li>
                <li> </li>
            </ul>

            <h4>PROCESSUS D'AGREMENT</h4>
            <h5>Activités industrielles</h5>
            <ul>
                <li> </li>
                <li></li>
                <li> </li>
            </ul>


              <a href="/telecharger-pdf" download class="btn btn-primary">
                <i class="bi bi-download"></i>  Télécharger
            </a>
        </div>
    </div>


    </div>
    </div> --}}

    <style>
        .sidebar {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .main-content {
            padding: 20px;
        }
    </style>

    <div class="container" >
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <h5>Etape</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#etape1">s'installer</a></li>
                        <li class="list-group-item"><a href="#etape2">Pré-requis</a></li>
                        <li class="list-group-item"><a href="#etape3">Activités</a></li>
                        <li class="list-group-item"><a href="#etape4">Processus d'agrément</a></li>
                        <li class="list-group-item"><a href="#etape5">Dépôt physique</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="main-content" style="text-align: justify">
                    <h2 id="etape1">Comment s'installer ?</h2>

                    <P> L’État de Côte d’Ivoire permet aux entreprises nationales et internationales de faire
                        des affaires, de bénéficier des avantages qu’offre la loi N° 2004-429 du 30 août 2004
                        instituant le Régime de ZBTIC en Côte d’Ivoire, pour créer des emplois et promouvoir
                        l’exportation à partir de la zone franche de la biotechnologie et des technologies de
                        l’information et de la communication (ZBTIC), située dans la commune de Grand-
                        Bassam.</P>

                        <br>
                    <h3 id="etape2">Eligilibité – Pré-requis</h3>

                    <P>Le bénéfice du régime de la ZBTIC est soumis à l’obtention d’un agrément délivré
                        par l’EPE (VITIB S.A).
                        Pour ce faire, les sociétés désireuses de s’implanter sur la zone franche en qualité
                        d’Entreprises Utilisatrices doivent opérer dans les domaines d’activités suivants :
                    </P>
                    <ol>
                        <li> Biotechnologie </li>
                        <li> Technologies de l’Information et de la Communication </li>
                        <li> Banques et Établissements financiers d’appui aux investissements réalisés
                            dans la Zone Franche. </li>
                    </ol>
                    <p>VITIB offre également des opportunités d’investissements dans l’immobilier en BOO
                        et BOT sur 180 Ha en aménagement, avec en vue la création d’une nouvelle ville.
                        VITIB recherche des partenaires techniques et financiers en mode PPP pour le
                        financement et la réalisation de projets urbains sur la Zone Franche de Grand-
                        Bassam.
                        Par ailleurs, une zone résidentielle et commerciale de 62 Ha est réservée pour offrir
                        des solutions de logements de proximité à près de 20000 employés de la ZBTIC.</P>
                </div>


                <h3 id="etape3">ACTIVITES ELIGIBLES</h3>

                <br>
                <h5 id="etape3">Activités industrielles</h5>
                <ul>
                    <li>Conception, fabrication et assemblage de produits informatiques</li>
                    <li> Conception, fabrication et assemblage de produits télécoms et réseaux</li>
                    <li> Conception, fabrication et assemblage de produits audiovisuels</li>
                    <li> Conception, fabrication et assemblage d&#39;instruments de test et de recherche biotechnologique
                    </li>
                    <li> Fabrication de produits biotechnologiques divers (médecine, pharmacie,agroalimentaire, énergie,
                        environnement, industrie, mines )</li>
                    <li> Production de contenus audiovisuels</li>
                    <li> Edition de logiciels et progiciels</li>
                </ul>


                <h5 id="etape3">Recherche et développement</h5>
                <ul>
                    <li>Biotechnologie appliquée à la santé et à l&#39;agroalimentaire</li>
                    <li> Biotechnologie appliquée à l’environnement</li>
                    <li> Sciences appliquées aux Technologies de l&#39;information</li>

                </ul>

                <h5 id="etape3">Renforcement des capacités</h5>
                <ul>
                    <li>Formation accélérée en langues (Anglais, chinois, management etc.)</li>
                    <li> Formation aux métiers de la Biotechnologie et des TIC</li>

                </ul>

                <h5 id="etape3">Services à valeur ajoutée</h5>

                <p> Les services à valeur ajoutée sont des services dans le cadre desquels les
                    fournisseurs “ajoutent une valeur” aux informations fournies par le client en
                    améliorant leur forme ou leur contenu ou en prévoyant leur stockage et leur
                    recherche.</p>
                <ul>
                    <li> internet haut débit</li>
                    <li> Sécurité informatique</li>
                    <li> Services multimédias</li>
                    <li> Centres de télétravail</li>
                    <li> Commerce électronique</li>
                    <li> E-services (e-Banking, télémédecine, e-agriculture, e-Learning, etc.)</li>
                    <li> Messagerie Vocale</li>
                    <li> Messagerie Electronique</li>
                    <li> Audiotex</li>
                    <li> Echange de Données Informatisées (EDI)</li>
                    <li> Service d&#39;Accès aux Données, le Service d&#39;Information On-line</li>
                    <li> Télécopie Améliorée</li>
                    <li> Transfert de Fichiers</li>
                    <li> Conversion de Protocoles et de Codes</li>
                    <li> Services financiers « offshore »</li>
                    <li> Services financiers offshore de soutien aux activités d&#39;investissement, de production,</li>
                    <li> d&#39;exportation et de recherche.</li>

                </ul>
                <br>
                <h5 id="etape3"> Activités d'accompagnement</h5>
                <p> Outre ces activités privilégiées, la ZBTIC accueille un ensemble de services
                    d&#39;accompagnement :</p>
                <ul>
                    <li> Poste de Police</li>
                    <li> Centres de Santé</li>
                    <li> Complexe sportif</li>
                    <li> Appartements hôtels</li>
                    <li> Hôtel grand standing</li>
                    <li> Centre des Expositions</li>
                    <li> Centre Commercial</li>
                    <li> Centre des affaires</li>
                    <li> Ecoles internationales</li>

                </ul>

                <br>
                <h3 id="etape4">Procédure d'agrément</h3>
                <ul>
              <li> Soumettre le dossier d’agrément avec le formulaire d’implantation dument renseigné</li>
              <li> Etude et analyse du dossier d’agrément</li>
              <li> Décision du Comité d’Agrément</li>
              <li> Respect des engagements financiers</li>
              <li> Respect des autres engagements d’installation conformément au dossier d’agrément qui vaut cahier des charges.</li>
                </ul>
                <br>

                <h3 id="etape5">Dépôt du dossier d'agrément</h3>
                <P>Téléchargez les formulaires suivants :</P>

                <span class="mr-2">
                    <i class="bi bi-download fas fa-2x" ></i>
                </span>
                <span class="align-middle">
                    <a href="/telecharger-pdf" download>   Formulaire de demande d’agrément</a>
                </span>
                <br>

                <span class="mr-2">
                    <i class="bi bi-download fas fa-2x" ></i>
                </span>
                <span class="align-middle">
                    <a href="/download-pdf" download>   Formulaire de demande d’agrément Pépinière</a>
                </span>
                <br>
                <span class="mr-2">
                    <i class="bi bi-download fas fa-2x" ></i>
                </span>
                <span class="align-middle">
                    <a href="/opportunity-pdf" download>  Présenter la liste des opportunités d’investissement (investir au VITIB)</a>
                </span>

            </div>
        </div>
    </div>
    </div>
@endsection
