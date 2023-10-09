<?php

namespace App\Http\Controllers;

use App\Models\TypeDeDemande;
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
