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

    <div class="flex flex-col overflow-y-auto md:flex-row">
        {{-- <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="" width="400" style="margin-top:250px;padding-left:30px"
                src="{{ asset('../img/logo2.png') }}" alt="Office" />
            <h2 class="text-blue-400 font-bold">
                Rejoignez-nous
                dès aujourd'hui
                et transformez
                l'avenir de votre
                entreprise
            </h2>

        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <h1 class="mb-4 text-2xl font-bold text-gray-700 dark:text-gray-200">
                        {{ __('S\'inscrivez-vous') }}
                    </h1>
                    <label class="block text-sm">
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
                    {{-- <label class="block mt-4 text-sm">
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
                     </label> --}}

                    {{-- <div class="flex mt-6 text-sm">
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
                    @endif --}}

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
        </div> --}}
    </div>
@endsection
