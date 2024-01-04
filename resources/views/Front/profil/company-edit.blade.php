@extends('Front.profil.layout')

@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="mt-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('Modifier les informations de l\'entreprise') }}
        </h2>
        <div class="card-body">
        <form action="{{ route('update-company', ['company' => $company->id, 'typeDeDemande' => $typeDeDemande]) }}"
            method="POST">
            @csrf
            @method('PUT')


            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong>Nom de l'entreprise :</strong></label>
                        <input type="text" name="name" value="{{ $company->name }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong>Forme Juridique :</strong></label>
                        <input type="text" name="legal_form" value="{{ $company->legal_form }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong>RCCM :</strong></label>
                        <input type="text" name="RCCM" value="{{ $company->RCCM  }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong>Compte contribuable :</strong></label>
                        <input type="text" name="taxpayer_account" value="{{  $company->taxpayer_account }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong>Siège social :</strong></label>
                        <input type="text" name="siege" value="{{ $company->siege}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong>Capital social :</strong></label>
                        <input type="text" name="capita" value="{{ $company->capital }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong>Téléphone:</strong></label>
                        <input type="text" name="phone" value="{{ $company->phone }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong>Fax :</strong></label>
                        <input type="text" name="cellulaire" value="{{ $company->cellulaire }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong>Email :</strong></label>
                        <input type="text" name="email" value="{{ $company->email}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong>Site Internet  :</strong></label>
                        <input type="text" name="website_link" value="{{  $company->website_link }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong> Fonction :</strong></label>
                        <input type="text" name="fonction" value=" {{ $company->fonction }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field1" class="form-label "> <strong>Représentant
                            légal:</strong></label>
                        <input type="text" name="legal_agent" value="  {{ $company->legal_agent }}" class="form-control">
                    </div>
                </div>
            </div>


            <button type="submit"  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-blue-500 focus:outline-none focus:shadow-outline-purple">Enregistrer les modifications</button>
        </form>
    </div>
    </div>
@endsection
