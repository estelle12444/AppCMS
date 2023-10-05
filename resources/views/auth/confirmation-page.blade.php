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
            style="background-color: rgb(244, 244, 244); margin-top:25px; margin-right:20px;margin-bottom:25px">

                <div class="card">
                    <div class="card-header">
                        Confirmation de l'inscription
                    </div>
                    <div class="card-body">
                        <p>Merci pour votre inscription. Votre entreprise a été enregistrée avec succès.</p>
                        <p>Un e-mail de confirmation a été envoyé à l'adresse que vous avez fournie.</p>
                        <p>Veuillez noter que l'administrateur devra vérifier vos informations et valider votre compte avant que vous puissiez accéder au tableau de bord.</p>
                        <p>Vous recevrez un e-mail de l'administrateur dès que votre compte sera validé.</p>
                        <a href="https://vitib.ci/home" class="btn btn-primary">Retourner a la page d'accueil</a>
                    </div>
                </div>
    </div>
        </div>
    </div>


@endsection
