@extends('Front.profil.layout')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header  "style="background-color:rgb(226, 144, 60) ">
                    <h3 class="text-center text-white font-weight-light my-4">Formulaire de Candidature</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('application.store', $activity)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="portfolio" class="form-label">Portfolio</label>
                            <textarea class="form-control" id="portfolio" name="portfolio" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="skills" class="form-label">Vos compétences</label>
                            <textarea class="form-control" id="skills" name="skills" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="cover_letter" class="form-label">Lettre de motivation</label>
                            <textarea class="form-control" id="cover_letter" name="cover_letter" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="attachments" class="form-label">Fichiers joints</label>
                            <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn  btn-lg text-white"style="background-color:rgb(226, 144, 60) ">Envoyer la candidature</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="{{route('Front.profil.home')}}">Retour à la liste des offres</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
