<?php

namespace App\Http\Controllers;

use App\Mail\CompanyInfoAccepted;
use Illuminate\Support\Facades\Mail;
use App\Mail\CompanyRegistrationNotification;
use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use App\Notifications\CompanyRegistrationNotification as NotificationsCompanyRegistrationNotification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class CompanyController extends Controller
{
    public function step1()
    {
        return view('auth.register');
    }

    public function storeStep1(Request $request)
    {
        // Validez les champs non-nullable
        $defaultRole = Role::where('nom', 'user')->first();

        $validator = Validator::make($request->all(), [

            'name' => 'required|string',
            'legal_form' => 'required|string',
            'RCCM' => 'required|string',
            'siege' => 'required|string',
            'phone' => 'required|string',
            'activity'=>'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8',

        ]);

        if ($validator->fails()) {
            return redirect('/auth/register')
                ->withErrors($validator)
                ->withInput();
        }
        $validatedData = $validator->validated();
        unset($validatedData['password']);

        $company = new Company($validatedData);
        $company->save();



        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'company_id' =>$company->id
        ]);
        $user->password = Hash::make($request->password);
        $user->status = false;
        $user->role_id = $defaultRole->id;
        $user->save();


        session(['company_id_from_step1' => $company->id]);
        session(['company_email' => $request->input('email')]);


        return redirect('/auth/register-other')->with('success', 'Etape 1 terminé avec succès ');
    }

    public function step2()
    {
        return view('auth.register-other');
    }

    public function storeStep2(Request $request)
    {
        // Validez les champs optionnels
        $validator = Validator::make($request->all(), [
            'taxpayer_account' => 'nullable|string',
            'capital' => 'nullable|string',
            'cellulaire' => 'nullable|string',
            'website_link' => 'nullable|string',
            'legal_agent' => 'nullable|string',
            'fonction' => 'nullable|string',

            'location_type' => 'nullable|in:new_society,old_society',
        ]);

        if ($validator->fails()) {
            return redirect('/auth/register-other')
                ->withErrors($validator)
                ->withInput();
        }


        // Récupérez l'ID de l'entreprise créée à l'étape 1
        $companyIdFromStep1 = session('company_id_from_step1');


        if ($companyIdFromStep1) {
            $company = Company::find($companyIdFromStep1);


            $company->fill($validator->validated());
            $company->save();
            $companyEmail = session('company_email');
        //     $requestData = [
        //         'company_name' => 'Nom de l\'entreprise',
        //         // ... d'autres clés et valeurs
        //     ];

        // $adminEmail = 'support@documentivoire.ci'; // Adresse e-mail de l'administrateur

        // Mail::to($adminEmail)->send(new CompanyRegistrationNotification($request->all()));
            return redirect('/auth/confirmation-page');
        } else {
            return redirect('/auth/register-other')->with('error', 'Étape 1 doit être complétée en premier.');
        }
    }

    public function edit(int $companies)
    {
        $companies = Company::whereId($companies)->first();

        $users = User::where('company_id', $companies->id)->first();


        // Calculez le pourcentage de complétion en fonction des champs renseignés
        $totalFields = 15; // Supposons qu'il y ait 10 champs au total
        $fieldsRenseignes = $companies->countFieldsRenseignes(); // Créez cette méthode dans votre modèle

        // Calculez le pourcentage de complétion
        $completionPercentage = ($fieldsRenseignes / $totalFields) * 100;


        // Retournez la vue avec les données
        return view('Front.admin.company.info', compact('companies', 'completionPercentage','users'));
    }

    public function validerCompagnie($id)
    {
        // Récupérez la compagnie par son ID
        $compagnie = Company::find($id);

        if (!$compagnie) {
            // Gérer le cas où la compagnie n'est pas trouvée
            return redirect()->back()->with('error', 'Compagnie non trouvée.');
        }

        $utilisateur = User::where('company_id', $compagnie->id)->first();

        if (!$utilisateur) {
            // Gérer le cas où l'utilisateur n'est pas trouvé
            return redirect()->back()->with('error', 'Utilisateur non trouvé pour cette compagnie.');
        }

        // Mettez à jour le statut de la compagnie à true (validée)
        $utilisateur->status = true;
        $utilisateur->save();

        $companyEmail = session('company_email');
        if ($companyEmail) {
            // Adresse e-mail de la compagnie
           $dashboardLink = 'https://vitib.ci/profil'; // Lien vers le tableau de bord
           Mail::to($companyEmail)->send(new CompanyInfoAccepted($dashboardLink, $companyEmail));
           }

        // Redirigez l'administrateur vers le tableau de bord de la compagnie
        return redirect('/company')->with('success', 'La compagnie a été validée avec succès.');
    }
}
