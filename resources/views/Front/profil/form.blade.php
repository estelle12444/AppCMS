@extends('Front.profil.layout')
@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">

        </h2>
        <!-- CTA -->
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="container" style="text-align: justify;padding:0 60 60 60;color:black">
                <h3> <strong>FORMULAIRE DE {{ $typeDeDemande->name }}</strong> </h3>
                <hr>
                <div id="part1">


                    <h5>ZONE FRANCHE - AVANTAGES FISCAUX ET DOUANIERS</h5>
                    <p class="taille">En vertu de la Loi 2004-429 du 30 août 2004, l’État de Côte d’Ivoire permet aux
                        entreprises
                        nationales et internationales de faire des affaires, de
                        bénéficier des avantages qu’offre ladite loi, pour créer des emplois et promouvoir l’exportation
                        à partir de la zone franche de la biotechnologie et
                        des technologies de l’information et de la communication (ZBTIC), située dans la commune de
                        Grand-Bassam.</p>
                    <br>

                    <h4>Dispositions Juridiques Fiscales et
                        Douaniers Incitatives</h4>
                    <ul>
                        @foreach ($dispositions as $disposition)
                            <li>{{ $loop->iteration }}: <strong>{{ $disposition->disposition->percent }} %

                                    {{ $disposition->disposition->title }}</strong>
                                {{ $disposition->disposition->content }}
                            </li>
                            <!-- Afficher d'autres détails de l'obligation selon vos besoins -->
                        @endforeach
                    </ul>
                    <br>
                    <h4>Eligibilité – Pré-requis</h4>
                    <p>Le bénéfice du régime de la ZBTIC est soumis à l’obtention
                        d’un agrément délivré par l’EPE (VITIB S.A). Pour ce faire, les
                        étapes suivantes doivent être observées :</p>

                    <h5>Eligibilité</h5>
                    <P>Les sociétés désireuses de s’implanter sur la zone franche en
                        qualité d’Entreprises Utilisatrices doivent opérer dans les
                        domaines d’activités suivants :</P>
                    <ol>
                        @foreach ($eligibilities as $eligibility)
                            <li> <strong>{{ $loop->iteration }} </strong>: {{ $eligibility->eligibility->title }} </li>


                            <!-- Afficher d'autres détails de l'obligation selon vos besoins -->
                        @endforeach
                    </ol>

                    <hr>
                    <h5> OBLIGATIONS LIEES A L’OCTROI D’AGREMENT </h5>
                    <p>La délivrance effective de <strong>l’agrément </strong> requiert préalablement:</p>

                    <ul>
                        <li> Le dépôt du dossier d’agrément et son analyse par le comité d’agrément
                        </li>
                    </ul>
                    <ul>

                        @foreach ($obligations as $obligation)
                            <li><strong>{{ $loop->iteration }}: {{ $obligation->obligation->title }} </strong> </li>
                            <p> {{ $obligation->obligation->content }}</p>

                            <!-- Afficher d'autres détails de l'obligation selon vos besoins -->
                        @endforeach

                    </ul>


                    <hr>
                    <button type="button" class="btn btn-primary text-white right"
                        onclick="nextPart('part1', 'part2')">Commencer</button>
                    <br>
                </div>


                <div class="form-part " class="scrolling-inputs" id="part2">
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
                        {{-- <h3> Prévisions de création d’emplois sur le territoire de la zone franche </h3>
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
                        <h3> Prévisions de création d’emplois sur le territoire de la zone franche </h3>
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
                        <h3> Prévisions de création d’emplois sur le territoire de la zone franche </h3>
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
                        <br> --}}

                        <h2>Documents administratifs à transmettre en annexe :</h2>


                        <button type="button" class="btn btn-primary right text-white"
                            onclick="nextPart('part2', 'part3')">Continuer</button>
                        <button type="button" class="btn btn-outline-primary  "
                            onclick="prevPart('part2', 'part1')">Précedent</button>

                    </div>
                </div>


                <div class="form-part " id="part3">


                    <br>
                    <h2>Engagement</h2>
                    <br>
                    <form>
                        <p>Je/nous soussigné(s) .............
                            {{ app('App\Http\Controllers\ProfilController')->getUsername() }}
                           .................................................................................certifie/certifions
                            que je suis/nous sommes autorisé(s) à remplir ce formulaire de demande d’agrément en vue de
                            notre installation à la
                            ZBTIC. J’accepte/nous acceptons de régler toutes les obligations appliquées à ladite demande.
                            Je/Nous certifions que
                            toutes les informations données sont justes sauf erreur ou omission de ma/notre part.</p>
                    </form>
                    <button type="submit" class="btn btn-primary right text-white">valider</button>
                    <button type="button" class="btn btn-outline-primary "
                        onclick="prevPart('part3', 'part2')">Précedent</button>


                </div>

            </div>




        </div>


    </div>
@endsection
