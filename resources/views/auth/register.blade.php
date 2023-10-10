@extends('auth.layout')
@section('content')
    <style>
        /* Style pour l'icône d'affichage/masquage du mot de passe */
        .toggle-password-icon {
            cursor: pointer;
            padding: 10px;
            background-color: #f8f9fa;
            /* Couleur de fond */
            border: 1px solid #ced4da;
            /* Bordure */
            border-radius: 0 4px 4px 0;
            /* Coins arrondis */
        }

        /* Style pour l'icône elle-même */
        .toggle-password-icon i {
            font-size: 20px;
            /* Taille de l'icône */
            color: #333;
            /* Couleur de l'icône */
        }
    </style>


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
                    <strong>Créer un compte</strong>
                </h3>
                <div class="alert alert-info">
                    Veuillez remplir tous les champs obligatoires (indiqués par *) et cocher la case de la politique de
                    confidentialité.
                </div>
                <form method="POST" action="{{ route('company.step1') }}">
                    @csrf
                    <div class="row">

                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" name="name" value="{{ old('name') }}" required
                                    autocomplete="name"
                                    class=" form-control form-control-lg @error('name') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                <label class="form-label" for="form3Examplea4">{{ __("Nom de l'entreprise") }}*</label>
                            </div>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" class="form-control form-control-lg  @error('') is-invalid @enderror"
                                    value="{{ old('legal_form') }}" name="legal_form" required autocomplete="legal_form"
                                    autofocus />
                                <label class="form-label" for="form3Examplea5">{{ __('Forme Juridique : ') }}*</label>
                            </div>
                            @error('legal_form')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" name="RCCM" value="{{ old('RCCM') }}" required
                                    autocomplete="RCCM"
                                    class=" form-control form-control-lg @error('RCCM') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                <label class="form-label" for="form3Examplea4">{{ __('Raison Sociale') }}*</label>
                            </div>

                            @error('RCCM')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" name="activity" value="{{ old('activity') }}" required
                                    class="form-control form-control-lg  @error('activity') is-invalid @enderror" />
                                <label class="form-label" for="form3Examplea8">
                                    {{ __("Activités à développer
                                                                        en zone franche") }}*</label>
                            </div>
                            @error('activity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" name="siege" value="{{ old('siege') }}" required
                                    autocomplete="siege"
                                    class=" form-control form-control-lg @error('siege') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                <label class="form-label" for="form3Examplea4">{{ __('Siège Social  ') }}*</label>
                            </div>

                            @error('siege')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" name="phone" value="{{ old('phone') }}" required
                                    class="form-control form-control-lg  @error('phone') is-invalid @enderror" />
                                <label class="form-label" for="form3Examplea8">
                                    {{ __('Téléphone ') }}*</label>
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
                                <input type="email" name="email" value="{{ old('email') }}" required
                                    class="form-control form-control-lg @error('email') is-invalid @enderror " />
                                <label class="form-label" for="form3Examplea7">{{ __('Mail entreprise ') }}*</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline position-relative">
                                <input type="password" id="form3Examplea5" name="password" required autocomplete="password"
                                       class="form-control form-control-lg @error('password') is-invalid @enderror" />
                                <label class="form-label" for="form3Examplea5">{{ __('Mot de passe') }}*</label>
                                <span class="input-group-append toggle-password-icon d-none" id="togglePassword">
                                    <i class="bi bi-eye-slash" id="toggleIcon"></i>
                                </span>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-check d-flex justify-content-start mb-4 pb-3">
                        <input class="form-check-input me-3 @error('policy') is-invalid @enderror" type="checkbox"
                            value="" id="form2Example3c" name="policy" required />
                        <label class="form-check-label" for="form2Example3">
                            Je suis d'accord avec <a href="#!"><u>la politique de confidentialité</u></a> du site.*
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

                    <button type="submit" style="background-color:#193487;" class="btn btn-primary btn-lg"
                        data-mdb-ripple-color="dark">Enregistrer</button>
                    <hr class="my-8" />
                    <p class="mt-4">
                        <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                            href="{{ route('login') }}">
                            Déja un compte? Se connecter
                        </a>
                    </p>
                </form>
                <a class="text-sm text-center font-medium  dark:text-purple-400 hover:underline" href="/home">
                    <p class="mt-4" style="color:orange;">
                        Retourner à la page d'acceuil
                    </p>
                </a>

            </div>
        </div>
    </div>


    <script>
        var passwordInput = document.getElementById('form3Examplea5');
        var toggleIcon = document.getElementById('toggleIcon');
        var togglePassword = document.getElementById('togglePassword');



        togglePassword.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            }
        });
    </script>

@endsection
