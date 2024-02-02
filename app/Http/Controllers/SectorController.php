<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::query()->ofLang('fr')->latest()->get();

        return view('Front.admin.sector.index', compact('sectors'));
    }

    public function create()
    {
        return view('Front.admin.sector.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
        ]);

        $sector = new Sector();
        $sector->nom = $validatedData['nom'];
        $sector->save();

        return redirect()->route('Front.admin.sector.index')->with('success', 'Le secteur a été ajouté avec succès.');
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
