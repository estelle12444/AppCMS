@extends('Front.admin.layout')

@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center text-primary">Edition</h2>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                         Veuillez remplir le formulaire à la fois en anglais et en français pour garantir une soumission précise et complète.
                    </div>
                    <h1 class="text-center text-primary mb-4">Image actuelle</h1>

                    <div class="form-group row mb-4">
                        <!-- Première colonne -->

                        <div class="col-12 col-md-6 mb-4">
                            <label class="col-form-label text-md-right" for="">
                                <h4>Langue Française </h4>
                            </label>
                            <div>
                                <img src="{{ asset(__('' . $contents['fr'][$key]))}}" alt="actuelle" class="img-fluid" />
                            </div>
                        </div>

                        <!-- Deuxième colonne -->
                        <div class="col-12 col-md-6 mb-4">
                            <label class="col-form-label text-md-right" for="">
                                <h4>Langue Anglaise</h4>
                            </label>
                            <div>
                                <!-- Placez ici l'élément ou le contenu de la nouvelle image -->
                                <img src="{{ asset(__('' . $contents['en'][$key]))}}" alt="nouvelle" class="img-fluid" />
                            </div>
                        </div>
                    </div>

                    {{-- <form action="{{route('saveContent',['key'=>$key])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="lang[0][translate_code]" value="fr">


                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="">Image pour la version française</label>
                            <div class="col-sm-12 col-md-7">
                                <small id="imageSizeError01" class="form-text text-danger" style="margin-bottom: 10px; !important">L'image doit avoir une taille minimale de 690x500 pixels.</small>
                                <input type="file"id="description_fr" name="fr[content]" rows="3" class="form-control"   aria-describedby="inputGroupFileAddon01" aria-label="Upload" accept=".png, .jpg, .jpeg"/>
                                <small id="inputGroupFileAddon01" class="form-text text-muted">Sélectionnez une image (.png, .jpg, .jpeg).</small>
                                @error('fr.content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror


                                <div class="form-group row mb-4">
                                    <div class="col-md-7 offset-md-3">
                                        <img id="imagePreview_fr" src="#" alt="Prévisualisation" style="display: none; max-width: 100%; max-height: 300px;">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="">Image pour la version française</label>
                            <div class="col-sm-12 col-md-7">
                                <small id="imageSizeError" class="form-text text-danger" style="margin-bottom: 10px; !important">L'image doit avoir une taille minimale de 690x500 pixels.</small>
                                <input type="file" id="description_en" name="en[content]" rows="3" class="form-control"   aria-describedby="inputGroupFileAddon" aria-label="Upload" accept=".png, .jpg, .jpeg"/>
                                <small id="inputGroupFileAddon" class="form-text text-muted">Sélectionnez une image (.png, .jpg, .jpeg).</small>
                                @error('en.content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror


                                <div class="form-group row mb-4">
                                    <div class="col-md-7 offset-md-3">
                                        <img id="imagePreview_en" src="#" alt="Prévisualisation" style="display: none; max-width: 100%; max-height: 300px;">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="" ></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <a href="{{ route('ContentIndex') }}" class=" ml-24 float-right btn btn-danger btn-action mr-1" data-toggle="tooltip" title="" data-original-title="retourner">
                                    Retour <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </div>
                        </div>
                    </form> --}}
                    <form action="{{ route('ImagesaveContent', ['key' => $key]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="lang[0][translate_code]" value="fr">

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="description_fr">Image pour la version française</label>
                            <div class="col-sm-12 col-md-7">
                                <small id="imageSizeError01" class="form-text text-danger" style="margin-bottom: 10px;">L'image doit avoir une taille minimale de 700x350 pixels.</small>
                                <input type="file" id="description_fr" name="fr[content]" class="form-control" aria-describedby="inputGroupFileAddon01" aria-label="Upload" accept=".png, .jpg, .jpeg" onchange="previewImage(event, 'imagePreview_fr')" />
                                <small id="inputGroupFileAddon01" class="form-text text-muted">Sélectionnez une image (.png, .jpg, .jpeg).</small>
                                @error('fr.content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group row mb-4">
                                    <div class="col-md-7 offset-md-3">
                                        <img id="imagePreview_fr" src="#" alt="Prévisualisation" style="display: none; max-width: 100%; max-height: 300px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="description_en">Image pour la version anglaise</label>
                            <div class="col-sm-12 col-md-7">
                                <small id="imageSizeError" class="form-text text-danger" style="margin-bottom: 10px;">L'image doit avoir une taille minimale de 700x350 pixels.</small>
                                <input type="file" id="description_en" name="en[content]" class="form-control" aria-describedby="inputGroupFileAddon" aria-label="Upload" accept=".png, .jpg, .jpeg" onchange="previewImage(event, 'imagePreview_en')" />
                                <small id="inputGroupFileAddon" class="form-text text-muted">Sélectionnez une image (.png, .jpg, .jpeg).</small>
                                @error('en.content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group row mb-4">
                                    <div class="col-md-7 offset-md-3">
                                        <img id="imagePreview_en" src="#" alt="Prévisualisation" style="display: none; max-width: 100%; max-height: 300px;">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for=""></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <a href="{{ route('ContentIndex') }}" class="ml-24 float-right btn btn-danger btn-action mr-1" data-toggle="tooltip" title="Retourner">
                                    Retour <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    function previewImage(event, previewId) {
        const input = event.target;
        const preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }


</script>
@endsection
