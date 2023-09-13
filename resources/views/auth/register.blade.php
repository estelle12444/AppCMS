@extends('auth.layout')
@section('content')
    {{-- <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="login-brand">
            <img src="{{ asset('img/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h2 style="float:left; color:rgb(0, 0, 0)">{{ __('Inscrivez-vous') }}</h2>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf


                    <div class="row">
                        <div class="form-group col-6">
                            <label for="frist_name">{{ __('Nom') }}</label>

                            <input id="frist_name" type="text" class="form-control" name="nom"
                                @error('email') is-invalid @enderror" value="{{ old('nom') }}" required
                                autocomplete="nom" autofocus>
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="last_name">{{ __('Prenom') }}</label>
                            <input id="last_name" type="text" class="form-control" @error('email') is-invalid @enderror"
                                name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                            @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="frist_name">{{ __('Telephone') }}</label>

                            <input id="phone" type="tel" class="form-control" name="telephone"
                                @error('telephone') is-invalid @enderror" value="{{ old('telephone') }}" required
                                autocomplete="telephone" autofocus>
                            @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">

                            <label for="piece">{{ __('Piece d\'identite') }}</label>


                            <input id="piece" type="text" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('piece')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="email">{{ __('Email Address') }}</label>


                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group col-6">
                            <label for="email">{{ __('Adresse') }}</label>


                            <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror"
                                name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse">

                            @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="password">{{ __('Password') }}</label>


                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>


                        <div class="form-group col-6">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>


                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">

                        </div>
                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary" style="text-align:center">
                            {{ __('Register') }}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div> --}}


    {{-- <div class="flex flex-row bg-white">
        <div class="basis-1/3">
            <img aria-hidden="true" class="" width="400" style="margin-top:20px;padding-left:30px"
                src="{{ asset('../img/logo2.png') }}" alt="Office" />
            <h2 class="text-blue-400 font-bold">
                Rejoignez-nous
                dès aujourd'hui
                et transformez
                l'avenir de votre
                entreprise
            </h2>
        </div>
        <div class="basis-2/3 " style="background-color: gainsboro">
            <h1 class=" text-lg "> INSCRIPTION</h1>
            <div class="grid grid-cols-2 md:grid-cols-2">

              <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="py-20 ">
                        <label class="block text-md">
                            <span class="text-gray-700 dark:text-gray-400"> {{ __('Nom De Famille') }} </span>
                            <input type="text" name="nom" value="{{ old('nom') }}" required autocomplete="nom"
                                class=" @error('nom') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                type="text" placeholder="ex:Joe" />

                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </label>
                    </div>
                    <div class=" ">
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400"> {{ __('Prénom ') }}</span>
                            <input name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom"
                                class="  @error('prenom') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder=" john" type="text" />

                            @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </label>
                    </div>
                </form>

            </div>
        </div>
    </div>

    {{-- <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <h1 class="mb-4 text-2xl font-bold text-gray-700 dark:text-gray-200">
                        {{ __('S\'inscrivez-vous') }}
                    </h1>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400"> {{ __('Prénom ') }}</span>
                        <input name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom"
                            class="  @error('prenom') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder=" john" type="text" />

                        @error('prenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                            {{ __('Résidence ') }}
                        </span>
                        <input name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse"
                            class=" @error('adresse') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="ex:treichville" type="text" />
                        @error('adresse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                            {{ __('Telephone ') }}
                        </span>
                        <input name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone"
                            class=" form-control @error('telephone') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="" type="text" />
                        @error('telephone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                            {{ __('Piece didentite ') }}
                        </span>
                        <input name="piece_identite" value="{{ old('piece_identite') }}" required
                            autocomplete="piece_identite"
                            class=" form-control @error('piece_identite') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="" type="text" />
                        @error('piece_identite')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                            {{ __('Email ') }}
                        </span>
                        <input name="email" value="{{ old('email') }}" required autocomplete="email"
                            class=" form-control @error('email') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="" type="mail" />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                            {{ __('Mot de passe ') }}
                        </span>
                        <input name="password" required autocomplete="password"
                            class=" form-control @error('password') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="***************" type="password" />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                            Confirmer le mot de passe
                        </span>
                        <input @error('password') is-invalid @enderror" name="password_confirmation" required
                            autocomplete="new-password"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="***************" type="password" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <div class="flex mt-6 text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox"
                                class="form-control @error('policy') is-invalid @enderror text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" />
                            <span class="ml-2">
                                Je suis d'accord avec
                                <span class="underline"> la politique de confidentialité</span>
                            </span>
                            @error('policy')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </label>
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

                    <a style="background-color:#193487;"
                        class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('S\'inscrire') }}
                        </button>
                    </a>
                    <hr class="my-8" />
                    <p class="mt-4">
                        <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                            href="{{ route('login') }}">
                            Déja un compte? Se connecter
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div> --}}
    {{--
        <div
            class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" action="#">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h5>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="name@company.com" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required>
                </div>
                <div class="flex items-start">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                required>
                        </div>
                        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                            me</label>
                    </div>
                    <a href="#" class="ml-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost
                        Password?</a>
                </div>
                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
                    to your account</button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create
                        account</a>
                </div>
            </form>
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
                    <strong>INSCRIVEZ-VOUS</strong>
                </h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">

                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" id="form3Examplea4" name="prenom" value="{{ old('prenom') }}"
                                    required autocomplete="prenom"
                                    class=" form-control form-control-lg @error('prenom') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                <label class="form-label" for="form3Examplea4">{{ __('Prénom ') }}</label>
                            </div>

                            @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" id="form3Examplea5"
                                    class="form-control form-control-lg  @error('email') is-invalid @enderror"
                                    value="{{ old('nom') }}" name="nom" required autocomplete="nom" autofocus />
                                <label class="form-label" for="form3Examplea5">{{ __('Nom ') }}</label>
                            </div>
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" id="form3Examplea4" name="adresse" value="{{ old('adresse') }}"
                                    required autocomplete="adresse"
                                    class=" form-control form-control-lg @error('adresse') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                <label class="form-label" for="form3Examplea4">{{ __('Adresse ') }}</label>
                            </div>

                            @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" id="form3Examplea8" name="telephone" value="{{ old('telephone') }}"
                                    required
                                    class="form-control form-control-lg  @error('telephone') is-invalid @enderror" />
                                <label class="form-label" for="form3Examplea8">
                                    {{ __('Telephone ') }}</label>
                            </div>
                            @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="email" id="form3Examplea7" name="email" value="{{ old('email') }}"
                                    required autocomplete="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror " />
                                <label class="form-label" for="form3Examplea7">{{ __('Email ') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="password" id="form3Examplea5" name="password" required autocomplete="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror " />
                                <label class="form-label" for="form3Examplea5">{{ __('Mot de passe ') }}</label>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                    </div>

                    <div class="form-check d-flex justify-content-start mb-4 pb-3">
                        <input class="form-check-input me-3  @error('policy') is-invalid @enderror " type="checkbox"
                            value="" id="form2Example3c" />
                        <label class="form-check-label " for="form2Example3">
                            Je suis d'accord avec <a href="#!"><u>la politique de
                                    confidentialité</u></a> du site.
                        </label>
                        @error('policy')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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

                    <button type="submit" style="background-color:#193487;" class="btn btn-primary btn-lg" data-mdb-ripple-color="dark">Register</button>
                    <hr class="my-8" />
                    <p class="mt-4">
                        <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                            href="{{ route('login') }}">
                            Déja un compte? Se connecter
                        </a>
                    </p>
                </form>
                <a class="text-sm text-center font-medium  dark:text-purple-400 hover:underline"
                    href="/home">
                <p class="mt-4" style="color:orange;">
                       Retourner à la page d'acceuil
                </p>
                </a>

            </div>
        </div>
    </div>

@endsection
