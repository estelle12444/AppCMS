@extends('auth.layout')
@section('content')
<style>
 .toggle-password-icon {
    cursor: pointer;
}

/* Style pour l'icône elle-même */
.toggle-password-icon i {
    font-size: 16px;
    color: #666;
}

.toggle-password-icon i:hover {
    color: #333;
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
                    <strong> CONNEXION</strong>
                </h3>
                <form method="POST" action="{{ route('company.auth.login') }}" style="padding-left:10%">
                    @csrf

                    <div class="" >
                        <div class="col-md-10 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="email" id="form3Examplea7" name="email"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    autofocus
                                    class="form-control form-control-lg @error('email') is-invalid @enderror " />
                                <label class="form-label"
                                    for="form3Examplea7">{{ __('Mail entreprise ') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-10 mb-4 pb-2">
                            <div class="form-outline position-relative">
                                <div class="input-group-text">
                                    <input type="password" id="form3Examplea5" name="password" required autocomplete="password"
                                           class="form-control form-control-lg @error('password') is-invalid @enderror toggle-password-input" />
                                    <label class="form-label" for="form3Examplea5">{{ __('Mot de passe') }}*</label>
                                    <div class="input-group-append">
                                        <span class=" toggle-password-icon" id="togglePassword" onclick="togglePasswordVisibility('form3Examplea5')">
                                            <i class="fas fa-eye-slash" id="toggleIcon"></i>
                                        </span>
                                    </div>
                                </div>
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

    <script>
        function togglePasswordVisibility(inputId) {
            var passwordInput = document.getElementById(inputId);
            var toggleIcon = document.getElementById('toggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        }
    </script>

@endsection
