@extends('Front.admin.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Postulants</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Postulant</a></div>
                <div class="breadcrumb-item">Liste</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    {{-- <div class="card">
                        <div class="card-header">
                            <h4>Postulants aux annonces</h4>
                            <div class="card-header-form">
                                <a href="/tender" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="" data-original-title="retourner">
                                    Retour <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Company ID</th>
                                                <th>Company Name</th>
                                                <th>Activities</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($activity as $applicant)

                                                <tr>
                                                    <td>{{ $applicant->activity_company->company_id }}</td>
                                                    <td>{{ $applicant->activity_company->company->name}}</td>
                                                    <td>
                                                        {{ $applicant->}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Liste des Candidatures pour l'Activité "{{ $activity->type }}
                                            N°{{ $activity->id }}"</h4>
                                        <div class="card-header-form">
                                            <a href="" class="btn btn-danger btn-action mr-1" data-toggle="tooltip"
                                                title="" data-original-title="retourner">
                                                Retour <i class="fas fa-sign-out-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if ($applications->isEmpty())
                                            <p>Aucune candidature trouvée pour cette activité.</p>
                                        @else
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Postulant ID</th>
                                                        <th>Applicant Name</th>
                                                        <th>Applicant Email</th>
                                                        <th>Portfolio</th>
                                                        <th>Fichiers joints</th>
                                                        <th>Statut</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($applications as $application)
                                                        <tr>
                                                            <td>{{ $application->id }}</td>
                                                            <td>{{ Str::limit(strip_tags($application->name), 20, '...') }}</td>
                                                            <td>{{ Str::limit(strip_tags($application->email), 20, '...') }}</td>
                                                            <td>{{ Str::limit(strip_tags($application->portfolio), 30, '...')}}</td>

                                                            <td>
                                                                @if ($application->attachments)
                                                                    @php
                                                                        $attachments = json_decode($application->attachments);
                                                                    @endphp

                                                                    @if (is_array($attachments))
                                                                        @foreach ($attachments as $attachment)
                                                                            <p><a href="{{ asset('storage/attachments' . $attachment) }}"
                                                                                    target="_blank">{{ Str::limit(strip_tags($attachment), 20, '...') }}</a>
                                                                            </p>
                                                                        @endforeach
                                                                    @else
                                                                        <p>Aucun fichier joint</p>
                                                                    @endif
                                                                @else
                                                                    <p>Aucun fichier joint</p>
                                                                @endif
                                                            </td>
                                                            <td>{{ $application->status }}</td>
                                                            <td>
                                                                <!-- Affichez le bouton "Accepter" si le statut est "en_attente" -->
                                                                @if (($application->status === 'en_attente') | ($application->status === 'refusé'))
                                                                    <form
                                                                        action="{{ route('accepter', $application->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="btn btn-success">Accepter</button>
                                                                    </form>
                                                                    <!-- Affichez le bouton "Refuser" dans les autres cas -->
                                                                @else
                                                                    <form
                                                                        action="{{ route('refuser', $application->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Refuser</button>
                                                                    </form>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
