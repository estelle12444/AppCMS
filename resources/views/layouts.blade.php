<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>VITIB-Zone Franche Afrique </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{ asset('img/icon/icon.ico') }}" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/default.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <link href="{{ asset('css/indexx.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">


    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
    @vite('resources/css/app.css')

</head>

<body style="overflow-x: hidden">

    <!-- Preloader-->
    <div id="preloader-area" style="display:block;overflow-x: hidden">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--  Preloader -->

    {{-- <div id="popup" class="popup">
        <div class="popup-content">
            <div id="mobileWarning" class="hidden">
                <p>La version mobile de ce site est en cours de construction . Vous serrez rediriger.</p>
                <p>Merci de consulter ce site via un ordinateur .  </p>
            </div>
        </div>
    </div> --}}
    <div class="md:container md:mx-auto   py-5 bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90% ">
        <!-- Navbar Start -->
        @include('Front.partials.nav')
        <!-- Navbar End -->
    </div>
    <hr>
    @yield('content')
    <div id="modalId" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
        <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
            <div class="flex justify-end p-2">
                <button onclick="closeModal('modalId')" type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="p-6 pt-0 text-center">
                <form id="confirmForm" action="/api/save" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <input type="hidden" name="tag">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Texte français</label>
                        <div class="col-sm-12 col-md-7">
                            <input id="description_fr" type="text" name="fr" class="form-control">
                            {{-- <textarea id="description_fr" name="fr" class="form-control"></textarea> --}}
                            <div style="display:none;" id="error-fr" class="alert alert-danger"></div>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Texte anglais</label>
                        <div class="col-sm-12 col-md-7">
                            <input class="form-control" type="text" id="description_en" name="en" />
                            {{-- <textarea id="description_en" name="en" class="form-control"></textarea> --}}
                            <div style="display:none;" id="error-en" class="alert alert-danger"></div>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4">
                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg mr-2">Enregistrer</button>
                        <button type="button" onclick="closeModal('modalId')"
                            class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- ################## --}}

    <div id="imageModalId" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
        <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
            <div class="flex justify-end p-2">
                <button onclick="closeModal('imageModalId')" type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="p-6 pt-0 text-center">
                <form id="imageForm" action="/api/saveImage" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <input type="hidden" name="imageTag">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image actuelle</label>
                        <div class="col-sm-12 col-md-7">
                            <img id="currentImage" src="" alt="Image actuelle" class="max-w-full h-auto" />
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nouvelle image</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="file" name="newImage" class="form-control">
                            <div style="display:none;" id="error-image" class="alert alert-danger"></div>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4">
                        <button id="submitImage" type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg mr-2">Enregistrer</button>
                        <button type="button" onclick="closeModal('imageModalId')" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>

</body>
<!-- Footer Start -->


@include('Front.partials.footer')
<!-- Footer End -->
<script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
<!-- Library Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/sceditor.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/formats/bbcode.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/d58j15ovrhva2cvk6zlqhfver1ayuy6r7xf4ez5h5kfsqxq5/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>


<script type="text/javascript">
    $(document).ready(function(e) {
        setTimeout(function() {
            $("#preloader-area").hide();
        }, 1500);
    })
</script>


<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();


    const openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'block';
        document.body.classList.add('overflow-y-hidden');
    }

    const closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none';
        document.body.classList.remove('overflow-y-hidden');
    }


        const openModalImage = function(tag) {
            "use strict"
            console.log(submitImage)
            openModal('imageModalId')
            // const modal = document.getElementById('imageModalId');
            // console.log(modal,imageModalId)
            document.querySelector("input[name='imageTag']").value = tag;

            // Fetch and display the current image
            fetchImageData(tag)
                .then(imageUrl => {
                    document.getElementById("currentImage").src = imageUrl;
                    modal.style.display = 'block';
                    document.body.classList.add('overflow-y-hidden');
                })
                .catch(error => console.error('Erreur lors de la récupération de l\'image:', error));
        }

        const fetchImageData = function(tag) {
            return fetch("/api/image/", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ tag })
                })
                .then(response => response.json())
                .then(data => {
                    return data.imageUrl;
                });
        }


        document.addEventListener("DOMContentLoaded", function() {
            const userRole = @json(Auth::user()->role ?? '{}');
            if (userRole.nom === 'admin') {
                const parties = document.querySelectorAll(".partie");
                parties.forEach(function(partie) {
                    partie.addEventListener("mouseover", handleMouseOver);
                    partie.addEventListener("mouseleave", handleMouseLeave);
                    partie.editButtonAdded = false;
                });
            }
            tinymce.init({
                selector: 'textarea',
                plugins: 'textcolor colorpicker',
                toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons',
                menubar: ' edit view  format tools table ',
                height: 200,
                setup: function(editor) {
                    editor.on('init', function() {
                        this.getDoc().body.style.fontFamily =
                            'Arial, Helvetica, sans-serif'; // Changer la police par défaut si nécessaire
                    });
                }
            });
        });

    function handleMouseOver(e) {
        const tag = e.target.getAttribute("data-tag")  || e.currentTarget.getAttribute("data-tag");
        const tagList = document.querySelectorAll(`[data-tag='${tag}']`);


        tagList.forEach((node) => {
            node.style.border = "2px dashed #ff0000";
            const button = node.querySelector('.editButton');
            // Create and append the button only if it doesn't exist
            if (!button) {
                const newButton = createEditButton(node, "modalId");
                node.appendChild(newButton);
                node.editButtonAdded = true;
            }
        });

    }

    function handleMouseLeave(e) {
        const tag = e.target.getAttribute("data-tag");
        const tagList = document.querySelectorAll(`[data-tag='${tag}']`);
        tagList.forEach((node) => {
            node.style.border = "";
            const button = node.querySelector('.editButton');
            if (button && node.editButtonAdded) {
                button.parentNode.removeChild(button);
            }
            node.editButtonAdded = false;
        });
    }

    function getTag(domEl){
        return !domEl.getAttribute("data-tag") ? getTag(domEl.parentNode) : domEl.getAttribute("data-tag");
    }

    function createEditButton(parentElement, modalId) {
        const button = document.createElement('button');
        button.classList.add("editButton", "absolute", "bottom","right-0", "p-2", "bg-gray-800", "text-white",
            "rounded-full");
        button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>`;

        button.addEventListener('click', function(e) {
            e.preventDefault();

            const tag = getTag(e.target);

                // console.log('Bandama', tag, tag && tag.startsWith("image."));
                if (tag && tag.startsWith("image.")) {

                    const url = generateImageEditUrl(tag);
                        // Rediriger vers l'URL générée
                        window.location.href = url;
                    //const url = generateImageEditUrl(tag);
                    // openModalImage(url);
                }else{
                    openModalWithData(modalId, tag);
                    openModal(modalId);

                }
        }, false);
        function generateImageEditUrl(tag) {
            const key = tag;  // Extraire la partie clé du tag
            return `/content/Image/${key}/edit`;
        }
        return button;
    }

        function openModalWithData(modalId, tag) {
            displayError('en');
            displayError('fr');

            const modal = document.getElementById(modalId);
            document.querySelector("input[name='tag']").value = tag;

            // les données de l'API
            fetch("/api/content/", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        tag
                    })
                })
                .then(response => response.json())
                .then(data => {
                    //console.log(tinyMCE.get("description_fr"), tinyMCE.get("description_en"))
                    document.getElementById("description_fr").value = data.fr;
                    document.getElementById("description_en").value = data.en;
                    // tinyMCE.activeEditor.get("description_fr").setContent(data.fr);
                    // tinyMCE.activeEditor.get("description_en").setContent(data.en);

                    modal.style.display = 'block';
                    document.body.classList.add('overflow-y-hidden');
                })
                .catch(error => console.error('Erreur lors de la récupération du contenu:', error));
        }

        function displayError(lang, error = "") {
            let htmlEl = document.getElementById(`error-${lang}`);
            if (error !== "") {
                htmlEl.style.display = "block";
                const message = error === "validation.max.string" ? `Nombre de caractères supérieur à la limite autorisée` :
                    `Texte obligatoire`;
                htmlEl.innerHTML = message;
            } else {
                htmlEl.style.display = "none";
            }
        }

        const confirmForm = document.getElementById("confirmForm");

        confirmForm.addEventListener("submit", (e) => {
            e.preventDefault();

            const description_fr = document.getElementById("description_fr").value;
            const description_en = document.getElementById("description_en").value;
            const tag = document.querySelector("input[name='tag']").value;

            if (description_fr.trim() === "" || description_en.trim() === "") {
                alert("Saisir une valeur dans les deux champs de texte!");
                return;
            }

            const formData = new FormData(e.target);
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });
            data["tag"] = tag;

            fetch("/api/save", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Modification effectuée avec succès");
                        window.location.reload();
                    } else {
                        for (let lang in data.errors) {
                            displayError(lang, data.errors[lang][0])
                        }
                    }
                })
                .catch(error => {
                    console.error("Une erreur s'est produite lors de la soumission du formulaire:", error);
                    alert(
                        "Une erreur s'est produite lors de la soumission du formulaire. Veuillez réessayer plus tard."
                    );
                });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
            const navbar = document.getElementById('navbar-sticky');

            menuButton.addEventListener('click', function() {
                navbar.classList.toggle('hidden');
            });
        });


</script>


{{-- <script src="{{ asset('js/script1.js') }}"></script> --}}
@stack('scripts')

</html>
