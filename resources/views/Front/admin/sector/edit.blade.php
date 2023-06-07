@extends('Front.admin.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Modifier le secteur d'activité</h2>
                <form action="{{ route('Front.admin.sector.update', $sector->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="nom" value="{{ $sector->nom }}"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
@endsection
