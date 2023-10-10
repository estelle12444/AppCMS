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


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Réinitialiser votre mot de passe') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Mail entreprise') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe Confirmer') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Réinitialiser') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
