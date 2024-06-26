<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
use App\Models\BusinessSector;
use App\Models\Career;
use App\Models\Company;
use App\Models\Event;
use App\Models\Job;
use App\Models\Partner;
use App\Models\Quotation;
use App\Models\Role;
use App\Models\Sector;
use App\Models\Tender;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function getUsername()
    {
        if (!Auth::check()) {
            return view('auth.login');
        } else {
            $user = Auth::user();
            $username = $user->name;

            return $username;
        }
    }
    public function getId()
    {
        return auth()->user()->id;
    }

    public function profile(){

        return view('Front.admin.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Récupérer l'utilisateur connecté
        $user = Auth::user();


        // Mettre à jour les informations de l'utilisateur
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Sauvegarder les modifications
        $user->save();

        // Rediriger avec un message de succès
        return redirect()->route('admin.profile')->with('success', 'Profil mis à jour avec succès');
    }


    public function settings()
    {
        $adminRole = Role::where('nom', 'admin')->first();

        // Récupérer tous les utilisateurs ayant ce rôle
        $admins = User::where('role_id', $adminRole->id)->get();

        return view('Front.admin.settings', compact('admins'));
    }


    public function storeAdmin(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Récupération du rôle admin
        $adminRole = Role::where('nom', 'admin')->first();
        if (!$adminRole) {
            return redirect()->route('admin.settings')->with('error', 'Rôle admin non trouvé.');
        }

        // Création de l'utilisateur admin
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->status = false;
        $user->role_id = $request->input('role_id');
        $user->company_id = 1; // Assurez-vous que 1 est une ID valide dans votre table companies
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();

        return redirect()->route('admin.settings')->with('success', 'Nouvel administrateur ajouté avec succès');
    }


    public function createAdmin(){
        return view('Front.admin.create-user');
    }

    public function updateUser( User $user){

        $user->status = !$user->status;
        $user->save();

        // Rediriger avec un message de succès ou toute autre logique nécessaire
        return redirect()->back()->with('success', 'Statut de l\'administrateur mis à jour avec succès.');
    }


    public function company()
    {
        $companies = Company::all();
        $users = User::all();

        return view('Front.admin.company.index', compact('companies', 'users'));
    }

    public function destroyUser( User $user){

        $user->delete();

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Administrateur supprimé avec succès.');
    }


    public function logout()
    {
        Auth::logout();
        // Rediriger l'utilisateur vers une autre page après la déconnexion
        return redirect()->route('login');
    }

    public function create()
    {
        $sectors = Sector::all();
        return view('Front.admin.partner.create', compact('sectors'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sectors' => 'required|array',
        ]);

        $partner = new Partner;
        $partner->title = $validatedData['title'];
        $partner->content = $validatedData['content'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('partners', 'public');
            $partner->image = $imagePath;
        }

        $partner->save();

        return redirect()->route('Front.admin.partner.index')->with('success', 'Le partenaire a été ajouté avec succès.');
    }


    public function index()
    {
        $partners = Partner::all();
        $sectors = Sector::all();
        return view('Front.admin.partner.index', compact('partners', 'sectors'));
    }


    public function edit(Partner $partner)
    {
        $sectors = Sector::all();
        return view('Front.admin.partner.edit', compact('partner', 'sectors'));
    }


    public function update(Request $request, Partner $partner)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sectors' => 'required|array',
        ]);

        $partner->title = $validatedData['title'];
        $partner->content = $validatedData['content'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('partners', 'public');
            $partner->image = $imagePath;
        }
        $partner->save();

        // $partner->sectors()->sync($validatedData['sectors']);
        return redirect()->route('Front.admin.partner.index')->with('success', 'Le partenaire a été modifié avec succès.');
    }


    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('Front.admin.partner.index')->with('success', 'Le partenaire a été supprimé avec succès.');
    }
}
