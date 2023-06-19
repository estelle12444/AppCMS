@extends('layouts')


@section('content')
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2" style="text-align: justify;color:black" >


                    <h2> <strong>FORMULAIRE DE  {{  $typeDeDemande->name}}</strong> </h2>
                    <hr>
                    <h5>ZONE FRANCHE - AVANTAGES FISCAUX ET DOUANIERS</h5>
                    <p class="taille">En vertu de la Loi 2004-429 du 30 août 2004, l’État de Côte d’Ivoire permet aux entreprises
                        nationales et internationales de faire des affaires, de
                        bénéficier des avantages qu’offre ladite loi, pour créer des emplois et promouvoir l’exportation
                        à partir de la zone franche de la biotechnologie et
                        des technologies de l’information et de la communication (ZBTIC), située dans la commune de
                        Grand-Bassam.</p>
                    <br>

                    <div id="part1" class="scrolling-text">

                        <h4>Dispositions Juridiques Fiscales et
                            Douaniers Incitatives</h4>
                        <ul>
                            <li> 0% de droits de douanes à l’importation et à l’exportation.</li>
                            <li> 0% d’impôts sur les revenus pendant les 5 premières années.</li>
                            <li> Exonération totale de la patente.</li>
                            <li> 1% d’impôts sur le chiffre d’affaires à partir de la 6ème année avec possibilités de
                                remise d’impôt jusqu’à 50%.</li>
                            <li> 0% de taxe à valeur ajoutée sur les facteurs de production :consommations d’électricité,
                                d’eau et de produitspétroliers…</li>
                            <li> Liberté de transfert des fonds sur les salaires et sur les dividendes distribués</li>
                            <li> Guichet unique pour l’assistance au traitement rapide des opérations administratives.
                            </li>
                            <li> Titre de séjour pour les étrangers et leurs familles.</li>
                            <li> Aucune limite sur les investissements étrangers et locaux.</li>
                        </ul>
                        <br>
                        <h4>Eligibilite – Pré-requis</h4>
                        <p>Le bénéfice du régime de la ZBTIC est soumis à l’obtention
                            d’un agrément délivré par l’EPE (VITIB S.A). Pour ce faire, les
                            étapes suivantes doivent être observées :</p>

                        <h6>Eligibilite</h6>
                        <P>Les sociétés désireuses de s’implanter sur la zone franche en
                            qualité d’Entreprises Utilisatrices doivent opérer dans les
                            domaines d’activités suivants :</P>
                        <ol>
                            <li> Biotechnologie</li>
                            <li> Technologies de l’Information et de la Communication</li>
                            <li> Banques et Établissements financiers d’appui aux investissements réalisés dans la Zone
                                Franche.</li>
                        </ol>

                        <hr>
                        <h5> OBLIGATIONS LIEES A L’OCTROI D’AGREMENT </h5>
                        <p>La délivrance effective de <strong>l’agrément </strong> requiert préalablement:</p>

                        <ol>
                            <li> Le dépôt du dossier d’agrément et son analyse par le comité d’agrément
                            </li>
                            <p> Le dossier d’agrément devra comporter :</p>
                            <ul>
                                <li> Un formulaire de demande d’agrément dument renseigné par le représentant légal de
                                    l’entreprise</li>
                                <li>Les statuts de la société</li>
                                <li>Un résumé du business plan de l’activité qui sera exercée sur le parc et faire
                                    ressortir l’évolution sur cinq (5) ans :</li>
                                <li> Des états financiers des trois derniers exercices, pour une entreprise existante.
                                </li>
                                <li>Des états financiers prévisionnels sur cinq ans.</li>
                            </ul>

                            <li> La signature des Conditions Générales d’Implantation (CGI) ;</li>
                            <li> La signature <strong> contrat de bail commercial</strong> en cas de location de bureaux ou
                                d’un <strong>contrat
                                    de bail emphytéotique de 15 à 50 ans renouvelable</strong> en cas d’option de
                                construction,correspondant aux besoins exprimés en espaces;</li>
                            <li> L’acquittement de la facture de <strong>frais d’agrément</strong>;</li>
                            <li> Le paiement de redevance sur le chiffre d’affaires dès ledébut de l’exploitation;</li>
                            <li> La communication du dossier technique de construction sur la ZBTIC y compris les délais;
                            </li>
                            <li> Le plan de financement du projet;</li>
                            <li> Les dispositions en matière de sécurité, d’hygiène, de salubrité publique, de protection de
                                l’environnement, de la faune, de la flore et du patrimoine national;</li>
                            <li> Pour les entreprises de Biotechnologie, fournir l’Étude d’Impact Environnemental et Social
                                (EIES).</li>
                        </ol>
                        <hr>
                        <button type="button" class="btn btn-danger right"
                            onclick="nextPart('part1', 'part2')">Commencer</button>
                        <br>
                    </div>


                    <div class="form-part " id="part2" >
                        <div class="">
                            <h3>Identification de l’entreprise</h3>

                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field1" class="form-label">Raison sociale :</label>
                                            <input type="text" class="form-control" id="field1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Forme Juridique :</label>
                                            <input type="text" class="form-control" id="field2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">RCCM</label>
                                            <input type="text" class="form-control" id="field2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field1" class="form-label">Compte contribuable :</label>
                                            <input type="text" class="form-control" id="field1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Siège social :</label>
                                            <input type="text" class="form-control" id="field2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Capital social :</label>
                                            <input type="text" class="form-control" id="field2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field1" class="form-label">Téléphone:</label>
                                            <input type="text" class="form-control" id="field1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Fax :</label>
                                            <input type="text" class="form-control" id="field2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field1" class="form-label">Mail:</label>
                                            <input type="text" class="form-control" id="field1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field1" class="form-label">Site Internet :</label>
                                            <input type="text" class="form-control" id="field1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label"> Fonction :</label>
                                            <input type="text" class="form-control" id="field2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Représentant légal:</label>
                                            <input type="text" class="form-control" id="field2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Activités à développer
                                                en zone franche</label>
                                            <input type="text" class="form-control" id="field2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="field2" class="form-label">Type d’implantation à la
                                            ZBTIC</label>
                                        <div class="row">

                                            <div class="mb-3">
                                                <input type="checkbox">
                                                <label class="custom-control-label" for="remember-me">Nouvelle société
                                                    créée</label>
                                            </div>
                                            <div class="mb-3">
                                                <input type="checkbox">
                                                <label class="custom-control-label" for="remember-me">Société en
                                                    exploitation
                                                    à transférer</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label> <strong>Avez-vous des actionnaires ?</strong> </label>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="response">Oui:</label>
                                        <input type="checkbox" id="response" onchange="showForm(this.checked)">
                                        <label for="response">Non:</label>
                                        <input type="checkbox" id="response">
                                    </div>
                                </div>
                            </div>


                            <div id="actionnaireForm" style="display: none;">
                                <br>
                                <p> <strong>Présentation des actionnaires</strong> </p>
                             <br>
                                <form>
                                    <div id="actionnairesContainer">
                                        <!-- Les champs pour chaque actionnaire seront ajoutés dynamiquement ici -->
                                    </div>
                                    <br>
                                    <button type="button" class="btn btn-primary" onclick="ajouterActionnaire()">Ajouter
                                        un
                                        actionnaire</button>
                                </form>
                            </div>
                            <br>
                            <p> <strong>Prévisions de création d’emplois sur le territoire de la zone franche </strong></p>
                            <br>
                            <form>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> Emplois directs </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> <strong>Cadres & Agents de
                                                maitrise</strong>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> <strong> Employés</strong></label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> <strong>Total</strong> </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label">Annee 1</label>

                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label">Annee 2</label>

                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label">Annee 3</label>

                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                </div>
                            </form>
                            <br>
                            <p> <strong>Prévisions de création d’emplois sur le territoire de la zone franche </strong></p>
                            <br>
                            <form>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> Emplois directs </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> <strong>Cadres & Agents de
                                                maitrise</strong>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> <strong> Employés</strong></label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> <strong>Total</strong> </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label">Annee 1</label>

                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label">Annee 2</label>

                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                </div>
                                <br>

                            </form>
                            <br>
                            <p> <strong>Prévisions de création d’emplois sur le territoire de la zone franche </strong></p>
                            <br>
                            <form>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> Emplois directs </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> <strong>Cadres & Agents de
                                                maitrise</strong>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> <strong> Employés</strong></label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label"> <strong>Total</strong> </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label">Annee 1</label>

                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="field7" class="form-label">Annee 2</label>

                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                    <div class="col-md-3">

                                        <input type="text" class="form-control" id="field7">
                                    </div>
                                </div>
                                <br>

                            </form>
                            <br>

                            <button type="button" class="btn btn-primary right"
                                onclick="nextPart('part2', 'part3')">Continuer</button>
                            <button type="button" class="btn btn-outline-primary right"
                                onclick="prevPart('part2', 'part1')">Précedent</button>

                        </div>
                    </div>


                    <div class="form-part " id="part3">
                        <div id="section1" class="form-section">
                            <h2>Section 1</h2>
                            <form>
                                <!-- Ajoutez ici les champs de la section 1 -->
                                <div class="form-group">
                                    <label for="field1">Champ 1 :</label>
                                    <input type="text" id="field1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="field2">Champ 2 :</label>
                                    <input type="text" id="field2" class="form-control">
                                </div>
                                <button class="btn btn-primary" onclick="nextSection()">Suivant</button>
                            </form>
                        </div>

                        <div id="section2" class="form-section" style="display: none;">
                            <h2>Section 2</h2>
                            <form>
                                <!-- Ajoutez ici les champs de la section 2 -->
                                <div class="form-group">
                                    <label for="field3">Champ 3 :</label>
                                    <input type="text" id="field3" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="field4">Champ 4 :</label>
                                    <input type="text" id="field4" class="form-control">
                                </div>
                                <button class="btn btn-primary" onclick="nextSection()">Suivant</button>
                            </form>
                        </div>

                        <div id="section3" class="form-section" style="display: none;">
                            <h2>Section 3</h2>
                            <form>
                                <!-- Ajoutez ici les champs de la section 3 -->
                                <div class="form-group">
                                    <label for="field5">Champ 5 :</label>
                                    <input type="text" id="field5" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="field6">Champ 6 :</label>
                                    <input type="text" id="field6" class="form-control">
                                </div>
                                <button class="btn btn-primary" onclick="submitForm()">Soumettre</button>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>


    </div>
@endsection
