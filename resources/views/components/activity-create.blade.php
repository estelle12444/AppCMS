<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    @props(['route', 'message', 'header', 'type'])

    <section class="section">
        {!! $header !!}

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h2 id="form-header">Enregistrement en version française</h2>
                                </div>
                                <div class="col-auto">
                                    <div class="card-header-form">
                                        <a href="{{ route('Front.admin.' . $route . '.index') }}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="Retour">
                                            retour <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="alert alert-info">
                                Veuillez remplir le formulaire à la fois en anglais et en français pour garantir une
                                soumission précise et complète. Utilisez le bouton de commutation de langue fourni pour
                                naviguer entre les deux versions du formulaire.
                            </div>
                            <!-- Step 1: French version -->
                            <form action="{{ route('Front.admin.' . $route . '.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="lang[0][translate_code]" value="fr">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="title">Titre</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[0][title]" type="text" class="form-control">
                                        @error('lang.0.title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="lang[0][content]" class="form-control summernote-simple"></textarea>
                                        @error('lang.0.content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                @if($type !== "advantages")
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Résumé </label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea name="lang[0][resume]" class="form-control summernote-simple" required
                                                title="Ce champ doit être très bref car il apparaît sur la page d'annonce dans la carte"></textarea>
                                            @error('lang.0.resume')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date
                                        Limite</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[0][limit_date]" type="datetime-local" class="form-control">

                                        @error('lang.0.limit_date')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="inputGroupFile09">Image de Couverture</label>
                                    <div class="col-sm-12 col-md-7">
                                        <small id="imageSizeError09" class="form-text text-danger" style="margin-bottom: 10px; !important">L'image doit avoir une taille minimale de 690x500 pixels.</small>
                                        <input type="file" name="lang[0][image]" class="form-control" id="inputGroupFile09" aria-describedby="inputGroupFileAddon09" aria-label="Upload" accept=".png, .jpg, .jpeg">
                                        <small id="inputGroupFileAddon09" class="form-text text-muted">Sélectionnez une image (.png, .jpg, .jpeg).</small>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <div class="col-md-7 offset-md-3">
                                        <img id="imagePreview09" src="#" alt="Prévisualisation" style="display: none; max-width: 100%; max-height: 300px;">
                                    </div>
                                </div>

                                @if($type == 'news')
                                    <div id="additionalImagesContainer"></div>
                                    <div class="form-group row mb-4">
                                        <div class="col-md-7 offset-md-3">
                                            <button type="button" id="addImageField" class="btn btn-success">Ajouter une autre image</button>
                                        </div>
                                     </div>

                                @endif

                                @if($type !== 'news')
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Documents ci-joints</label>
                                        <div class=" col-sm-12 col-md-7">
                                            <input type="file" name="lang[0][file]" class="form-control" id="inputGroupFile08" aria-describedby="inputGroupFileAddon08"                                        aria-label="Upload" accept=".pdf, .txt, .docx">
                                            <small id="inputGroupFileAddon08" class="form-text text-muted">Sélectionnez un document (.pdf, .txt, .docx).</small>
                                        </div>
                                    </div>
                                @endif

                                {{-- <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button id="nextButton" class="btn btn-primary" type="button"
                                            onclick="switchToEnglish()">Suivant (Switch to English)</button>
                                    </div>
                                </div> --}}
                                <!-- Step 2: English version (initially hidden) -->
                                <div class="card-header">
                                    <h2 id="form-header">Enregistrement en version anglaise</h2>
                                </div>

                                <input type="hidden" name="lang[1][translate_code]" value="en">

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" > Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[1][title]" type="text" class="form-control">
                                        @error('lang.1.title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="lang[1][content]" class="form-control summernote-simple"></textarea>
                                        @error('lang.1.content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                @if($type !== "advantages")
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Summary</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea name="lang[1][resume]" class="form-control summernote-simple"></textarea>
                                            @error('lang.1.resume')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @endif

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Application Deadline</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[1][limit_date]" type="datetime-local" class="form-control">
                                        @error('lang.1.limit_date')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="inputGroupFile10">Cover Image </label>
                                    <div class="input-group col-sm-12 col-md-7">
                                        <input type="file" name="lang[1][image]" class="form-control" id="inputGroupFile10" aria-describedby="inputGroupFileAddon09" aria-label="Upload" accept=".png, .jpg, .jpeg">
                                        <small id="inputGroupFileAddon10" class="form-text text-muted">Select an image (.png, .jpg, .jpeg).</small>
                                        <small id="imageSizeError10" class="form-text text-danger" style="display: none;">The image must have a minimum size of 690x500 pixels.</small>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <div class="col-md-7 offset-md-3">
                                        <img id="imagePreview10" src="#" alt="Prévisualisation" style="display: none; max-width: 100%; max-height: 300px;">
                                    </div>
                                </div>



                                @if($type !== 'news')
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Attached Documents</label>
                                        <div class="input-group col-sm-12 col-md-7">
                                            <input type="file" name="lang[1][file]" class="form-control" id="inputGroupFile05" aria-describedby="inputGroupFileAddon05" aria-label="Upload" accept=".pdf, .txt, .docx">
                                            <small id="inputGroupFileAddon05" class="form-text text-muted">Select a document (.pdf, .txt, .docx).</small>
                                        </div>
                                    </div>
                                @endif

                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary" type="submit">Publier</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // document.getElementById('inputGroupFile09','inputGroupFile06').addEventListener('change', function(event) {
        //     const file = event.target.files[0];
        //     const imageSizeError = document.getElementById('imageSizeError');
        //     const imagePreview = document.getElementById('imagePreview');
        //     imageSizeError.style.display = 'none';
        //     imagePreview.style.display = 'none';

        //     if (file) {
        //         const img = new Image();
        //         img.onload = function() {
        //             if (img.width < 690 || img.height < 500) {
        //                 imageSizeError.style.display = 'block';
        //                 event.target.value = '';
        //             } else {
        //                 const reader = new FileReader();
        //                 reader.onload = function(e) {
        //                     imagePreview.src = e.target.result;
        //                     imagePreview.style.display = 'block';
        //                 }
        //                 reader.readAsDataURL(file);
        //             }
        //         }
        //         img.onerror = function() {
        //             imageSizeError.style.display = 'block';
        //             event.target.value = '';
        //         }
        //         img.src = URL.createObjectURL(file);
        //     }
        // });

            function handleFileChange(event, previewId, errorId) {
            const file = event.target.files[0];
            const imageSizeError = document.getElementById(errorId);
            const imagePreview = document.getElementById(previewId);
            imageSizeError.style.display = 'none';
            imagePreview.style.display = 'none';

            if (file) {
                const img = new Image();
                img.onload = function() {
                    if (img.width >= 690 || img.height >= 500) {
                        imageSizeError.style.display = 'block';
                        event.target.value = '';
                    } else {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            imagePreview.src = e.target.result;
                            imagePreview.style.display = 'block';
                        }
                        reader.readAsDataURL(file);
                    }
                }
                img.onerror = function() {
                    imageSizeError.style.display = 'block';
                    event.target.value = '';
                }
                img.src = URL.createObjectURL(file);
            }
        }

        document.getElementById('inputGroupFile09').addEventListener('change', function(event) {
            handleFileChange(event, 'imagePreview09', 'imageSizeError09');
        });

        document.getElementById('inputGroupFile10').addEventListener('change', function(event) {
            handleFileChange(event, 'imagePreview10', 'imageSizeError10');
        });

        let imageCount = 0;

        document.getElementById('addImageField').addEventListener('click', function() {
            imageCount++;
            const fileInputId = 'additionalImage' + imageCount;
            const errorId = 'imageSizeError' + imageCount;
            const previewId = 'imagePreview' + imageCount;

            const fileInput = document.createElement('div');
            fileInput.classList.add('form-group', 'row', 'mb-4');
            fileInput.innerHTML = `
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="${fileInputId}">Image ${imageCount}</label>
                <div class="input-group col-sm-12 col-md-7">
                    <input type="file" name="additional_images[]" class="form-control" id="${fileInputId}" aria-describedby="inputGroupFileAddon${imageCount}" aria-label="Upload" accept=".png, .jpg, .jpeg">
                    <small id="inputGroupFileAddon${imageCount}" class="form-text text-muted">Sélectionnez une image (.png, .jpg, .jpeg).</small>
                    <small id="${errorId}" class="form-text text-danger" style="display: none;">L'image doit avoir une taille minimale de 690x500 pixels.</small>
                </div>
                <div class="col-md-7 offset-md-3">
                    <img id="${previewId}" src="#" alt="Prévisualisation" style="display: none; max-width: 100%; max-height: 300px;">
                </div>
            `;
            document.getElementById('additionalImagesContainer').appendChild(fileInput);

            document.getElementById(fileInputId).addEventListener('change', function(event) {
                const file = event.target.files[0];
                const img = new Image();
                const preview = document.getElementById(previewId);
                const error = document.getElementById(errorId);

                img.onload = function() {
                    if (img.width >= 690 && img.height >= 500) {
                        preview.src = URL.createObjectURL(file);
                        preview.style.display = 'block';
                        error.style.display = 'none';
                    } else {
                        preview.style.display = 'none';
                        error.style.display = 'block';
                    }
                };

                img.src = URL.createObjectURL(file);
            });
        });

    </script>

</div>
