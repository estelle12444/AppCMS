<?php

namespace App\Http\Controllers;

use App\Models\Disposition;
use App\Models\DispositionTypeDemande;
use App\Models\EligibilityTypeDemande;
use App\Models\Obligation;
use App\Models\ObligationTypeDemande;
use App\Models\TypeDeDemande;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

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

        return view('Front.profil.form',  compact('typeDeDemande','obligations','dispositions','eligibilities'));
    }
}
