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
                            <h4>Modifier le partenaire</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Front.admin.partner.update', $partner->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Raison
                                        Sociale</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="title" type="text" id="name" class="form-control"
                                            name="title" value="{{ $partner->title }}" required>
                                    </div>
                                </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descriptif
                                            activité</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="form-control" id="description" name="content" rows="3">{{ $partner->content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo </label>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="custom-file">
                                                <input type="file" class="form-control-file" id="image"
                                                    name="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"
                                            for="sectors">Secteurs d'activité</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="js-example-basic-multiple" id="sectors" name="sectors[]"  multiple required>
                                                @foreach ($sectors as $sector)
                                                    <option
                                                        value="{{ $sector->id }}"{{ $partner->sectors->contains($sector->id) ? ' selected' : '' }}>
                                                        {{ $sector->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
    </section>
@endsection
