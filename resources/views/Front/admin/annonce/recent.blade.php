@extends('Front.admin.layout')

@section('content')
<section class="section">
        <div class="section-header">
            <h1>Liste des Annonces </h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Company</a></div>
                <div class="breadcrumb-item">Liste</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Annonces  récentes</h4>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tender-tab" data-toggle="tab" href="#tender" role="tab" aria-controls="tender" aria-selected="true">Appel d'offres</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="career-tab" data-toggle="tab" href="#career" role="tab" aria-controls="career" aria-selected="false">Appel à candidature</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="job-tab" data-toggle="tab" href="#job" role="tab" aria-controls="job" aria-selected="false">Offres d'emploi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="quotation-tab" data-toggle="tab" href="#quotation" role="tab" aria-controls="quotation" aria-selected="false">Demandes de cotation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="event-tab" data-toggle="tab" href="#event" role="tab" aria-controls="event" aria-selected="false">Demande de manifestation</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    @foreach ($recentAnnonces as $annonce)
                                        <div class="tab-pane fade" id="{{ strtolower($annonce['type']) }}" role="tabpanel" aria-labelledby="{{ strtolower($annonce['type']) }}-tab">
                                            <h2> Dossier N'{{ $annonce['id']}}</h2>
                                        <p> Titre: {{ strip_tags($annonce['title']) }}</p>
                                        
                                            <p>Description: {{strip_tags( $annonce['content'] )}}</p>
                                            <p>Date limite: {{$annonce['date'] }}</p>
                                        </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
