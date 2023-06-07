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


            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Modifier le partenaire</h2>
                        <form action="{{ route('Front.admin.partner.update', $partner->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Raison sociale</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    value="{{ $partner->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="content" rows="3">{{ $partner->content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="sectors">Secteurs d'activité</label>
                                <select class="form-control" id="sectors" name="sectors[]" multiple required>
                                    @foreach ($sectors as $sector)
                                        <option
                                            value="{{ $sector->id }}"{{ $partner->sectors->contains($sector->id) ? ' selected' : '' }}>
                                            {{ $sector->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
