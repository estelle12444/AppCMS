@extends('Front.admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Ajouter un secteur d'activité</h2>
            <form action="{{ route('Front.admin.sector.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="nom" required>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection
