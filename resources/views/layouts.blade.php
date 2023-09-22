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
    <!-- Footer Start -->
    <!-- Footer End -->

</body>
@include('Front.partials.footer')


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
</script>

<script src="{{ asset('js/script1.js') }}"></script>
 </html>
