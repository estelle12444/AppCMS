@extends('Front.admin.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Liste des Annonces </h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Annonces</a></div>
                <div class="breadcrumb-item">Liste</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Annonces récentes</h4>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                                    @foreach (collect($recentAnnonces)->groupBy('type') as $key => $group)
                                        <li class="nav-item">
                                            <a class="nav-link @if ($loop->first) active @endif"
                                                id="{{ $key }}-tab" data-toggle="tab" href="#{{ $key }}"
                                                role="tab" aria-controls="{{ $key }}"
                                                aria-selected="@if ($loop->first) true @else false @endif">
                                                @if ($key == 'tender')
                                                    Appels d'offres
                                                @elseif ($key == 'careers')
                                                    Appels à Candidatures
                                                @elseif ($key == 'jobs')
                                                    Offres d'emploi
                                                @elseif ($key == 'quotations')
                                                    Demandes de Cotation
                                                @elseif ($key == 'events')
                                                    Demandes de manifestation
                                                @endif
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <div class="tab-content" id="myTabContent">
                                    @if(count($recentAnnonces) > 0)
                                        @foreach (collect($recentAnnonces)->groupBy('type') as $key => $group)
                                            <div class="tab-pane fade" id="{{ $key }}" role="tabpanel" aria-labelledby="{{ $key }}-tab">
                                                @php
                                                    $paginator = paginate($group);
                                                @endphp
                                                @foreach ($paginator as $annonce)
                                                    <h2> Dossier N°{{ $annonce['id']}}</h2>
                                                    <p> Titre: {{ strip_tags($annonce['title']) }}</p>
                                                    <p>Description: {{ strip_tags($annonce['content']) }}</p>
                                                    <p>Date limite: {{ $annonce['limit_date'] }}</p>
                                                @endforeach
                                                {!! $paginator->links() !!}
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="alert alert-info">
                                            Il n'y a pas d'annonces récentes à afficher.
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
