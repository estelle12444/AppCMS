@extends('auth.layout')
@section('content')
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="login-brand">
            <img src="{{asset('img/logo.png')}}" alt="logo" width="100" class="shadow-light rounded-circle">
        </div>
        <div class="card card-primary">
            <div class="card-header">{{ __('Register') }}</h4>
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

                    <div class="form-group">
                        <label for="email">{{ __('Email Address') }}</label>


                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>


                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>


                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('Register') }}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    @endsection
