@extends('Front.admin.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Liste des Partenaires</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Partenaires</a></div>
                <div class="breadcrumb-item">Liste</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tables</h4>
                            <div class="card-header-form">
                                <a href="{{route('Front.admin.partner.create')}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="CREATE">
                                    Enregistrer un partenaire <i class="fas fa-user"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">

                                <table class="table table-responsive table-striped" id="Partnertable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                N
                                            </th>
                                            <th>Raison Social</th>
                                            <th>Secteur d'activite</th>
                                            <th>Description</th>
                                            <th>Logo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($partners as $partner)
                                            <tr>
                                                <td>{{ $partner->id }}</td>
                                                <td style="width: 50px;">{{ $partner->title }}</td>

                                                {{-- <td >@foreach ($sectors as $sector)

                                                        @if ($partner->sectors->contains($sector->id))
                                                            {{ $sector->nom }}
                                                        @endif

                                                @endforeach
                                                </td> --}}
                                                @php
                                                    $matchingSectors = [];
                                                    foreach ($sectors as $sector) {
                                                        if ($partner->sectors->contains($sector->id)) {
                                                            $matchingSectors[] = $sector->nom;
                                                        }
                                                    }
                                                @endphp

                                                <td>
                                                    {{ implode(', ', $matchingSectors) }}
                                                </td>

                                                <td> {{ Str::substr($partner->content, 0, 150) . '...' }}</td>

                                                <td>
                                                    <img alt="{{ $partner->title }}"
                                                        src="{{ asset('storage/' . $partner->image) }}"
                                                        data-toggle="tooltip" width="50">
                                                </td>
                                                {{-- <td>{{ $partner->created_at }}</td> --}}

                                                <td style="width: 150px;"><a href="{{ route('Front.admin.partner.edit', $partner) }}"
                                                        class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                        title="" data-original-title="Edit"><i
                                                            class="fas fa-pencil-alt"></i></a>

                                                    <form action="{{ route('Front.admin.partner.destroy', $partner->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-action trigger--fire-modal-6"
                                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce secteur ?')"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>

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
    @endsection
    @push('scripts')
    <script >
          $(document).ready(function() {
            $('#Partnertable').DataTable({
                paging: true,
                pageLength: 15,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json'
                }
            });
        });

    </script>
    @endpush
