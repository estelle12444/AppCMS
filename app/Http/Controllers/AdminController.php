<?php

namespace App\Http\Controllers;

use App\Models\BusinessSector;
use App\Models\Partner;
use App\Models\Sector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{

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

        return view('Front.admin.partner.index', compact('partners'));
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
