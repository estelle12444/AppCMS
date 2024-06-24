@extends('Front.admin.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Candidatures</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Candidatures</a></div>
                <div class="breadcrumb-item">Liste</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class=" text-primary">Candidatures pour
                                            @if ($activity->type== 'tender')
                                            L'appel d'offre
                                            @elseif ($activity->type == 'careers')
                                                L'appel à Candidature
                                            @elseif ( $activity->type  == 'jobs')
                                                L'Offre d'emploi
                                            @elseif ( $activity->type == 'quotations')
                                                La demande de Cotation
                                            @elseif ($activity->type == 'events')
                                                La demande de manifestation
                                            @endif " Dossier N°{{ $activity->id }}"
                                        </h4>
                                        {{-- <div class="card-header-form">
                                            <a href="{{route('Front.admin.activities.applicants',activity)}}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="" data-original-title="retourner">
                                                Retour
                                                <i class="fas fa-sign-out-alt"></i>
                                            </a>
                                        </div> --}}
                                    </div>
                                    <div class="card-body"style="overflow-x: hidden">
                                        @if ($applications->isEmpty())
                                            <p>Aucune candidature trouvée pour cette activité.</p>
                                        @else
                                            <table class="table" >
                                                <thead>
                                                    <tr>
                                                        <th>N°</th>
                                                        <th>Nom</th>
                                                        <th>Email</th>
                                                        <th>Portfolio</th>
                                                        <th>Documents joints</th>
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
                                                            <td>{{ Str::limit(strip_tags($application->portfolio), 10, '...')}}</td>
                                                            <td>
                                                                @if ($application->attachments)
                                                                    @php
                                                                        $attachments = json_decode($application->attachments);
                                                                    @endphp

                                                                    @if (is_array($attachments))
                                                                        @foreach ($attachments as $attachment)
                                                                            <p><a h href="{{ route('download.attachment', ['filename' => $attachment]) }}" target="_blank">{{ Str::limit(strip_tags($attachment), 10, '...') }}</a></p>
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
                                                                @if (($application->status === 'en_attente') | ($application->status === 'refuser'))
                                                                    <form action="{{ route('accepter', $application->id) }}" method="POST">
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-success">Accepter</button>
                                                                    </form>
                                                                    <!-- Affichez le bouton "Refuser" dans les autres cas -->
                                                                @else
                                                                    <form action="{{ route('refuser', $application->id) }}"  method="POST">
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-danger">Refuser</button>
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
