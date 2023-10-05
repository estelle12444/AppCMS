@extends('Front.admin.layout')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edition</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Appels à Candidature</a></div>
            <div class="breadcrumb-item">Edition</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Modifier l'appel à Candidature</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Front.admin.career.update', $career->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Titre de l'appel</label>
                                <div class="col-sm-12 col-md-7">
                                    <input name="title" type="text" id="name" class="form-control"
                                        name="title" value="{{ $career->title }}" required>
                                </div>
                            </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description de l'appel</label>
                                    <div class="col-sm-12 col-md-7">

                                        <textarea name="content" class="form-control summernote-simple" rows="3">{{ $career->content }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Résumé</label>
                                    <div class="col-sm-12 col-md-7">

                                        <textarea class="form-control summernote-simple" rows="3" name="resume" rows="3">{{ $career->resume }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image </label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" class="form-control-file" id="image"
                                                name="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fichier </label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" class="form-control-file" id="image"
                                                name="file">
                                        </div>
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
