@extends('auth.layout')

@section('content')


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
        style="background-color: rgb(244, 244, 244); margin-top:75px; margin-right:20px;margin-bottom:25px">
            <div class="card">
                <div class="card-header">{{ __('Réinitialiser votre mot de passe') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Mail Entreprise') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envoyer le lien de réinitialisation du mot de passe') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <a class="text-sm text-center font-medium  dark:text-purple-400 hover:underline"
                    href="/login">
                        <p class="mt-4" style="color:orange;">
                            Retourner à la page de connexion
                        </p>
                     </a>
        </div>
    </div>
</div>
@endsection
