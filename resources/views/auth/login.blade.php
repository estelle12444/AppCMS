@extends('auth.layout')
@section('content')
    {{-- <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2" style="margin-top: 140px;padding-left: 90px;">
            <img aria-hidden="true" class="" width="300" src="{{ asset('/img/logo2.png') }}" alt="Office" />

        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                        CONNEXION
                    </h1>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                        <input
                            class=" @error('email') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Entrer votre mail" value="{{ old('email') }}" required autocomplete="email"
                            name="email" autofocus />

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Mot de Passe</span>
                        <input name="password" required autocomplete="current-password"
                            class=" @error('password') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="***************" type="password" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <!-- You should use a button here, as the anchor is only used for the example  -->
                    <a style="background-color:#193487;"
                        class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('se connecter') }}
                        </button>
                    </a>
                    {{--
                <hr class="my-8" />

                <button
                    class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    <svg class="w-4 h-4 mr-2" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg>
                    Github
                </button>
                <button
                    class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    <svg class="w-4 h-4 mr-2" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z" />
                    </svg>
                    Twitter
                </button> --}}

    {{-- <p class="mt-4">
                        <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                            href="{{ route('password.request') }}">
                            Mot de passe oublié?
                        </a>
                    </p>
                    <p class="mt-1">
                        <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                            href="{{ route('register') }}">
                            Creer un compte
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
            <img src="{{ asset('img/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
        </div>

        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('Connexion') }}</h4>
                </div>


                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">

                            <label for="email" for="email">{{ __('Email') }}</label>


                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Mot de passe') }}</label>


                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Se souvenir de moi') }}
                                </label>
                            </div>
                        </div>


                        <div class="form-group">

                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                {{ __('se connecter') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            @if (Route::has('register'))
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('Etes-vous inscrit ?') }}
                                </a>
                            @endif

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row g-0">
        <div class="col-lg-4">
            <div class="p-5">
                <img aria-hidden="true" class="" width="250" style="margin-top:20px"
                    src="{{ asset('../img/logo2.png') }}" alt="Office" />
                <br>
                <h3 class="fw-normal mb-10" style="color:#193487; padding-top :50px"> <strong>
                        Rejoignez-nous
                        dès aujourd'hui
                        et transformez
                        l'avenir de votre
                        entreprise</strong></h3>
            </div>
        </div>
        <div class="col-lg-8 ">
            <div class="p-5"
                style="background-color: rgb(244, 244, 244); margin-top:25px; margin-right:20px;margin-bottom:25px">
                <h3 class="fw-normal mb-5" style="color:#193487;text-align:center">
                    <strong> CONNEXION</strong>
                </h3>
                <form method="POST" action="{{ route('login') }}" style="padding-left:10%">
                    @csrf

                    <div class="" >
                        <div class="col-md-10 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="email" id="form3Examplea7" name="email"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    autofocus
                                    class="form-control form-control-lg @error('email') is-invalid @enderror " />
                                <label class="form-label"
                                    for="form3Examplea7">{{ __('Email ') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-10 mb-4 pb-2" >
                            <div class="form-outline ">
                                <input type="text" id="form3Examplea5" name="password" required
                                    autocomplete="password" autofocus
                                    class="form-control form-control-lg @error('password') is-invalid @enderror " />
                                <label class="form-label"
                                    for="form3Examplea5">{{ __('Mot de passe ') }}</label>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-primary btn-lg"
                        data-mdb-ripple-color="dark" style="background-color:#193487;" >Se
                        Connecter</button>
                    <hr class="my-8" />
                    <p class="mt-4">
                        <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                            href="{{ route('password.request') }}">
                            Mot de passe oublié?
                        </a>
                    </p>
                    <p class="mt-1">
                        <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                            href="{{ route('register') }}">
                            Créer un compte
                        </a>
                    </p>
                    <a class="text-sm text-center font-medium  dark:text-purple-400 hover:underline"
                    href="/home">
                        <p class="mt-4" style="color:orange;">
                            Retourner à la page d'acceuil
                        </p>
                     </a>
                </form>
            </div>
        </div>
    </div>
@endsection
