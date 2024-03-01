<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
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
                                        <a href="{{ route('Front.admin.'.$route.'.index') }}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="Retour">
                                            retour <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="alert alert-info">
                                Veuillez remplir le formulaire à la fois en anglais et en français pour garantir une soumission précise et complète. Utilisez le bouton de commutation de langue fourni pour naviguer entre les deux versions du formulaire.
                            </div>
                            <!-- Step 1: French version -->
                            <form action="{{ route('Front.admin.'.$route.'.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="lang[0][translate_code]" value="fr">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Titre</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[0][title]" type="text" class="form-control">
                                        @error("lang.0.title")
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="lang[0][content]" class="form-control summernote-simple"></textarea>
                                        @error('lang.0.content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Resume </label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="lang[0][resume]" class="form-control summernote-simple"></textarea>
                                        @error('lang.0.resume')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Limite</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[0][limit_date]" type="datetime-local" class="form-control">

                                        @error('lang.0.limit_date')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                    <div class="input-group col-sm-12 col-md-7">
                                        <input type="file" name="lang[0][image]" class="form-control" id="inputGroupFile09"
                                            aria-describedby="inputGroupFileAddon09" aria-label="Upload"
                                            accept=".png, .jpg, .jpeg" >
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <div class="col-md-7 offset-md-3">
                                        <img id="imagePreview" src="#" alt="Image Preview"
                                            style="display: none; max-width: 100%; max-height: 300px;">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Documents ci-joints
                                    </label>
                                    <div class="input-group col-sm-12 col-md-7">
                                        <input type="file" name="lang[0][file]" class="form-control" id="inputGroupFile08"
                                            aria-describedby="inputGroupFileAddon08" aria-label="Upload"
                                            accept=".pdf, .txt, .docx">
                                        <small id="inputGroupFileAddon08" class="form-text text-muted">Sélectionnez un
                                            document (.pdf, .txt, .docx).</small>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button id="nextButton" class="btn btn-primary" type="button" onclick="switchToEnglish()">Suivant (Switch to English)</button>
                                    </div>
                                </div>
                            <!-- Step 2: English version (initially hidden) -->
                                <div class="card-header">
                                     <h2 id="form-header">Enregistrement en version anglaise</h2>
                                </div>

                                <input type="hidden" name="lang[1][translate_code]" value="en">

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Title</label>
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

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Summary</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="lang[1][resume]" class="form-control summernote-simple"></textarea>
                                        @error('lang.1.resume')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                    <div class="input-group col-sm-12 col-md-7">
                                        <input type="file" name="lang[1][image]" class="form-control" id="inputGroupFile06"
                                            aria-describedby="inputGroupFileAddon06" aria-label="Upload" accept=".png, .jpg, .jpeg">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <div class="col-md-7 offset-md-3">
                                        <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%; max-height: 300px;">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Attached Documents</label>
                                    <div class="input-group col-sm-12 col-md-7">
                                        <input type="file" name="lang[1][file]" class="form-control" id="inputGroupFile05"
                                            aria-describedby="inputGroupFileAddon05" aria-label="Upload" accept=".pdf, .txt, .docx">
                                        <small id="inputGroupFileAddon05" class="form-text text-muted">Select a document (.pdf, .txt, .docx).</small>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary" type="submit">Submit</button>
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
        // Fonction pour prévisualiser l'image sélectionnée
        function previewImage(input) {
            var imagePreview = document.getElementById('imagePreview');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.style.display = 'block';
                    imagePreview.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.style.display = 'none';
                imagePreview.src = '';
            }
        }

        // Écoutez les changements de l'input de fichier et appelez la fonction de prévisualisation
        document.querySelector('input[name="image"]').addEventListener('change', function() {
            previewImage(this);
        });
        function switchToEnglish() {
            document.getElementById('form-header').innerText = 'Registration in English version';
            document.getElementById('frenchForm').style.display = 'none';
            document.getElementById('englishForm').style.display = 'block';
        }
    </script>

</div>
