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
                                            <td>  {{ Str::substr(strip_tags($company->name  ), 0, 50) . '...' }}</td>
                                            <td class="align-middle">
                                                 {{ Str::substr(strip_tags($company->RCCM ), 0, 50) . '...' }}
                                            </td>
                                            <td>
                                                {{ Str::substr(strip_tags($company->siege ), 0, 50) . '...' }}
                                            </td>
                                            <td>{{ $company->created_at }} </td>


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
