<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\AnnonceTrait;
use App\Models\Activity;
use App\Models\Company;
use App\Models\Document;
use App\Models\Enums\ActivityTypeEnum;
use App\Models\TypeDeDemande;
use App\Models\TypeDocumentTypeDemande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ProfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    use AnnonceTrait;
    
    public function index()
    {
        $typeDemandes = TypeDeDemande::ofLang('fr')->get();
        $user = auth()->user();
        $demandesCountByType = [];
        foreach ($typeDemandes as $typeDemande) {
            $demandesCountByType[$typeDemande->translator['name']] = $user->demandes()->where('type_de_demande_id', $typeDemande->id)->count();
        }
        View::share('typeDemandes', $typeDemandes);
        View::share('demandesCountByType', $demandesCountByType);
    //Catégorie activities

        $activities = $this->getAnnonces(offset: Activity::active()->count());
        $keys = collect($activities)->map(function($item) {
            return $item['type'];
        })->unique()->toArray();

        return view('Front.profil.home', compact('typeDemandes', 'demandesCountByType','activities'));
    }



    public function demande()
    {
        $typeDemandes = TypeDeDemande::ofLang('fr')->get();
        return view('Front.profil.demande', compact('typeDemandes'));
    }


    public function userDocumentsByType()
    {
        $userId = auth()->user()->id;

        $typesDeDemande = TypeDeDemande::with([
            'demandes' => function ($query) use ($userId) {
                $query->with('documents')->where('user_id', $userId);
            },
        ])->ofLang('fr')->get();


        return view('Front.profil.document', compact('typesDeDemande'));
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function getUsername()
    {
        $user = Auth::user();
        $username = $user->name;
        return $username;
    }

    public function getEmail()
    {
        $email = Auth::user();
        $email = $email->email;
        return $email;
    }

    public function getCount()
    {
        $typeDemandes = TypeDeDemande::ofLang('fr')->get();
        $user = auth()->user();
        $demandesCountByType = [];

        $totalCount = 0;

        foreach ($typeDemandes as $typeDemande) {
            $count = $user->demandes()->where('type_de_demande_id', $typeDemande->id)->count();
            $demandesCountByType[] = [
                'type' => $typeDemande->translator['name'],
                'count' => $count,
            ];

            $totalCount += $count;
        }

        return [
            'totalCount' => $totalCount,
            'demandesCountByType' => $demandesCountByType,
        ];
    }

}
