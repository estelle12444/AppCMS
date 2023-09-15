<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return view('Front.admin.job.index', compact('jobs'));
    }

    public function create()
    {
        return view('Front.admin.job.create');
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

        $job = new Job;
        $job->title = $validatedData['title'];
        $job->content = $validatedData['content'];
        $job->resume = $validatedData['resume'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('jobs', 'public');
            $job->image = $imagePath;
        }
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('jobs', 'public');
            $job->file = $imagePath;
        }
        $job->limit_date = $validatedData['limit_date'];

        $job->save();

        return redirect()->route('Front.admin.job.index')->with('success', "L'offre a été ajouté avec succès.");
    }
    public function edit(Job $job)
    {
        return view('Front.admin.job.edit', compact('job'));
    }
    public function update(Request $request, Job $job)
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
            $imagePath = $request->file('image')->store('jobs', 'public');
            $job->image = $imagePath;
        }
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('jobs', 'public');
            $job->file = $imagePath;
        }
        $job->limit_date = $validatedData['limit_date'];

        $job->save();

        return redirect()->route('Front.admin.job.index')->with('success', "L'offre d'emploi  a été ajouté avec succès.");
    }
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('Front.admin.job.index')->with('success', "L'offre d'emploi  a été supprimé avec succès.");
    }
}
