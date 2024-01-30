<?php
$url = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>VITIB-ADMIN</title>

    <link href="img/favicon.ico" rel="icon">
    {{-- <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons.min.css">
    <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons-wind.min.css"> --}}
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">

    <!-- CSS Libraries -->


    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">


    <!-- Start GA -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<style>
    .text-white {
        color: #fffff !important;
    }
</style>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                    {{-- <div class="search-element">
                        <input class="form-control" type="search" placeholder="Rechercher" aria-label="Search"
                            data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>

                    </div> --}}
                </form>

                <li class="dropdown"><a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}"
                            class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Bienvenue
                            {{ app('App\Http\Controllers\AdminController')->getUsername() }} </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Connecté il y a 5 min</div>
                        <a href="/profil_admin" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>

                        {{-- <a href="features-settings.html" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Paramètre
                        </a> --}}
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Déconnexion
                        </a>
                    </div>
                </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand" style="margin-bottom:20px;margin-top:20px;">
                        <a href="/home">
                            <img src="{{ asset('img/logo2.png') }}" width="200" alt="">
                        </a>
                    </div>

                    <ul class="sidebar-menu">
                        {{-- <li class="menu-header">VITIB-ADMIN</li> --}}
                        <li class="dropdown">
                            <a href="/admin" class=""><i class="fas fa-home"></i> <span> Accueil </span></a>

                        </li>
                        <li class="menu-header">Partenaires et Secteurs</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown <?php echo $url === '/partner' || $url === '/partner/create' ? ' active bg-primary text-white' : ''; ?>"
                                data-toggle="dropdown"><i class="fas fa-handshake"></i> <span
                                    class="">Partenaires</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link<?php echo $url === '/partner' ? ' active bg-primary text-white' : ''; ?>" href="/partner">Liste</a></li>
                                <li><a class="nav-link<?php echo $url === '/partner/create' ? ' active bg-primary text-white' : ''; ?>" href="/partner/create">Enregistrer</a></li>
                            </ul>
                        </li>
                        {{-- <li class="menu-header">Secteurs d'activités</li> --}}
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown <?php echo $url === '/sector' || $url === '/sector/create' ? ' active bg-primary text-white' : ''; ?>"
                                data-toggle="dropdown"><i class="fas fa-list"></i> <span>Secteurs</span></a>
                            <ul class="dropdown-menu" style="">
                                <li><a class="nav-link <?php echo $url === '/sector' ? ' active bg-primary text-white' : ''; ?>" href="/sector">Liste</a></li>
                                <li><a class="nav-link<?php echo $url === '/sector/create' ? ' active bg-primary text-white' : ''; ?>" href="/sector/create">Enregistrer</a></li>

                            </ul>
                        </li>
                        <li class="menu-header">Comptes Entreprise</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown <?php echo $url === '/company' || $url === '/company/create' ? ' active bg-primary text-white' : ''; ?>"
                                data-toggle="dropdown"><i class="fas fa-list"></i> <span>Comptes Entreprise</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link <?php echo $url === '/company' ? ' active bg-primary text-white' : ''; ?>" href="/company">Liste des Entreprises</a>
                                </li>
                                <li><a class="nav-link" href="/company/create">Enregistrer</a></li>

                            </ul>
                        </li>
                        <li class="menu-header">Annonces et Actualités </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown <?php echo $url === '/new' || $url === '/new/create' ? ' active bg-primary text-white' : ''; ?>"data-toggle="dropdown">
                                <i class="fas fa-newspapper"></i> <span>Actualités</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link <?php echo $url === '/new' ? ' active bg-primary text-white' : ''; ?>" href="/new">Liste des actualités
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link <?php echo $url === '/new/create' ? ' active bg-primary text-white' : ''; ?>" href="/new/create">
                                        Ajouter une actualité
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" >
                             <a href="#" class="nav-link has-dropdown <?php echo $url === '/annonces-recentes' || $url === '/annonces-moins-recentes' ? ' active bg-primary text-white' : ''; ?>"
                                data-toggle="dropdown"><i class="fas fa-briefcase"></i> <span>Récentes & moins récentes</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('Front.admin.annonce.recent') }}"
                                    class="nav-link{{ $url === '/annonces-recentes' ? 'active' : '' }}">Annonces Récentes</a>
                                </li>
                                <li><a href="{{ route('Front.admin.annonce.moins-recent') }}" class="nav-link{{ $url === '/annonces-moins-recentes' ? 'active' : '' }}">
                                     Annonces moins récentes</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="menu-header"> Gestion des differents types d'Annonces</li> --}}
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown <?php echo $url === '/tender' || $url === '/tender/create' ? ' active bg-primary text-white' : ''; ?>"
                                data-toggle="dropdown"><i class="fas fa-briefcase"></i> <span>Appels d'Offres</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link <?php echo $url === '/tender' ? ' active bg-primary text-white' : ''; ?>" href="/tender">Liste des appels </a></li>
                                <li><a class="nav-link<?php echo $url === '/tender/create' ? ' active bg-primary text-white' : ''; ?>" href="/tender/create">Ajouter un appel
                                        d'offre</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown <?php echo $url === '/career' || $url === '/career/create' ? ' active bg-primary text-white' : ''; ?>"data-toggle="dropdown">
                                <i class="fas fa-users"></i> <span>Appels à Candidature</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link <?php echo $url === '/career' ? ' active bg-primary text-white' : ''; ?>" href="/career">Liste des appels
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link <?php echo $url === '/career/create' ? ' active bg-primary text-white' : ''; ?>" href="/career/create">
                                        Ajouter un appel d'offre
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown<?php echo $url === '/job' || $url === '/job/create' ? ' active bg-primary text-white' : ''; ?>"
                                data-toggle="dropdown"><i class="fas fa-user-plus"></i> <span>Offres d'emploi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link <?php echo $url === '/job' ? ' active bg-primary text-white' : ''; ?>" href="/job">Liste des offres </a></li>
                                <li><a class="nav-link<?php echo $url === '/job/create' ? ' active bg-primary text-white' : ''; ?>" href="/job/create">Ajouter une offre</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown <?php echo $url === '/event' || $url === '/event/create' ? ' active bg-primary text-white' : ''; ?>"
                                data-toggle="dropdown"><i class="fas fa-folder"></i> <span>Demande de
                                    manifestation</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link <?php echo $url === '/event' ? ' active bg-primary text-white' : ''; ?>" href="/event">Liste des demandes </a>
                                </li>
                                <li><a class="nav-link <?php echo $url === '/event/create' ? ' active bg-primary text-white' : ''; ?>" href="/event/create">Ajouter une
                                        demande</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown <?php echo $url === '/quotation' || $url === '/quotation/create' ? ' active bg-primary text-white' : ''; ?>"
                                data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Demande de
                                   Cotation</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link <?php echo $url === '/quotation' ? ' active bg-primary text-white' : ''; ?>" href="/quotation">Liste des demandes </a>
                                </li>
                                <li><a class="nav-link <?php echo $url === '/quotation/create' ? ' active bg-primary text-white' : ''; ?>" href="/quotation/create">Ajouter une
                                        demande</a></li>
                            </ul>
                        </li>


                    </ul>


            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')

            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Droit reservés &copy; 2023 <div class="bullet"></div> Fait par <a href="/admin">VITIB</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{asset('assets/modules/chart.min.js')}}"></script>
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>

    <script src="{{asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>

    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>

    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>

    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>

    <!-- JS Libraies -->

    {{-- <!-- Page Specific JS File -->
    <script src="{{asset('assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script> --}}

    <!-- Template JS File -->
    @stack('scripts')

    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    <script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>

    <script src="{{ asset('assets/js/page/index-0.js') }}"></script>


</body>

</html>
