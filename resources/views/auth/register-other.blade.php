@extends('auth.layout')
@section('content')

    <div class="row g-0">
        <div class="col-lg-4">
            <div class="p-5">
                <img aria-hidden="true" class="" width="250" style="margin-top:20px"
                    src="{{asset(__('image.logo_url'))}}" alt="Office" />
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
                    <strong>Complétez vos informations </strong>
                </h3>
                <form method="POST" action="{{ route('company.step2') }}">
                    @csrf
                    <div class="row">

                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" id="form3Examplea4" name="taxpayer_account" value="{{ old('taxpayer_account') }}"
                                     autocomplete="taxpayer_account"
                                    class=" form-control form-control-lg @error('taxpayer_account') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                <label class="form-label" for="form3Examplea4">{{ __("Compte contribuable :") }}</label>
                            </div>

                            @error('taxpayer_account')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" id="form3Examplea5"
                                    class="form-control form-control-lg  @error('') is-invalid @enderror"
                                    value="{{ old('capital') }}" name="capital" autocomplete="capital" autofocus />
                                <label class="form-label" for="form3Examplea5">{{ __('Capital social :') }}</label>
                            </div>
                            @error('capital')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" id="form3Examplea4" name="cellulaire" value="{{ old('cellulaire') }}"
                                     autocomplete="cellulaire"
                                    class=" form-control form-control-lg @error('cellulaire') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                <label class="form-label" for="form3Examplea4">{{ __('Fax : ') }}</label>
                            </div>

                            @error('cellulaire')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" id="form3Examplea8" name="website_link" value="{{ old('website_link') }}"

                                    class="form-control form-control-lg  @error('website_link') is-invalid @enderror" />
                                <label class="form-label" for="form3Examplea8">
                                    {{ __("Site Internet :") }}</label>
                            </div>
                            @error('website_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" id="form3Examplea4" name="legal_agent" value="{{ old('legal_agent') }}"
                                     autocomplete="legal_agent"
                                    class=" form-control form-control-lg @error('siege') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                <label class="form-label" for="form3Examplea4">{{ __('Representant legal  ') }}</label>
                            </div>

                            @error('legal_agent')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline ">
                                <input type="text" id="form3Examplea8" name="fonction" value="{{ old('fonction') }}"

                                    class="form-control form-control-lg  @error('fonction') is-invalid @enderror" />
                                <label class="form-label" for="form3Examplea8">
                                    {{ __(' Fonction :') }}</label>
                            </div>
                            @error('fonction')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <label for="field2" class="form-label">Type d’implantation à la
                                ZBTIC</label>
                            <div class="row">

                                <div class="mb-3">
                                    <input type="checkbox" name="new_society" class="form-check-input me-3  @error('policy') is-invalid @enderror " type="checkbox"
                                    value="" id="form2Example3c" >
                                    <label class="custom-control-label" for="remember-me">Nouvelle société
                                        créée</label>
                                </div>
                                <div class="mb-3">
                                    <input type="checkbox" name="old_society" class="form-check-input me-3  @error('policy') is-invalid @enderror " type="checkbox"
                                    value="" id="form2Example3c" >
                                    <label class="custom-control-label" for="remember-me">Société en
                                        exploitation
                                        à transférer</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- <div class="form-check d-flex justify-content-start mb-4 pb-3">
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
                    </div> --}}
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

@endsection
