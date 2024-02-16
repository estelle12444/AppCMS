<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Models\Company;
use App\Models\Demande;
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
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class TypeDeDemandeController extends Controller
{

    public function form(Request $request, TypeDeDemande $typeDeDemande)
    {
        $obligations = ObligationTypeDemande::whereHas('obligation', function ($query) {
            $query->ofLang('fr');
        })->where('type_de_demande_id', $typeDeDemande->id)->get();

        $dispositions = DispositionTypeDemande::whereHas('disposition', function ($query) {
            $query->ofLang('fr');
        })->where('type_de_demande_id', $typeDeDemande->id)->get();

        $eligibilities = EligibilityTypeDemande::whereHas('eligibility', function ($query) {
            $query->ofLang('fr');
        })->where('type_de_demande_id', $typeDeDemande->id)->get();

        $documentsType = TypeDocumentTypeDemande::whereHas('typeDocuments', function ($query) {
            $query->ofLang('fr');
        })->where('type_de_demande_id', $typeDeDemande->id)->get();


        if (Auth::check()) {
            $user = Auth::user();
            $company = $user->company;
            if ($company) {
                return view('Front.profil.form',  compact('company', 'typeDeDemande', 'obligations', 'dispositions', 'eligibilities', 'documentsType'));
            }
        }
        session()->flash('error', trans('account.message',));

        return redirect()->route('login');
    }


    public function editcompany(Company $company, TypeDeDemande $typeDeDemande)
    {
        return view('Front.profil.company-edit', compact('company', 'typeDeDemande'));
    }


    public function update(Request $request, Company $company, TypeDeDemande $typeDeDemande)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'string',
            'legal_form' => 'string',
            'RCCM' => 'string',
            'siege' => 'string',
            'phone' => 'string',
            'activity' => 'string',
            'email' => 'email',
            'taxpayer_account' => 'string|nullable',
            'capital' => 'string|nullable',
            'cellulaire' => 'string|nullable',
            'website_link' => 'string|nullable',
            'legal_agent' => 'string|nullable',
            'fonction' => 'string|nullable',
            'location_type' => 'in:new_society,old_society|nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->route('company-edit', ['company' => $company->id])
                ->withErrors($validator)
                ->withInput();
        }

        $company->fill($validator->validated());
        $company->save();
        $typeDeDemandeName = $typeDeDemande->name;
        return redirect()->route('Front.profil.form', ['typeDeDemande' => $typeDeDemandeName, 'company' => $company->id])
            ->with('success', 'Informations de l\'entreprise mises à jour avec succès');
    }

    public function store(Request $request, TypeDeDemande $typeDeDemande)
    {
        $request->validate([
            'documents' => 'required|array',
            'documents.*' => 'required|mimes:pdf,doc,docx,txt',
        ]);

        $documentsType = TypeDocumentTypeDemande::with('typeDocuments')->where('type_de_demande_id', $typeDeDemande->id)->get();

        $title = $typeDeDemande->name;
        $code = 'AB' . Str::random(6);
        $reference = Str::random(11);

        $demande = new Demande();
        $demande->reference = $reference;
        $demande->title = $title;
        $demande->version = 1.0;
        $demande->code = $code;
        $demande->type_de_demande_id = $typeDeDemande->id;
        $demande->user_id = Auth::user()->id;
        $demande->save();

        foreach ($request->file('documents') as $key => $document) {

            if ($document) {

                if (!$document->isValid()) {
                    return redirect()->back()->with('error', 'Le fichier n°' . ($key + 1) . ' n\'est pas valide. Assurez-vous qu\'il sagit d\'un fichier PDF, DOC ou DOCX.');
                }

                $nomFichierOriginal = $document->getClientOriginalName();

                $nomFichierUnique = pathinfo($nomFichierOriginal, PATHINFO_FILENAME) . '_' . Str::random(10) . '.' . $document->getClientOriginalExtension();
                $cheminDuFichier = $document->storeAs('documents',  $nomFichierUnique, 'public');

                Document::create([
                    'fichier' =>  $cheminDuFichier,
                    'nom_original' =>   $nomFichierOriginal,
                    'type_de_document_id' => $documentsType[$key]->id,
                    'company_id' => Auth::user()->company_id,
                    'demande_id' => $demande->id
                ]);
            }
        }

        return Redirect()->route('Front.profil.etat-demande');
    }


    public function retrieveDocument(string $filepath)
    {
        return Response::make(
            Storage::disk('public')->get('documents/' . $filepath),
            200,
            ['content-type' => Storage::disk('public')->mimeType($filepath)]
        );
    }

    public function editdocument(Document $document)
    {
        return view('Front.profil.edit-document', compact('document'));
    }


    public function updatedocument(Request $request, Document $document)
    {
        return redirect()->route('Front.profil.document')->with('success', 'Les documents ont été mis à jour avec succès');
    }


    public function destroydocument(Document $document, TypeDeDemande $typeDeDemande)
    {
        $document = Document::find($document->id);
        if ($document) {
            // Supprimer le document
            $document->delete();

            // Rediriger ou renvoyer une réponse appropriée
            return redirect()->route('Front.profil.document')->with('success', 'Document supprimé avec succès');
        } else {
            // Document non trouvé, renvoyer une réponse d'erreur
            return redirect()->route('Front.profil.document')->with('error', 'Le document n\'existe pas');
        }
    }
}
