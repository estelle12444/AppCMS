<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ActivityCompany;
use Illuminate\Support\Facades\Storage;

class ApplicantController extends Controller
{
    public function applicantIndex(Activity $activity)
    {
        $applications = Applicant::where('activity_id',$activity->id)->get();
        return view('Front.admin.annonce.applicant-Index', compact('activity', 'applications'));
    }

    public function accepter($id)
    {
        $application = Applicant::findOrFail($id);
        $application->update(['status' => 'accepté']);

        return  redirect()->back()->with('success', 'Candidature acceptée avec succès!');
    }

    public function refuser($id)
    {
        $application = Applicant::findOrFail($id);
        $application->update(['status' => 'refusé']);
        return redirect()->back()->with('success', 'Candidature refusée avec succès!');
    }


    public function showForm(Activity $activity)
    {
        // Passer l'activité à la vue
        return view('Front.profil.submit-application', compact('activity'));
    }

    public function store(Request $request, Activity $activity)
    {
        // Valider les données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'portfolio' => 'nullable|string',
            'skills' => 'nullable|string',
            'cover_letter' => 'nullable|string',
            'attachments.*' => 'nullable|file|max:10240',
        ]);

        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Créer une nouvelle instance de Postulant
        $applicant = new Applicant();

        $applicant->activity_id = $activity->id;
        $applicant->company_id = $user->company_id;
        $applicant->name = $request->input('name');
        $applicant->email = $request->input('email');
        $applicant->portfolio = $request->input('portfolio');
        $applicant->skills = $request->input('skills');
        $applicant->cover_letter = $request->input('cover_letter');

        if ($request->hasFile('attachments')) {
            $attachments = [];
            foreach ($request->file('attachments') as $file) {
                $attachments[] = $file->getClientOriginalName();
                $file->storeAs('attachments', $file->getClientOriginalName());
            }
            $json_attachments = json_encode($attachments);
            $applicant->attachments =  $json_attachments;
        }

        $applicant->status = "en_attente";
        $applicant->save();
        return redirect('/applicants')->with('success', 'Application submitted successfully!');
    }


    public function applications()
    {
        $user = Auth::user();
        if (!$user->company) {
            return redirect('/profil')->with('danger', 'Vous devez être associé à une entreprise pour accéder aux soumissions.');
        }
        $applications = Applicant::where('company_id', $user->company->id)->get();
        // Passer les soumissions récupérées à la vue
        return view('Front.profil.applications', compact('applications'));
    }


    public function downloadAttachment($filename)
    {
        $filePath = storage_path('app/attachments/' . $filename);

        if (Storage::exists('attachments/' . $filename)) {
            return response()->file($filePath);
        } else {
            abort(404, 'File not found');
        }
    }
}
