<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::all();

        return view('Front.admin.career.index', compact('careers'));
    }

    public function create()
    {
        return view('Front.admin.career.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'resume' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'nullable',
            'limit_date' => 'nullable'
        ]);

        $career = new Career;
        $career->title = $validatedData['title'];
        $career->content = $validatedData['content'];
        $career->resume = $validatedData['resume'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('careers', 'public');
            $career->image = $imagePath;
        }
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('careers', 'public');
            $career->file = $imagePath;
        }
        $career->limit_date = $validatedData['limit_date'];

        $career->save();

        return redirect()->route('Front.admin.career.index')->with('success', "Appel à candidature ajouté avec succès.");
    }
    public function edit(Career $career)
    {
        return view('Front.admin.career.edit', compact('career'));
    }
    public function update(Request $request, Career $career)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'resume' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'nullable',
            'limit_date' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('careers', 'public');
            $career->image = $imagePath;
        }
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('careers', 'public');
            $career->file = $imagePath;
        }


        $career->limit_date = $validatedData['limit_date'];
        $career->save();

        return redirect()->route('Front.admin.career.index')->with('success', "Appel à candidature ajouté avec succès.");
    }
    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('Front.admin.career.index')->with('success', "Appel à candidature supprimé avec succès.");
    }
}
