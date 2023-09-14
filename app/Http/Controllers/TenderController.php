<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;

class TenderController extends Controller
{
    public function index()
    {
        $tenders = Tender::all();

        return view('Front.admin.tender.index', compact('tenders'));
    }

    public function create()
    {
        return view('Front.admin.tender.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'resume' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'nullable',
            'limit_date'=>'nullable'
        ]);

        $tender = new Tender;
        $tender->title = $validatedData['title'];
        $tender->content = $validatedData['content'];
        $tender->resume = $validatedData['resume'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('tenders', 'public');
            $tender->image = $imagePath;
        }
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('tenders', 'public');
            $tender->file = $imagePath;
        }
        $tender->limit_date = $validatedData['limit_date'];

        $tender->save();

        return redirect()->route('Front.admin.tender.index')->with('success', "L'offre a été ajouté avec succès.");
    }
    public function edit(Tender $tender)
    {
        return view('Front.admin.tender.edit', compact('tender'));
    }
    public function update(Request $request, Tender $tender)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'resume' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'nullable',
            'limit_date'=>'nullable'
        ]);

        $tender->title = $validatedData['title'];
        $tender->content = $validatedData['content'];
        $tender->resume = $validatedData['resume'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('tenders', 'public');
            $tender->image = $imagePath;
        }
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('tenders', 'public');
            $tender->file = $imagePath;
        }
        $tender->limit_date = $validatedData['limit_date'];
        $tender->save();

        return redirect()->route('Front.admin.tender.index')->with('success', "L'offre a été ajouté avec succès.");
    }
    public function destroy(Tender $tender)
    {
        $tender->delete();

        return redirect()->route('Front.admin.tender.index')->with('success', "L'offre a été supprimé avec succès.");
    }
}
