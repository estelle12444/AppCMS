@extends('Front.admin.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Creation</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Secteurs</a></div>
                <div class="breadcrumb-item">Création</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ajouter un secteur d'activité</h4>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success" style="float:right">
                                {{ session('success') }}
                            </div>
                        @endif
                        @error('nom')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="card-body">
                            <form action="{{ route('Front.admin.sector.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nom</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="nom" type="text" class="form-control" required>
                                        @error('nom')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
