<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
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
                                    <h2 id="form-header">Edition en version française</h2>
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
                        @php
                            $url = route('Front.admin.' . $route . '.update', ['activity' => $activity->id]);
                        @endphp
                        <div class="card-body">
                            <form action="{{$url}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="lang[0][translate_code]" value="fr">

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="titre">Titre </label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[0][title]" type="text" id="name" class="form-control" value="{{ $activity->translator['title']  }}" required>
                                        @error('lang.0.title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="description">Description </label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control summernote-simple" id="description" name="lang[0][content]" rows="3">{{ $activity->content }}</textarea>
                                        @error('lang.0.content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                @if($type !== "advantages")
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="résumé">Résumé</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="form-control summernote-simple" id="resume" name="lang[0][resume]" rows="3" required title="Ce champ doit être très bref car il apparaît sur la page d'annonce dans la carte" >{{ $activity->resume }}</textarea>
                                            @error('lang.0.resume')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="deadline">Date Limite</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[0][limit_date]" type="datetime-local" class="form-control" value="{{ $activity->limit_date }}">

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
                                        @if (!empty($activity->image))
                                            <img id="imagePreview09" src="{{ asset('storage/' .$activity->image) }}" alt="Prévisualisation" style=" max-width: 100%; max-height: 300px;">
                                        @elseif($type == 'tender')
                                            <img id="imagePreview09" src="{{ asset('img/annonce/appel_offre.jpg') }}"  style="max-width: 100%; max-height: 300px;">
                                            <!-- Remplacez 'placeholder-image.jpg' par le chemin de votre image de remplacement par défaut si aucune image existante -->
                                        @elseif($type == 'career')
                                            <img id="imagePreview09" src="{{ asset('img/annonce/candidature.png') }}"  style="max-width: 100%; max-height: 300px;">
                                        @elseif($type == 'event')
                                            <img id="imagePreview09" src="{{ asset('img/annonce/cotation.png') }}"  style="max-width: 100%; max-height: 300px;">
                                        @elseif($type == 'job')
                                            <img id="imagePreview09" src="{{ asset('img/annonce/offre_emploi.jpg') }}"  style="max-width: 100%; max-height: 300px;">
                                        @elseif($type == 'advantages')
                                            <img id="imagePreview" src="{{ asset('storage/' .$activity->image) }}"  style="max-width: 100%; max-height: 300px;">
                                        @else
                                            <img id="imagePreview09" src=""  style="max-width: 100%; max-height: 300px;">
                                        @endif
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
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="documents">Documents ci-joints</label>
                                        <div class=" col-sm-12 col-md-7">
                                            <input type="file" name="lang[0][file]" class="form-control" id="inputGroupFile08" aria-describedby="inputGroupFileAddon08"                                        aria-label="Upload" accept=".pdf, .txt, .docx">
                                            <small id="inputGroupFileAddon08" class="form-text text-muted">Sélectionnez un document (.pdf, .txt, .docx).</small>
                                        </div>
                                    </div>
                                @endif

                                <!--   Step 2: English version (initially hidden) -->
                                <div class="card-header">
                                    <h2 id="form-header my-4">Edition en version anglaise</h2>
                               </div>
                                <input type="hidden" name="lang[1][translate_code]" value="en">

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="title">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[1][title]" type="text" id="name" class="form-control"
                                            value="{{ $activity->translator['title']  }}" required>
                                        @error('lang.1.title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="description">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control summernote-simple" id="description" name="lang[1][content]" rows="3"
                                            value="">{{ $activity->translator['content']  }}</textarea>
                                        @error('lang.1.content')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                @if($type !== "advantages")
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="summary">Summary</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="form-control summernote-simple" id="resume" name="lang[1][resume]" rows="3"
                                                value="">{{ $activity->translator['resume']  }}</textarea>
                                            @error('lang.1.resume')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="deadline">Application
                                        Deadline</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="lang[1][limit_date]" type="datetime-local" class="form-control"
                                            value="{{ $activity->limit_date }}">
                                        @error('lang.1.limit_date')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                               <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="cover">Cover Image </label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" class="form-control-file" id="image"
                                                value="{{ $activity->image }}" name=" lang[1][image]">
                                        </div>
                                    </div>
                                </div>

                                @if($type !== 'news')
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="attached-document">Attached Documents
                                        </label>
                                        <div class="input-group col-sm-12 col-md-7">
                                            <input type="file" name="lang[1][file]" class="form-control" id="inputGroupFile05"
                                                aria-describedby="inputGroupFileAddon05" aria-label="Upload" accept=".pdf, .txt, .docx">
                                            <small id="inputGroupFileAddon05" class="form-text text-muted">Select a document (.pdf, .txt, .docx).</small>
                                        </div>
                                    </div>
                                @endif

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la prévisualisation de l'image principale
    document.getElementById('inputGroupFile09').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const img = new Image();
        const preview = document.getElementById('imagePreview09');
        const error = document.getElementById('imageSizeError09');

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

    // Gestion de l'ajout et de la prévisualisation des images additionnelles
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

    // Si des images additionnelles existent, les afficher
    @if(!empty($additionalImages))
        let additionalImages = @json($additionalImages);
        additionalImages.forEach((image, index) => {
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
                    <img id="${previewId}" src="{{ asset('storage/' . '${image.path}') }}" alt="Prévisualisation" style="max-width: 100%; max-height: 300px;">
                </div>
            `;
            document.getElementById('additionalImagesContainer').appendChild(fileInput);
        });
    @endif
});

//      function handleFileChange(event, previewId, errorId) {
//             const file = event.target.files[0];
//             const imageSizeError = document.getElementById(errorId);
//             const imagePreview = document.getElementById(previewId);
//             imageSizeError.style.display = 'none';
//             imagePreview.style.display = 'none';

//             if (file) {
//                 const img = new Image();
//                 img.onload = function() {
//                     if (img.width < 690 || img.height < 500) {
//                         imageSizeError.style.display = 'block';
//                         event.target.value = '';
//                     } else {
//                         const reader = new FileReader();
//                         reader.onload = function(e) {
//                             imagePreview.src = e.target.result;
//                             imagePreview.style.display = 'block';
//                         }
//                         reader.readAsDataURL(file);
//                     }
//                 }
//                 img.onerror = function() {
//                     imageSizeError.style.display = 'block';
//                     event.target.value = '';
//                 }
//                 img.src = URL.createObjectURL(file);
//             }
//         }

//         document.getElementById('inputGroupFile09').addEventListener('change', function(event) {
//             handleFileChange(event, 'imagePreview09', 'imageSizeError09');
//         });

//         document.getElementById('inputGroupFile10').addEventListener('change', function(event) {
//             handleFileChange(event, 'imagePreview10', 'imageSizeError10');
//         });

//         // let imageCount = 0;

//         // document.getElementById('addImageField').addEventListener('click', function() {
//         //     imageCount++;
//         //     const fileInputId = 'additionalImage' + imageCount;
//         //     const errorId = 'imageSizeError' + imageCount;
//         //     const previewId = 'imagePreview' + imageCount;

//         //     const fileInput = document.createElement('div');
//         //     fileInput.classList.add('form-group', 'row', 'mb-4');
//         //     fileInput.innerHTML = `
//         //         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="${fileInputId}">Image ${imageCount}</label>
//         //         <div class="input-group col-sm-12 col-md-7">
//         //             <input type="file" name="additional_images[]" class="form-control" id="${fileInputId}" aria-describedby="inputGroupFileAddon${imageCount}" aria-label="Upload" accept=".png, .jpg, .jpeg">
//         //             <small id="inputGroupFileAddon${imageCount}" class="form-text text-muted">Sélectionnez une image (.png, .jpg, .jpeg).</small>
//         //             <small id="${errorId}" class="form-text text-danger" style="display: none;">L'image doit avoir une taille minimale de 690x500 pixels.</small>
//         //         </div>
//         //         <div class="col-md-7 offset-md-3">
//         //             <img id="${previewId}" src="#" alt="Prévisualisation" style="display: none; max-width: 100%; max-height: 300px;">
//         //         </div>
//         //     `;
//         //     document.getElementById('additionalImagesContainer').appendChild(fileInput);

//         //     document.getElementById(fileInputId).addEventListener('change', function(event) {
//         //         const file = event.target.files[0];
//         //         const img = new Image();
//         //         const preview = document.getElementById(previewId);
//         //         const error = document.getElementById(errorId);

//         //         img.onload = function() {
//         //             if (img.width >= 690 && img.height >= 500) {
//         //                 preview.src = URL.createObjectURL(file);
//         //                 preview.style.display = 'block';
//         //                 error.style.display = 'none';
//         //             } else {
//         //                 preview.style.display = 'none';
//         //                 error.style.display = 'block';
//         //             }
//         //         };

//         //         img.src = URL.createObjectURL(file);
//         //     });
//         // });

//     //     document.addEventListener('DOMContentLoaded', function() {
//     // // Gestion de la prévisualisation de l'image principale
//     //         document.getElementById('inputGroupFile09').addEventListener('change', function(event) {
//     //             const file = event.target.files[0];
//     //             const img = new Image();
//     //             const preview = document.getElementById('imagePreview09');
//     //             const error = document.getElementById('imageSizeError09');

//     //             img.onload = function() {
//     //                 if (img.width >= 690 && img.height >= 500) {
//     //                     preview.src = URL.createObjectURL(file);
//     //                     preview.style.display = 'block';
//     //                     error.style.display = 'none';
//     //                 } else {
//     //                     preview.style.display = 'none';
//     //                     error.style.display = 'block';
//     //                 }
//     //             };

//     //             img.src = URL.createObjectURL(file);
//     //         });

//     //         // Gestion de l'ajout et de la prévisualisation des images additionnelles
//     //         let imageCount = 0;

//     //         document.getElementById('addImageField').addEventListener('click', function() {
//     //             imageCount++;
//     //             const fileInputId = 'additionalImage' + imageCount;
//     //             const errorId = 'imageSizeError' + imageCount;
//     //             const previewId = 'imagePreview' + imageCount;

//     //             const fileInput = document.createElement('div');
//     //             fileInput.classList.add('form-group', 'row', 'mb-4');
//     //             fileInput.innerHTML = `
//     //                 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="${fileInputId}">Image ${imageCount}</label>
//     //                 <div class="input-group col-sm-12 col-md-7">
//     //                     <input type="file" name="additional_images[]" class="form-control" id="${fileInputId}" aria-describedby="inputGroupFileAddon${imageCount}" aria-label="Upload" accept=".png, .jpg, .jpeg">
//     //                     <small id="inputGroupFileAddon${imageCount}" class="form-text text-muted">Sélectionnez une image (.png, .jpg, .jpeg).</small>
//     //                     <small id="${errorId}" class="form-text text-danger" style="display: none;">L'image doit avoir une taille minimale de 690x500 pixels.</small>
//     //                 </div>
//     //                 <div class="col-md-7 offset-md-3">
//     //                     <img id="${previewId}" src="#" alt="Prévisualisation" style="display: none; max-width: 100%; max-height: 300px;">
//     //                 </div>
//     //             `;
//     //             document.getElementById('additionalImagesContainer').appendChild(fileInput);

//     //             document.getElementById(fileInputId).addEventListener('change', function(event) {
//     //                 const file = event.target.files[0];
//     //                 const img = new Image();
//     //                 const preview = document.getElementById(previewId);
//     //                 const error = document.getElementById(errorId);

//     //                 img.onload = function() {
//     //                     if (img.width >= 690 && img.height >= 500) {
//     //                         preview.src = URL.createObjectURL(file);
//     //                         preview.style.display = 'block';
//     //                         error.style.display = 'none';
//     //                     } else {
//     //                         preview.style.display = 'none';
//     //                         error.style.display = 'block';
//     //                     }
//     //                 };

//     //                 img.src = URL.createObjectURL(file);
//     //             });
//     //     });
// //});


</script>
