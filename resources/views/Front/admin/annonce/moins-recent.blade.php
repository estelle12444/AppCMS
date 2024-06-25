@extends('Front.admin.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Liste des annonces</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Anonnces</a></div>
                <div class="breadcrumb-item">Liste</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Annonces moins récentes</h4>

                        </div>


                        <div class="row">
                            <div class="col-lg-3">
                                <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                                    @foreach (collect($lessRecentAnnonces)->groupBy('type') as $key => $group)
                                    @php
                                        $route = '';
                                        $message='';
                                        switch ($key) {
                                            case 'tender':
                                                $route = 'tender';
                                                $message='Êtes-vous sûr de vouloir supprimer cet appel d\'offres? ';
                                                break;
                                            case 'careers':
                                                $route = 'Êtes-vous sûr de vouloir supprimer cet appel d\'offres?';
                                                break;
                                            case 'jobs':
                                                $route = 'Êtes-vous sûr de vouloir supprimer cette offre d\'emploi';
                                                break;
                                            case 'quotations':
                                                $route = 'Êtes-vous sûr de vouloir supprimer cette  demande de cotatation';
                                                break;
                                            case 'events':
                                                $route = 'Êtes-vous sûr de vouloir supprimer cette  demande de manifestation';
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
                                    @foreach (collect($lessRecentAnnonces)->groupBy('type') as $key => $group)
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

                                                                <form action="{{ route('Front.admin.'.$route.'.destroy', $annonce['id']) }}" method="POST" style="display: inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"class="btn btn-danger btn-action trigger--fire-modal-6" onclick="return confirm('{{$message}}')">
                                                                        <i class="fas fa-trash"></i></button>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {!! $paginator->links() !!}

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
