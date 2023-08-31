<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>VITIB-Zone Franche Afrique </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('css/indexx.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body>
    <div class="md:container md:mx-auto   py-5 bg-gradient-to-r from-orange-100 from-20%  to-gray-100 to-90% ">
        <!-- Navbar Start -->
        @include('Front.partials.nav')
    </div>
    <!-- Navbar End -->

    <hr>
    @yield('content')

    <hr>
    <!-- Footer Start -->
    <!-- Footer End -->

    @include('Front.partials.footer')

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>


</html>
