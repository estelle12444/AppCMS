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

                        {{-- <div class="row">
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
                                                    Demandes de Quotations
                                                @elseif ($key == 'events')
                                                    Demandes de manifestations
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
                                    @endif
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-lg-3">
                                <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                                    @foreach (collect($recentAnnonces)->groupBy('type') as $key => $group)
                                    @php
                                        $route = '';
                                        $message='';
                                        switch ($key) {
                                            case 'tender':
                                                $route = 'tender';
                                                $message='Êtes-vous sûr de vouloir supprimer cet appel d\'offres? ';
                                                break;
                                            case 'careers':
                                                $route = 'career';
                                                $message = 'Êtes-vous sûr de vouloir supprimer cet appel d\'offres?';
                                                break;
                                            case 'jobs':
                                                $route = 'job';
                                                $message = 'Êtes-vous sûr de vouloir supprimer cette offre d\'emploi?';
                                                break;
                                            case 'quotations':
                                                $route = 'quotation';
                                                $message = 'Êtes-vous sûr de vouloir supprimer cette  demande de cotation?';
                                                break;
                                            case 'events':
                                                 $route = 'event';
                                                $message = 'Êtes-vous sûr de vouloir supprimer cette  demande de manifestation?';
                                                break;
                                        }
                                    @endphp

                                        <li class="nav-item">
                                            <a class="nav-link @if ($loop->first) active @endif" id="{{ $key }}-tab" data-toggle="tab" href="#{{ $key }}"  role="tab" aria-controls="{{ $key }}"
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
                                            <div class="tab-pane fade @if ($loop->first) show active @endif"
                                                id="{{ $key }}" role="tabpanel"
                                                aria-labelledby="{{ $key }}-tab">

                                                @php
                                                    $paginator = paginate($group);
                                                @endphp
                                                @foreach ($paginator as $annonce)
                                                    <div class="card-body shadow p-3 mb-5 bg-white rounded">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <h6 class="mb-2 text-info ">Dossier <br> N°{{ $annonce['id'] }}
                                                                </h6>
                                                                <p>Date limite: <br> <strong>
                                                                        {{ $annonce['limit_date'] }}</strong></p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <h3 class="mb-3 text-primary">
                                                                    {{ strip_tags($annonce['title']) }}
                                                                </h3>
                                                                <p> {{ strip_tags($annonce['content']) }}</p>

                                                                <a href="{{ route('Front.admin.activities.applicants', $annonce['id']) }}"
                                                                    class="btn btn-info btn-action mr-1" data-toggle="tooltip"
                                                                    title="" data-original-title="Voir les candidatures">
                                                                    Personnes inscrites <i class="fas fa-users"></i></a>


                                                                    <a href="{{ route('Front.admin.'.$route.'.destroy', $annonce['id']) }}" class="btn btn-danger btn-action trigger--fire-modal-6" onclick="event.preventDefault(); if(confirmDelete('Êtes-vous sûr de vouloir supprimer cet élément ?')) document.getElementById('delete-form-{{ $annonce['id'] }}').submit();">
                                                                        <i class="fas fa-trash"></i>
                                                                    </a>

                                                                <form id="delete-form-{{ $annonce['id'] }}" action="{{ route('Front.admin.'.$route.'.destroy', $annonce['id']) }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                {!! $paginator->links() !!}

                                            </div>
                                        @endforeach
                                    @else
                                        <div class="alert alert-info">
                                            Il n'y a pas d'annonces récentes à afficher.
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script>
    function confirmDelete(message) {
        return confirm(message);
    }
</script>
@endpush
