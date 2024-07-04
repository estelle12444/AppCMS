@extends('Front.profil.layout')

@section('content')

<div class="container my-5">
    <h2 class="text-center mb-4">Liste des candidatures</h2>

    @if ($applications->isEmpty())
        <div class="alert alert-info" role="alert">
            Aucune candidature n'a été trouvée.
        </div>
    @else
        @foreach ($applications as $activity)
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary">
                    <h5 class="mb-0  text-white"style="line-height: 1.8";>{{ $activity->activity->title }}</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Portfolio</th>
                                    <th>Compétences</th>
                                    <th>Lettre de motivation</th>
                                    <th>Fichiers joints</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $submission)
                                    <tr>
                                        <td>{{ $submission->name }}</td>
                                        <td>{{ $submission->email }}</td>
                                        <td>{{ Str::limit(strip_tags($submission->portfolio), 25, '...') }}</td>
                                        <td>{{ Str::limit(strip_tags($submission->skills), 25, '...') }}</td>
                                        <td>{{ Str::limit(strip_tags($submission->cover_letter), 25, '...') }}</td>
                                        <td>
                                            @if ($submission->attachments)
                                                @php
                                                    $attachments = json_decode($submission->attachments);
                                                @endphp
                                                @if (is_array($attachments))
                                                    @foreach ($attachments as $attachment)
                                                        <a href="{{ route('download.attachment', ['filename' => $attachment]) }}" class="btn btn-sm btn-outline-secondary mb-1" target="_blank">
                                                            {{ Str::limit(strip_tags($attachment), 20, '...') }}
                                                        </a>
                                                    @endforeach
                                                @else
                                                    <span class="text-muted">Aucun fichier</span>
                                                @endif
                                            @else
                                                <span class="text-muted">Aucun fichier</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($submission->status === 'en_attente')
                                                <span class="badge bg-warning text-dark">En attente</span>
                                            @elseif ($submission->status === 'refuser')
                                                <span class="badge bg-danger">Refusé</span>
                                            @else
                                                <span class="badge bg-success">{{ ucfirst($submission->status) }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

@endsection
