@extends('layouts')


@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <h2>Formulaire</h2>
            <p>Texte explicatif ici.</p>

            <hr>

            <h3>Partie 1</h3>
            <form>
              <div class="mb-3">
                <label for="field1" class="form-label">Champ 1 :</label>
                <input type="text" class="form-control" id="field1">
              </div>
              <div class="mb-3">
                <label for="field2" class="form-label">Champ 2 :</label>
                <input type="text" class="form-control" id="field2">
              </div>
              <!-- Ajoutez plus de champs ici -->
            </form>

            <hr>

            <h3>Partie 2</h3>
            <form>
              <div class="mb-3">
                <label for="field3" class="form-label">Champ 3 :</label>
                <input type="text" class="form-control" id="field3">
              </div>
              <div class="mb-3">
                <label for="field4" class="form-label">Champ 4 :</label>
                <input type="text" class="form-control" id="field4">
              </div>
              <!-- Ajoutez plus de champs ici -->
            </form>

            <!-- Ajoutez plus de parties avec des titres et des formulaires ici -->

            <hr>

            <button type="submit" class="btn btn-primary">Envoyer</button>
          </div>
        </div>
      </div>
</div>


@endsection
