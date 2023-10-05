<?php
$url = $_SERVER['REQUEST_URI'];
$matches = preg_match('/^\/(annonce|info\/[^\/]+)/', $url);
?>

<nav
    class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600 bg-gradient-to-r">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/home" class="flex items-center">
            <img src="{{ asset('img/slider/Logo-VILLAGE.svg') }}" width="150" alt="logo">
        </a>
        <div class="flex xl:order-2">
            @if (auth()->check())
                <div class="flex items-center space-x-4">
                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <button id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                            class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <svg class="w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <span
                            class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                    </div>
                    <div id="userDropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>{{ app('App\Http\Controllers\ProfilController')->getUsername() }}</div>
                            <div class="font-medium truncate">
                                {{ app('App\Http\Controllers\ProfilController')->getEmail() }}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                            <li>
                                <a href="/profil"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tableau
                                    de bord</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Paramètre</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="/logout"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Déconnexion</a>
                        </div>
                    </div>
                    <div class="font-medium dark:text-white">
                        <div>Salut</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            {{ app('App\Http\Controllers\AdminController')->getUsername() }}
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}">
                    <button type="button" style="background-color: #F18700"
                        class="pl-4 pr-4 pt-2 pb-2 font-medium rounded-none white text-center hidden xl:inline">
                        S'INSCRIRE
                    </button>
                </a>
            @endif

            <p class="pl-4 pt-2">
                <strong style="color:  #F18700;">FR</strong> | EN
            </p>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-700 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full xl:flex xl:w-auto xl:order-1 space-x-4 xl:space-x-0 xl:space-y-0"
            id="navbar-sticky">
            <ul
                class="flex flex-col p-4 xl:p-0 mt-4 font-medium border border-gray-100 rounded-lg xl:flex-row xl:space-x-4 xl:mt-0 xl:border-0 dark:bg-gray-800 xl:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/home"
                        class="block py-2 pl-3 text-gray-700 <?php if ($url == '/home') {
                            echo 'xl:text-orange-400 text-orange-400';
                        } ?> rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">Accueil</a>
                </li>
                <li>
                    <a href="/about"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/about') {
                            echo 'xl:text-orange-400 text-orange-400';
                        } ?> rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">A propos</a>
                </li>
                <li>
                    <a href="/opportunity"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/opportunity') {
                            echo 'xl:text-orange-400 text-orange-400';
                        } ?> rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">Opportunités</a>
                </li>
                <li>
                    <a href="/installer"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/installer') {
                            echo 'xl:text-orange-400 text-orange-400';
                        } ?> rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">S'implanter</a>
                </li>
                <li>
                    <a href="/partners"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php echo (str_starts_with($url, '/partners')) ? 'xl:text-orange-400 text-orange-400' : ''; ?> rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">Nos partenaires</a>
                </li>
                <li>
                    <a href="/actu"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/actu') {
                            echo 'xl:text-orange-400 text-orange-400';
                        } ?> rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">Actualités</a>
                </li>
                <li>
                    <a href="/media"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/media') {
                            echo 'xl:text-orange-400 text-orange-400';
                        } ?> rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">Mediathèque</a>
                </li>
                <li>
                    <a href="/annonce"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($matches) {
                            echo 'xl:text-orange-400 text-orange-400';
                        } ?> rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">Annonces</a>
                </li>
            </ul>
            </ul>
            <a href="{{ route('login') }}">
                <button type="button" style="background-color: #F18700"
                    class="pl-4 pr-4 pt-2 pb-2 font-medium rounded-none white text-center xl:hidden">
                    S'INSCRIRE
                </button>
            </a>
        </div>
    </div>
</nav>
