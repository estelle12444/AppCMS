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
            <div class="container text-gray-600 dark:text-gray-400" style="text-align: justify;padding:0 60 60 60;">

                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <h3 class="text-center"> FORMULAIRE DE {{ $typeDeDemande->name }} </h3>
                    <hr>
                    <br>
                    <div id="part1">
                        <h5 class="">ZONE FRANCHE - AVANTAGES FISCAUX ET DOUANIERS</h5>
                        <p class="text-justify px-10">En vertu de la Loi 2004-429 du 30 août 2004, l’État de Côte d’Ivoire
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
                        <p class="text-justify px-10">Le bénéfice du régime de la ZBTIC est soumis à l’obtention
                            d’un agrément délivré par l’EPE (VITIB S.A). Pour ce faire, les
                            étapes suivantes doivent être observées :</p>

                        <h5 class="px-10">Eligibilité</h5>
                        <P class="text-justify px-10">Les sociétés désireuses de s’implanter sur la zone franche en
                            qualité d’Entreprises Utilisatrices doivent opérer dans les
                            domaines d’activités suivants :</P>
                        <ol>
                            @foreach ($eligibilities as $eligibility)
                                <li> <strong>{{ $loop->iteration }} </strong>: {{ $eligibility->eligibility->title }} </li>


                                <!-- Afficher d'autres détails de l'obligation selon vos besoins -->
                            @endforeach
                        </ol>

                        <hr>
                        <h5 class=""> OBLIGATIONS LIEES A L’OCTROI D’AGREMENT </h5>
                        <p class="text-justify px-10">La délivrance effective de <strong>l’agrément </strong> requiert
                            préalablement:</p>

                        <ul class="text-justify px-10">
                            <li> Le dépôt du dossier d’agrément et son analyse par le comité d’agrément
                            </li>
                        </ul>
                        <ul class="text-justify px-10">

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

                            <h5>Identification de l’entreprise</h5>

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



                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field1" class="form-label">Raison sociale :</label>
                                            <input type="text" value="  {{ $company->name }}" class="form-control"
                                                id="field2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Forme Juridique :</label>
                                            <input type="text" value=" {{ $company->legal_form }}" class="form-control"
                                                id="field2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">RCCM</label>
                                            <input type="text" value="  {{ $company->RCCM }}" class="form-control"
                                                id="field2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field1" class="form-label">Compte contribuable :</label>
                                            <input type="text" value="  {{ $company->taxpayer_account }}"
                                                class="form-control" id="field1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Siège social :</label>
                                            <input type="text" value="  {{ $company->siege }}" class="form-control"
                                                id="field2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Capital social :</label>
                                            <input type="text" value="  {{ $company->capital }}" class="form-control"
                                                id="field2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field1" class="form-label">Téléphone:</label>
                                            <input type="text" value="  {{ $company->phone }}" class="form-control"
                                                id="field1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Fax :</label>
                                            <input type="text" value="  {{ $company->cellulaire }}" class="form-control"
                                                id="field2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field1" class="form-label">Mail:</label>
                                            <input type="text" value="  {{ $company->email }}" class="form-control"
                                                id="field1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field1" class="form-label">Site Internet :</label>
                                            <input type="text" value="  {{ $company->website_link }}"
                                                class="form-control" id="field1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label"> Fonction :</label>
                                            <input type="text" value="  {{ $company->fonction }}"
                                                class="form-control" id="field2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Représentant légal:</label>
                                            <input type="text"value="  {{ $company->legal_agent }}"
                                                class="form-control" id="field2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="field2" class="form-label">Activités à développer
                                                en zone franche</label>
                                            <input type="text" value="  {{ $company->activity }}"
                                                class="form-control" id="field2">
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

                                <br>

                                <h5>Documents administratifs à transmettre en annexe :</h5>
                                <ul class="space-y-4">
                                    @foreach ($documentsType as $key => $documentType)
                                        <li>

                                            <div class=" items-center">
                                                <label for="document_{{ $documentType->id }}"
                                                    class="text-sm font-medium text-gray-600 dark:text-gray-400">
                                                    {{ $documentType->typeDocuments->name }}
                                                </label>
                                                <br>

                                                {{-- <input type="file"
                                                    name="documents[{{ $documentType->id }}]"
                                                    class=""> --}}

                                                    <input type="file" id="document_{{ $documentType->id }}" name="documents[{{ $key }}]" class=" bg-white border border-gray-300 rounded-md p-2 "
                                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                                    accept=".pdf, .txt, .docx">
                                                <small id="inputGroupFileAddon04" class="form-text text-muted">Sélectionnez un
                                                    document (.pdf, .txt, .docx).</small>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                                <button type="button" class="btn btn-primary right text-white"
                                    onclick="nextPart('part2', 'part3')">Continuer</button>
                                <button type="button" class="btn btn-outline-primary  "
                                    onclick="prevPart('part2', 'part1')">Précedent</button>


                    </div>

                    <div class="form-part " id="part3">
                        <br>
                        <h2 class="text-center">Engagement</h2>
                        <br>

                        <p class="text-justify ">Je/nous soussigné(s) .............
                            {{ app('App\Http\Controllers\ProfilController')->getUsername() }}
                            .................................................................................certifie/certifions
                            que je suis/nous sommes autorisé(s) à remplir ce formulaire de demande d’agrément en vue de
                            notre installation à la
                            ZBTIC. J’accepte/nous acceptons de régler toutes les obligations appliquées à ladite
                            demande.
                            Je/Nous certifions que
                            toutes les informations données sont justes sauf erreur ou omission de ma/notre part.</p>

                        <button type="submit" class="btn btn-primary right text-white">valider</button>
                        </form>
                        <button type="button" class="btn btn-outline-primary "
                            onclick="prevPart('part3', 'part2')">Précedent</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
