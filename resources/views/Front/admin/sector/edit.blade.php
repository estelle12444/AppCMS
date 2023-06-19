@extends('Front.admin.layout')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edition</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Partenaires</a></div>
                <div class="breadcrumb-item">Edition</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Modifier le secteur d'activité</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('Front.admin.sector.update', $sector->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nom</label>
                                    <div class="col-sm-12 col-md-7">


                                    <input type="text" class="form-control" id="name" name="nom"
                                        value="{{ $sector->nom }}" required>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
