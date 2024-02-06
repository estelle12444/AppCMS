<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600 bg-gradient-to-r">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/home" class="flex items-center">
            <img src="{{ asset('img/slider/LOGO-VITIB-SA.png') }}" width="150" alt="logo">
        </a>
        <div class="flex xl:order-2">

            @if (auth()->check())
                @php
                    $user = auth()->user();
                    $status = $user->status;
                    $sessionValid = !auth()->guest(); // Vérifie si la session est valide
                @endphp

                @if ($status && $sessionValid)
                    <!-- Afficher le bouton Avatar si l'utilisateur est connecté, son statut est vrai et la session est valide -->
                    <div class="flex items-center space-x-4">
                        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            <button id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                                class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <svg class="w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </button>
                            <span
                                class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                        </div>
                        <div id="userDropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                <div>{{ app('App\Http\Controllers\ProfilController')->getUsername() }}</div>
                                <div class="font-bold truncate">
                                    {{ app('App\Http\Controllers\ProfilController')->getEmail() }}</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="avatarButton">
                                <li class="flex items-center">
                                    <a href="/profil"
                                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-6 h-6 mr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                        <span> {{__('layouts.nav.profil')}}</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="py-1 flex items-center ">

                                    <a href="/profil"
                                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor"
                                            class="w-5 h-5 mr-2 text-red-500">
                                            <path fill-rule="evenodd"
                                                d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M6 10a.75.75 0 01.75-.75h9.546l-1.048-.943a.75.75 0 111.004-1.114l2.5 2.25a.75.75 0 010 1.114l-2.5 2.25a.75.75 0 11-1.004-1.114l1.048-.943H6.75A.75.75 0 016 10z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-red-500">{{__('layouts.nav.logout')}}</span>
                                    </a>


                            </div>
                        </div>
                        <div class="font-medium dark:text-white">
                            <div>{{__('layouts.nav.greet')}}</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                {{ app('App\Http\Controllers\AdminController')->getUsername() }}
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Afficher le bouton "SE CONNECTER" si l'utilisateur est connecté, mais son statut est faux ou la session est expirée -->
                    <a href="{{ route('login') }}" class="xl:pl-6">
                        <button type="button" style="background-color: #F18700"
                            class="pl-4  pr-4 pt-2 pb-2 font-extrabold rounded-none white text-center hidden xl:inline">
                            {{__('layouts.nav.login')}}
                        </button>
                    </a>
                @endif
            @endif

            <p class=" pl-4 pt-4 xl:pt-2 xl:pl-8">
                <strong style="color:  #F18700;"><a style="text-decoration:none;cursor:pointer;" href="{{ route('lang', ['locale' => 'fr']) }}">{{ __('FR') }}</a></strong> | <a  style="text-decoration:none;cursor:pointer;" href="{{ route('lang', ['locale' => 'en']) }}">{{ __('EN') }} </a>
            </p>

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-700 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">{{__('layouts.nav.open')}}</span>
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
                        class="block py-2 pl-3 text-gray-700 {{ preg_match('/^\/(home|avantages\/[^\/]+)/',request()->path()) ? 'xl:text-orange-400 text-orange-400' : ''}} rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">{{__('layouts.nav.home')}}</a>
                </li>
                <li>
                    <a href="/about"
                        class="block py-2 pl-3 pr-4 text-gray-700 {{ request()->path() == 'about' ? 'xl:text-orange-400 text-orange-400' : ''}} rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">{{__('layouts.nav.about')}}</a>
                </li>
                <li>
                    <a href="/opportunity"
                        class="block py-2 pl-3 pr-4 text-gray-700 {{ request()->path() == 'opportunity' ? 'xl:text-orange-400 text-orange-400' : ''}} rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">{{__('layouts.nav.opportunities')}}</a>
                </li>
                <li>
                    <a href="/installer"
                        class="block py-2 pl-3 pr-4 text-gray-700 {{ request()->path() == 'installer' ? 'xl:text-orange-400 text-orange-400' : ''}} rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">{{__('layouts.nav.install')}}</a>
                </li>
                <li>
                    <a href="/partners"
                        class="block py-2 pl-3 pr-4 text-gray-700 {{ str_starts_with(request()->path(), 'partners') ? 'xl:text-orange-400 text-orange-400' : ''}} rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">{{__('layouts.nav.partners')}}</a>
                </li>
                <li>
                    <a href="/actu"
                        class="block py-2 pl-3 pr-4 text-gray-700 {{ request()->path() == 'actu' ? 'xl:text-orange-400 text-orange-400' : ''}} rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">{{__('layouts.nav.galery')}}</a>
                </li>
                <li>
                    <a href="/annonce"
                        class="block py-2 pl-3 pr-4 text-gray-700 {{ preg_match('/^\/(annonce|info\/[^\/]+)/',request()->path()) ? 'xl:text-orange-400 text-orange-400' : ''}} rounded xl:bg-transparent xl:hover:text-amber-500 xl:p-0 xl:dark:text-blue-500"
                        aria-current="page">{{__('layouts.nav.news')}}</a>
                </li>
            </ul>

            @if (!auth()->check() || !$status || !$sessionValid)
                <!-- Afficher le bouton "SE CONNECTER" si l'utilisateur n'est pas connecté ou son statut est faux ou la session est expirée -->
                <a href="{{ route('register') }}" class="xl:pl-6 ml-4">
                    <button type="button" style="background-color: #F18700"
                        class="pl-4 pr-4 pt-2 pb-2 font-extrabold rounded-none white text-center xl:inline">
                        {{__('layouts.nav.register')}}
                    </button>
                </a>
            @endif
        </div>
    </div>
</nav>
