@extends('Front.profil.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Liste des candidatures</h4>
                </div>

                <div class="card-body">

                        @foreach ($applications as $activity)
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5>{{ $activity->activity->title}}</h5>
                                </div>
                                <div class="card-body">

                                    @if ($applications->isEmpty())
                                        <p>Aucune candidature pour cette activité.</p>
                                    @else
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Email</th>
                                                    <th>Portfolio</th>
                                                    <th>Compétences</th>
                                                    <th>Lettre de motivation</th>
                                                    <th>Fichiers joints:</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($applications as $submission)
                                                    <tr>
                                                        <td>{{ $submission->name }}</td>
                                                        <td>{{ $submission->email }}</td>
                                                        <td> {{ Str::limit(strip_tags($submission->portfolio ), 30, '...') }}</td>
                                                        <td>{{ Str::limit(strip_tags($submission->skills), 30, '...') }}</td>
                                                        <td>{{ Str::limit(strip_tags($submission->cover_letter), 30, '...') }}</td>
                                                        <td>
                                                            @if ($submission->attachments)
                                                                @php
                                                                    $attachments = json_decode($submission->attachments);
                                                                @endphp

                                                                @if (is_array($attachments))
                                                                    @foreach ($attachments as $attachment)
                                                                        <p>
                                                                            <a href="{{ route('download.attachment', ['filename' => $attachment]) }}" target="_blank">{{ Str::limit(strip_tags($attachment), 30, '...') }}</a>
                                                                        </p>
                                                                    @endforeach
                                                                @else
                                                                    <p>Aucun fichier joint</p>
                                                                @endif
                                                            @else
                                                                <p>Aucun fichier joint</p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($submission->status === 'en_attente' || $submission->status === 'refusé')
                                                                <p class="btn btn-danger">{{ $submission->status }}</p>
                                                            @else
                                                                <p class="btn btn-success">{{ $submission->status }}</p>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
