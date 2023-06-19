<?php

namespace App\Http\Controllers;

use App\Models\Disposition;
use App\Models\DispositionTypeDemande;
use App\Models\Obligation;
use App\Models\ObligationTypeDemande;
use App\Models\TypeDeDemande;
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

        $obligations = ObligationTypeDemande::where('type_de_demande_id', $typeDeDemande->id)->get();
        $dispositions = DispositionTypeDemande::where('type_de_demande_id', $typeDeDemande->id)->get();

        dd($dispositions, $obligations);
        return view('Front.demande.form', compact('typeDeDemande','obligations'));
    }
}
