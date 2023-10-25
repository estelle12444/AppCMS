<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\TypeDeDemande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
        $typeDemandes = TypeDeDemande::all();
        return view('Front.profil.home', compact('typeDemandes'));
    }

    public function demande()
    {
        $typeDemandes = TypeDeDemande::all();
        return view('Front.profil.demande', compact('typeDemandes'));

    }

    public function document()
    {
        $typeDemandes = TypeDeDemande::all();
        return view('Front.profil.document', compact('typeDemandes'));

    }


    public function etatdemande()
    {
        return view('Front.profil.etat-demande');
    }

    public function editprofil()
    {
        return view('Front.profil.edit-profil');
    }

    public function logout()
    {
        Auth::logout();

        // Rediriger l'utilisateur vers une autre page après la déconnexion
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
}
