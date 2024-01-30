@extends('Front.admin.layout')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Liste des secteurs d'activité</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Secteurs</a></div>
                <div class="breadcrumb-item">Liste</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Liste</h4>
                            <div class="card-header-form">
                                <a href="{{route('Front.admin.sector.create')}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="CREATE">
                                    Enregistrer un secteur <i class="fas fa-user"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sectors as $sector)
                                            <tr>
                                                <td>{{ $sector->id }}</td>
                                                <td>{{  strip_tags($sector->nom) }}</td>
                                                <td>
                                                    <a href="{{ route('Front.admin.sector.edit', $sector->id) }}"
                                                        class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    <form action="{{ route('Front.admin.sector.destroy', $sector->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
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
