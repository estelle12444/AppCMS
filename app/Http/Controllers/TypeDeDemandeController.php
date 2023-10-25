<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Disposition;
use App\Models\DispositionTypeDemande;
use App\Models\Document;
use App\Models\DocumentTypeDemande;
use App\Models\EligibilityTypeDemande;
use App\Models\Obligation;
use App\Models\ObligationTypeDemande;
use App\Models\TypeDeDemande;
use App\Models\TypeDeDocument;
use App\Models\TypeDocumentTypeDemande;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TypeDeDemandeController extends Controller
{
    public function index()
    {
        $typeDemandes = TypeDeDemande::all();

        return view('Front.demande.index', compact('typeDemandes'));
    }

    public function form(Request $request, TypeDeDemande $typeDeDemande)
    {

        $obligations = ObligationTypeDemande::with('obligation')->where('type_de_demande_id', $typeDeDemande->id)
            ->get();
        $dispositions = DispositionTypeDemande::with('disposition')->where('type_de_demande_id', $typeDeDemande->id)
            ->get();

        $eligibilities = EligibilityTypeDemande::with('eligibility')->where('type_de_demande_id', $typeDeDemande->id)
            ->get();
        $documentsType = TypeDocumentTypeDemande::with('typeDocuments')->where('type_de_demande_id', $typeDeDemande->id)
            ->get();
        if (Auth::check()) {

            $user = Auth::user();

            $company = $user->company;

            if ($company) {
                return view('Front.profil.form',  compact('company', 'typeDeDemande', 'obligations', 'dispositions', 'eligibilities', 'documentsType'));
            }
        }
        session()->flash('error', 'Vous devez être connecté et associé à une entreprise pour accéder à cette page.');

        return redirect()->route('login');
    }



    public function store(Request $request,TypeDeDemande $typeDeDemande)
    {
        $request->validate([
            "documents"    => "required|array",
            "documents.*"  => "required|mimes:pdf,doc,docx,txt"
        ]);


        dd($request->all());

        // // Valider les données du formulaire
        // $request->validate([

        //     'field1' => 'required',
        //     'field2' => 'required',

        // ]);

        // // Enregistrez les données dans votre modèle Company (assurez-vous d'importer le modèle Company)
        // $company = new Company();
        // $company->name = $request->input('field1');
        // $company->legal_form = $request->input('field2');
        // // Ajoutez d'autres attributs et valeurs pour les autres champs

        // // Enregistrez le modèle Company dans la base de données
        // $company->save();

        if (Auth::check()) {

            $user = Auth::user();
            $company = $user->company;
        }

        $documentsType = TypeDocumentTypeDemande::with('typeDocuments')->where('type_de_demande_id', $typeDeDemande->id)
        ->get();



        $uploadedFiles = $request->hasFile('documents');

        if ( $uploadedFiles !== null) {

                foreach ($documentsType as $key => $documentType) {
                    $document = $uploadedFiles[$key];

                    // Validez le fichier

                    $documentPath = $document->store('documents');


                    Document::create([
                        'fichier' => $documentPath,
                        'type_de_document_id' => $documentType,
                        'company_id' => $company->id,
                    ]);
                }
            } else {
            return redirect()->flash('error');
            }


        return view('Front.profil.etat-demande');
    }
}
