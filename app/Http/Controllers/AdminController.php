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
use App\Models\Sector;
use App\Models\Tender;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function company()
    {
        $companies = Company::all();
        $users = User::all();

        return view('Front.admin.company.index', compact('companies', 'users'));
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
