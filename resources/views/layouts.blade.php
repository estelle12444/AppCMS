<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>VITIB-Zone Franche Afrique </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{ asset('img/icon/icon.ico') }}" rel="icon">
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

    <hr>

</body>
<!-- Footer Start -->


@include('Front.partials.footer')
<!-- Footer End -->



<!-- Library Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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

    document.addEventListener("DOMContentLoaded", function() {
        var parties = document.querySelectorAll(".partie");
        var userRole = @json(Auth::user()->role ?? '{}');
        if (userRole.nom === 'admin') {
            parties.forEach(function(partie) {
                partie.addEventListener("mouseover", function(e) {
                    const tag = e.target.getAttribute("data-tag");
                    const tagList = [...document.querySelectorAll(`[data-tag='${tag}']`)];
                    tagList.forEach((node)=>{
                        node.style.border = "2px dashed #ff0000";
                        const button = document.createElement('button');
                        button.setAttribute('data-tag', tag);
                        button.classList = "editButton absolute bottom-4 right-0 p-2 bg-gray-800 text-white rounded-full"
                        button.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        `;
                        node.append(button);
                    })
                });

                partie.addEventListener("mouseleave", function(e) {
                    const tag = e.target.getAttribute("data-tag");
                    const tagList = [...document.querySelectorAll(`[data-tag='${tag}']`)];
                    tagList.forEach((node)=>{
                        node.style.border = "";
                        node.removeChild(node.getElementsByTagName('button')[0]);
                    })
                });
            });
        }
    });
</script>


<script src="{{ asset('js/script1.js') }}"></script>
@stack('scripts')
</html>
