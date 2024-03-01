@extends('Front.profil.layout')
@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        </h2>
        <div class="card-body">
            <div class="lg:container text-gray-600 dark:text-gray-400" style="text-align: justify;padding:0 60 60 60;">
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <form method="POST" action="{{ route('application.store', $activity)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="portfolio">Portfolio:</label>
                            <textarea class="form-control" id="portfolio" name="portfolio" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="skills">Vos compétences:</label>
                            <textarea class="form-control" id="skills" name="skills" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cover_letter">Lettre de motivation:</label>
                            <textarea class="form-control" id="cover_letter" name="cover_letter" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="attachments">Fichiers joints:</label>
                            <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
                        </div>

                        <!-- Ajoutez d'autres champs ici -->
                        <button type="submit" class="btn btn-warning text-white">Envoyer</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
