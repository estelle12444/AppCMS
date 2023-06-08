@extends('Front.admin.layout')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Liste des secteurs d'activité</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Partenaires</a></div>
        <div class="breadcrumb-item">Liste</div>
      </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-md-6">

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
                                <td>{{ $sector->nom }}</td>
                                <td>
                                    <a href="{{ route('Front.admin.sector.edit', $sector->id) }}" class="btn btn-primary">Modifier</a>
                                    <form action="{{ route('Front.admin.sector.destroy', $sector->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce secteur ?')">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection