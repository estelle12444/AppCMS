<?php
$url = $_SERVER['REQUEST_URI'];
?>
<nav
    class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600 bg-gradient-to-r ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/home" class="flex items-center">
            <img src="{{ asset('img/slider/logo-VILLAGE.svg') }}" width="150" alt="logo">
        </a>
        <div class="flex md:order-2">
            <a href="#">
                <button type="button" style="background-color:  #F18700;"
                    class="text-white bg-orange-500 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800 p-8">
                    S'inscrire</button>
            </a>
            <p class="pl-4 pt-2">
                <strong style="color:  #F18700;">FR</strong> | EN
            </p>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-700 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/home"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/home') {
                            echo 'md:text-orange-400';
                        } ?>  rounded md:bg-transparent md:hover:text-amber-500 md:p-0 md:dark:text-blue-500"
                        aria-current="page">Accueil</a>
                </li>
                <li>
                    <a href="/about"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/about') {
                            echo 'md:text-orange-400';
                        } ?>  rounded md:bg-transparent md:hover:text-amber-500  md:p-0 md:dark:text-blue-500"
                        aria-current="page">A propos</a>
                </li>
                <li>
                    <a href="/opportunity"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/opportunity') {
                            echo 'md:text-orange-400';
                        } ?>  rounded md:bg-transparent md:hover:text-amber-500  md:p-0 md:dark:text-blue-500"
                        aria-current="page">Opportunités</a>
                </li>
                <li>
                    <a href="/installer"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/installer') {
                            echo 'md:text-orange-400';
                        } ?>  rounded md:bg-transparent md:hover:text-amber-500  md:p-0 md:dark:text-blue-500"
                        aria-current="page">S'implanter</a>
                </li>
                <li>
                    <a href="/partners"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/partners') {
                            echo 'md:text-orange-400';
                        } ?>  rounded md:bg-transparent md:hover:text-amber-500  md:p-0 md:dark:text-blue-500"
                        aria-current="page">Nos partenaires</a>
                </li>
                <li>
                    <a href="/media"
                        class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/about') {
                            echo 'md:text-orange-400';
                        } ?>  rounded md:bg-transparent md:hover:text-amber-500  md:p-0 md:dark:text-blue-500"
                        aria-current="page">Mediathèque</a>
                </li>
                <li>
                    <a href="/actu"
                    class="block py-2 pl-3 pr-4 text-gray-700 <?php if ($url == '/actu') {
                        echo 'md:text-orange-400';
                    } ?>  rounded md:bg-transparent md:hover:text-amber-500  md:p-0 md:dark:text-blue-500"
                    aria-current="page">Annonces </a></li>
            </ul>
        </div>
    </div>

</nav>



{{-- <div class="flex flex-row ">
    <div class="basis-1/4">
        <img src="{{ asset('img/logo2.png') }}" width="150" alt="logo">
    </div>
    <div class="basis-1/2">
        <nav class="flex justify-center space-x-4">
            <a href="/home" class="px-2 py-2 text-orange rounded-lg hover:bg-slate-100 hover:text-slate-900">
                Accueil</a>
            <a href="/about" class="px-1 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">A
                propos</a>
            <a href="/opportunity" class=" px-2 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                Opportunité</a>
            <a href="/join" class="px-2 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                S'implanter</a>
            <a href="/etsagre" class="px-2 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                Nos
                Partenaires</a>


            <a href="/reports" class=" px-2 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                Médiathèque</a>

        </nav>

    </div>
    <div class="basis-1/4">
        <div class="flex flex-row">
            <div class="basis-1/4"> </div>
            <div class="basis-2/4">
                <a href="/actu" class=" px-2 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                    Annonces</a>
                <button type="button" class=" rounded-none bg-amber-500 text-white ">
                    S'inscrire
                </button>
            </div>
            <div class="basis-1/4">
                FR | EN </div>
        </div>
    </div>
</div> --}}
