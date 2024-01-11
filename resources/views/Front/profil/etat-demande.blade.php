@extends('Front.profil.layout')
@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('profil.layouts.requests.follow') }}
        </h2>
        <!-- CTA -->
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class=" corps">
                @if ($demandesCount > 0)
                    <div class="steps-container">
                        @foreach ($demandes as $demande)
                        {{ $demande->checkIfDocIsCompleted()}}
                            <div class="step">
                                <span class="step-number">1</span>
                                <span class="step-label">{{__('profil.demande_state.step_1"')}}
                                    {{ $demande->typeDemande->name }}</span><br><br>
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    {{__('profil.demande_state.sent"')}}
                                </span>
                            </div>

                            <!-- Étape 2 -->
                            <div class="step">
                                <span class="step-number">2</span>
                                <span class="step-label">{{__('profil.demande_state.step_2"')}}</span><br><br>

                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                        {{__('profil.demande_state.complete"')}}
                                    </span>


{{--
                                    <p>Documents manquants :</p>
                                    <ul>
                                        {{-- @foreach ($typeDocument->documentsManquants($demande) as $documentManquant)
                                            <li>{{ $documentManquant->name }}</li>
                                        @endforeach
                                    </ul> --}}

                            </div>

                            <!-- Étape 3 -->
                            <div class="step">
                                <span class="step-number">3</span>
                                <span class="step-label">{{__('profil.demande_state.step_3"')}}</span>
                                <br><br>
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                    {{__('profil.demande_state.in_progress"')}}
                                </span></p>
                            </div>

                            <!-- Étape 4 -->
                            <div class="step">
                                <span class="step-number">4</span>
                                <span class="step-label">{{__('profil.demande_state.step_4"')}}</span>
                                <br><br>
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                    {{__('profil.demande_state.in_progress"')}}
                                </span></p>
                            </div>
                            <div class="step">
                                <span class="step-number">5</span>
                                <span class="step-label">{{__('profil.demande_state.step_5"')}}
                                </span>
                                <br><br><span
                                    class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                    {{__('profil.demande_state.in_progress"')}}
                                </span></p>
                            </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>{{__('profil.demande_state.empty"')}}</p>
            @endif
        </div>
    </div>
    </div>
@endsection
<style>
    .corps {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 40vh;
        margin: 0;
    }

    .steps-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        display: flex;
    }

    .step {
        flex: 1;
        text-align: center;
        padding: 20px;
        position: relative;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .step:hover {
        background-color: #f0f8ff;
        /* Couleur de survol */
    }

    .step:not(:last-child)::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: 2px;
        background-color: #ddd;
        transition: background-color 0.3s ease;
    }

    .step-number {
        display: block;
        background-color: #3490dc;
        color: #fff;
        width: 30px;
        height: 30px;
        line-height: 30px;
        font-size: 14px;
        border-radius: 50%;
        margin: 0 auto 10px;
        transition: background-color 0.3s ease;
    }

    .step-label {
        font-size: 14px;
        color: #666;
    }
</style>
