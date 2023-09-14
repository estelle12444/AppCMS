<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function index()
    {
        $quotations = Quotation::all();

        return view('Front.admin.quotation.index', compact('quotations'));
    }

    public function create()
    {
        return view('Front.admin.quotation.create');
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

        $quotation = new Quotation;
        $quotation->title = $validatedData['title'];
        $quotation->content = $validatedData['content'];
        $quotation->resume = $validatedData['resume'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('quotations', 'public');
            $quotation->image = $imagePath;
        }
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('quotations', 'public');
            $quotation->file = $imagePath;
        }
        $quotation->limit_date = $validatedData['limit_date'];

        $quotation->save();

        return redirect()->route('Front.admin.quotation.index')->with('success', "Demande de cotationajouté avec succès.");
    }
    public function edit(Quotation $quotation)
    {
        return view('Front.admin.quotation.edit', compact('quotation'));
    }
    public function update(Request $request, Quotation $quotation)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'resume' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'nullable',
            'limit_date'=>'nullable'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('quotations', 'public');
            $quotation->image = $imagePath;
        }
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('quotations', 'public');
            $quotation->file = $imagePath;
        }
        $formattedDate = date("Y-m-d H:i:s",  strtotime($validatedData['limit_date']));
        $quotation->limit_date = $formattedDate;
        $quotation->save();

        return redirect()->route('Front.admin.quotation.index')->with('success', "Demande de cotation ajouté avec succès.");
    }
    public function destroy(Quotation $quotation)
    {
        $quotation->delete();

        return redirect()->route('Front.admin.quotation.index')->with('success', "Demande de cotation supprimé avec succès.");
    }
}
