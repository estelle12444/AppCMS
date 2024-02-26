<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DemandeController extends Controller
{
    public function etatdemande()
    {
        $user = auth()->user();
        $demandesCount = $user->demandes->count();
        $demandes = $user->demandes;
        return view('Front.profil.etat-demande',compact('demandesCount','demandes'));
    }

    public function index()
    {
        $demandes = auth()->user()->demandes;
        return view('Front.profil.edit-profil', compact('demandes'));
    }

    public function telechargerDocument($id)
    {
        $document = Document::findOrFail($id);
        return response()->download(Storage::disk('public')->path($document->fichier), $document->nom_original);
    }
}
