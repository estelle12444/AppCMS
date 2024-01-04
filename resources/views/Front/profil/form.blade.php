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
            <div class="lg:container text-gray-600 dark:text-gray-400" style="text-align: justify;padding:0 60 60 60;">

                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <h3 class="text-center"> FORMULAIRE DE {{ $typeDeDemande->name }} </h3>
                    <hr>
                    <br>
                    <div id="part1">
                        <h5 class="">ZONE FRANCHE - AVANTAGES FISCAUX ET DOUANIERS</h5>
                        <p class="text-justify lg:px-10 md:px-0">En vertu de la Loi 2004-429 du 30 août 2004, l’État de Côte
                            d’Ivoire
                            permet aux
                            entreprises
                            nationales et internationales de faire des affaires, de
                            bénéficier des avantages qu’offre ladite loi, pour créer des emplois et promouvoir l’exportation
                            à partir de la zone franche de la biotechnologie et
                            des technologies de l’information et de la communication (ZBTIC), située dans la commune de
                            Grand-Bassam.</p>
                        <br>

                        <h4 class="">Dispositions Juridiques Fiscales et
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
                        <h4 class="">Eligibilité – Pré-requis</h4>
                        <p class="text-justify lg:px-10 md:px-0">Le bénéfice du régime de la ZBTIC est soumis à l’obtention
                            d’un agrément délivré par l’EPE (VITIB S.A). Pour ce faire, les
                            étapes suivantes doivent être observées :</p>

                        <h5 class="lg:px-10 md:px-0">Eligibilité</h5>
                        <P class="text-justify lg:px-10 md:px-0">Les sociétés désireuses de s’implanter sur la zone franche
                            en
                            qualité d’Entreprises Utilisatrices doivent opérer dans les
                            domaines d’activités suivants :</P>
                        <ol>
                            @foreach ($eligibilities as $eligibility)
                                <li> <strong>{{ $loop->iteration }} </strong>: {{ $eligibility->eligibility->title }} </li>


                                <!-- Afficher d'autres détails de l'obligation selon vos besoins -->
                            @endforeach
                        </ol>

                        <hr>
                        <h5 class="pt-4"> OBLIGATIONS LIEES A L’OCTROI D’AGREMENT </h5>
                        <p class="text-justify lg:px-10 md:px-0">La délivrance effective de <strong>l’agrément </strong>
                            requiert
                            préalablement:</p>

                        <ul class="text-justify lg:px-10 md:px-0">
                            <li> Le dépôt du dossier d’agrément et son analyse par le comité d’agrément
                            </li>
                        </ul>
                        <ul class="text-justify lg:px-10 md:px-0">

                            @foreach ($obligations as $obligation)
                                <li><strong>{{ $loop->iteration }}: {{ $obligation->obligation->title }} </strong> </li>
                                <p> {{ $obligation->obligation->content }}</p>

                                <!-- Afficher d'autres détails de l'obligation selon vos besoins -->
                            @endforeach

                        </ul>
                        <hr>

                        <button onclick="nextPart('part1', 'part2')"
                            class=" right px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500  border border-transparent rounded-lg active:bg-blue-500  hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple">
                            Commencer </button>
                        <br>
                    </div>

                    <div class="form-part " class="scrolling-inputs" id="part2">

                        <h4>Identification de l’entreprise</h4>
                        <div class="alert alert-primary text-center">
                            Veuillez verifier les informations de votre entreprise
                        </div>

                        <form action="{{ route('store', ['typeDeDemande' => $typeDeDemande]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="row pt-4">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field1" class="form-label "> <strong>Raison sociale :</strong></label>
                                        {{ $company->name }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>Forme Juridique :</strong></label>
                                        {{ $company->legal_form }}
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>RCCM :</strong></label>
                                        {{ $company->RCCM }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field1" class="form-label"> <strong>Compte contribuable
                                                :</strong></label>
                                        {{ $company->taxpayer_account }}
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>Siège social :</strong></label>
                                        {{ $company->siege }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>Capital social :</strong></label>
                                        {{ $company->capital }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field1" class="form-label"> <strong>Téléphone:</strong></label>
                                        {{ $company->phone }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>Fax :</strong></label>
                                        {{ $company->cellulaire }}
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field1" class="form-label"> <strong>Mail:</strong></label>
                                        {{ $company->email }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field1" class="form-label"> <strong>Site Internet :</strong></label>
                                        {{ $company->website_link }}
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong> Fonction :</strong></label>
                                        {{ $company->fonction }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>Représentant
                                                légal:</strong></label>
                                        {{ $company->legal_agent }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field2" class="form-label"> <strong>Activités à développer
                                                en zone franche:</strong></label>
                                        {{ $company->activity }}
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
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
                                    </div> --}}
                            </div>
                            <div class=" mb-10  ">
                                <a href="{{ route('company-edit', ['company' => $company->id,'typeDeDemande' => $typeDeDemande]) }}"
                                    class=" px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500  border border-transparent rounded-lg active:bg-blue-500  hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple">
                                    Modifier
                                    <span class="ml-2" aria-hidden="true">+</span>

                                </a>
                            </div>

<br>
                            <div class="py-4">
                                <h4>Documents administratifs à transmettre en annexe :</h4>

                                <div class=" py-2 grid grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-2">
                                    @foreach ($documentsType as $key => $documentType)
                                        <div class=" items-center">
                                            <label for="document_{{ $documentType->id }}"
                                                class="text-sm font-medium text-gray-600 dark:text-gray-400">
                                                <strong>{{ $documentType->typeDocuments->name }}</strong>
                                                <small id="inputGroupFileAddon04" class="form-text text-muted">(
                                                    fichier de type(.pdf, .txt, .docx))</small>
                                            </label>
                                            <br>

                                            {{-- <input type="file"
                                                    name="documents[{{ $documentType->id }}]"
                                                    class=""> --}}


                                            <input type="file" id="document_{{ $documentType->id }}"
                                                name="documents[{{ $key }}]"
                                                class=" bg-white border border-gray-300 rounded-md p-2 "
                                                aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                                accept=".pdf, .txt, .docx">

                                        </div>
                                    @endforeach
                                </div>
                            </div>


                            <button type="button"
                                class=" right px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500  border border-transparent rounded-lg active:bg-blue-500  hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple"
                                onclick="nextPart('part2', 'part3')">Continuer</button>

                            <button type="button" class="btn btn-outline-warming  text-white "
                                onclick="prevPart('part2', 'part1')">Précedent</button>


                    </div>

                    <div class="form-part " id="part3">
                        <br>
                        <h2 class="text-center">Engagement</h2>
                        <br>

                        <p class="text-justify py-4 ">Je/nous soussigné(s) .............
                            {{ app('App\Http\Controllers\ProfilController')->getUsername() }}
                            .................................................................................certifie/certifions
                            que je suis/nous sommes autorisé(s) à remplir ce formulaire de demande d’agrément en vue de
                            notre installation à la
                            ZBTIC. J’accepte/nous acceptons de régler toutes les obligations appliquées à ladite
                            demande.
                            Je/Nous certifions que
                            toutes les informations données sont justes sauf erreur ou omission de ma/notre part.</p>

                        <button type="submit"
                            class=" right px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500  border border-transparent rounded-lg active:bg-blue-500  hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple">valider</button>
                        </form>
                        <button type="button" class="btn btn-outline-warming  text-white"
                            onclick="prevPart('part3', 'part2')">Précedent</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
