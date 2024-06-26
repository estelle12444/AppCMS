@extends('Front.admin.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Liste des Comptes entreprises</h1>
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
                            <h4>Liste des comptes Entreprises</h4>
                            <div class="card-header-form">
                                <!-- Formulaire de recherche ou autre contenu peut être ajouté ici -->
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table id="CompanyTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nom de l'entreprise</th>
                                            <th>Raison Sociale</th>
                                            <th>Siège Social</th>
                                            <th>Date de création</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($companies as $company)
                                            <tr>
                                                <td>{{ Str::substr(strip_tags($company->name), 0, 50) . '...' }}</td>
                                                <td class="align-middle">{{ Str::substr(strip_tags($company->RCCM), 0, 50) . '...' }}</td>
                                                <td>{{ Str::substr(strip_tags($company->siege), 0, 50) . '...' }}</td>
                                                <td>{{ $company->created_at }}</td>
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
                                                    <a href="{{ route('Front.admin.company.info', $company) }}" class="btn btn-primary">Détail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
        new DataTable('#CompanyTable', {
            paging: true,
            pageLength: 15,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json'
            }
        });
    </script>
@endpush
