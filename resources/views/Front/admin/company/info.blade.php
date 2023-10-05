@extends('Front.admin.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Entreprise</a></div>
                <div class="breadcrumb-item">Details</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tous les details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('validerCompagnie', ['id' => $companies->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nom de l'entreprise
                                        :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->name }}</p>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Process :</label>
                                        <div class="col-sm-12 col-md-5">
                                <div class="progress" data-height="10"  data-toggle="tooltip" title="{{ $completionPercentage }}%">
                                    <div class="progress-bar bg-success" style="width: {{ $completionPercentage }}%;"></div>
                                </div>
                                        </div></div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Raison social
                                        :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->RCCM }}</p>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 h6">Forme juridique
                                        :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->legal_form }}</p>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Numéro de compte
                                        fiscal :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->taxpayer_account }}</p>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Capital :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->capital }}</p>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Siège social
                                        :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->siege }}</p>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Téléphone :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->phone }}</p>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cellulaire
                                        :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->cellulaire }}</p>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">E-mail :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->email }}</p>
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lien vers le site
                                        Web :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->website_link }}</p>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Agent légal
                                        :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->legal_agent }}</p>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fonction :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->fonction }}</p>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Activité :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->activity }}</p>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type d'emplacement
                                        :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <p class="h6">{{ $companies->location_type }}</p>
                                    </div>
                                </div>



                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Valider</button>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Fonction pour mettre à jour la barre de progression
    function updateProgressBar(percentage) {
        $('#progress-bar').css('width', percentage + '%');
        $('#progress-bar').attr('title', percentage + '%');
    }

    // Exemple : Mettez à jour la barre de progression avec un pourcentage (50% dans cet exemple)
    var completionPercentage = {{ $completionPercentage }}; // Récupérez le pourcentage depuis le contrôleur
    updateProgressBar(completionPercentage);
</script>

        @endsection
