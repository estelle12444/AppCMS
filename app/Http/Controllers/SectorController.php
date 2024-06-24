<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::all();
        return view('Front.admin.sector.index', compact('sectors'));
    }

    public function create()
    {
        return view('Front.admin.sector.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        try {
            $sector = new Sector();
            $sector->nom = $validatedData['nom'];
            $sector->save();
            return redirect()->route('Front.admin.sector.index')->with('success', 'Le secteur a été ajouté avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de l\'ajout du secteur. Veuillez réessayer.'])->withInput();
        }
    }

    public function edit(Sector $sector)
    {
        return view('Front.admin.sector.edit', compact('sector'));
    }
    public function update(Request $request, Sector $sector)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
        ]);

        $sector->nom = $validatedData['nom'];
        $sector->save();

        return redirect()->route('Front.admin.sector.index')->with('success', 'Le secteur a été modifié avec succès.');
    }
    public function destroy(Sector $sector)
    {
        $sector->delete();

        return redirect()->route('Front.admin.sector.index')->with('success', 'Le secteur a été supprimé avec succès.');
    }
}
