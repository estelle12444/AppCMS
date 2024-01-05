@extends('Front.admin.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Accueil </h1>
        </div>


        <!-- Main Content -->

        <div class="section-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Administrateur</h4>
                            </div>
                            <div class="card-body">
                                1
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Annonces télechargés</h4>
                            </div>
                            <div class="card-body">
                                {{ \App\Models\PageCount::all()->sum('count') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4> Comptes entreprises en attente :</h4>
                            </div>
                            <div class="card-body">
                                {{ $pendingCompaniesCount }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4> Comptes entreprises actifs :</h4>
                            </div>
                            <div class="card-body">
                                {{ $activeCompaniesCount }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Statistique des visites du sites</h4>
                            <div class="card-header-action">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary">Mois</a>
                                    <a href="#" class="btn"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart" height="182" class="chartjs-render-monitor"></canvas>
                            <div class="statistic-details mt-sm-4">
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span> 7%</span>
                                    <div class="detail-value">3</div>
                                    <div class="detail-name"> Vues aujourd'hui</div>
                                </div>
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-danger"><i
                                                class="fas fa-caret-down"></i></span> 23%</span>
                                    <div class="detail-value">10</div>
                                    <div class="detail-name">Cette semaine</div>
                                </div>
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span>9%</span>
                                    <div class="detail-value">20</div>
                                    <div class="detail-name">Ce mois</div>
                                </div>
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span> 19%</span>
                                    <div class="detail-value">20</div>
                                    <div class="detail-name">Cette annee</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Récentes Annonces</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                                @foreach ($recentAnnonces as $annonce)
                                <li class="media">
                                    <img class="mr-3 rounded-circle" width="50" src="{{ asset('assets/img/avatar/avatar-1.png') }}" alt="avatar">
                                    <div class="media-body">
                                        <div class="float-right text-primary">{{$annonce['date'] }}</div>
                                        <div class="media-title">Titre: {{ strip_tags($annonce['title']) }}</div>
                                        <span class="text-small text-muted"> {{strip_tags( $annonce['content'] )}}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="text-center pt-1 pb-1">
                                <a href="/annonces-recentes" class="btn btn-primary btn-lg btn-round">
                                     Voir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Liste des comptes Entreprises</h4>
                            <div class="card-header-form">
                                <a href="/company" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        {{-- <th>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                    class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th> --}}
                                        <th>Nom de l'entreprise</th>
                                        <th>Raison Sociale</th>
                                        <th>Siège Social</th>
                                        <th>Date_de_creation</th>
                                        <th>Process</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($companies as $company)
                                        <tr>

                                            {{-- <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td> --}}
                                            <td>{{ Str::substr(strip_tags($company->name), 0, 20) . '...' }}</td>
                                            <td class="align-middle">
                                                {{ Str::substr(strip_tags($company->RCCM), 0, 20) . '...' }}
                                            </td>
                                            <td>
                                                {{ Str::substr(strip_tags($company->siege), 0, 20) . '...' }}
                                            </td>
                                            <td>{{ $company->created_at }}</td>

                                            <td>
                                                {{-- <div class="progress" data-height="4" data-toggle="tooltip" title="{{ $completionPercentage }}%">
                                                <div class="progress-bar bg-success" style="width: {{ $completionPercentage }}%;"></div>
                                            </div> --}}
                                            </td>
                                            <td>


                                                @php
                                                    $companyUser = $users->where('company_id', $company->id)->first();
                                                @endphp

                                                @if ($companyUser && $companyUser->status)
                                                    <div class="badge badge-success">Actif</div>
                                                @else
                                                    <div class="badge badge-warning">En attente</div>
                                                @endif


                                            </td>
                                            <td>
                                                <a href="{{ route('Front.admin.company.info', $company) }}"
                                                    class="btn btn-primary">Détail</a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

@endsection
