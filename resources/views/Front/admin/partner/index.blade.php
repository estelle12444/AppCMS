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
            {{-- <h2 class="section-title">DataTables</h2>
      <p class="section-lead">
        We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
      </p> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tables</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                N
                                            </th>
                                            <th>Raison Social</th>
                                            <th>Secteur d'activite</th>
                                            <th>Description</th>
                                            <th>Logo</th>
                                            {{-- <th>Date et Heure</th> --}}
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($partners as $partner)
                                            <tr>
                                                <td>{{ $partner->id }}</td>
                                                <td>{{ $partner->title }}</td>

                                                <td> TECH</td>
                                                <td>{{ $partner->content }}</td>

                                                <td>
                                                    <img alt="{{ $partner->title }}"
                                                        src="{{ asset('storage/' . $partner->image) }}"
                                                        data-toggle="tooltip" width="50">
                                                </td>
                                                {{-- <td>{{ $partner->created_at }}</td> --}}

                                                <td><a href="{{ route('Front.admin.partner.edit', $partner) }}"
                                                    class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>

                                                    <form action="{{ route('Front.admin.partner.destroy', $partner->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                        class="btn btn-danger btn-action trigger--fire-modal-6" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce secteur ?')"><i class="fas fa-trash"></i></button>

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
        </div>
        @endsection
