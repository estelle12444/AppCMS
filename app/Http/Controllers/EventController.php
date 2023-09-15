<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('Front.admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('Front.admin.event.create');
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

        $event = new Event;
        $event->title = $validatedData['title'];
        $event->content = $validatedData['content'];
        $event->resume = $validatedData['resume'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $event->image = $imagePath;
        }
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('events', 'public');
            $event->file = $imagePath;
        }
        // $formattedDate = date("Y-m-d H:i:s",  strtotime($validatedData['limit_date']));
        $event->limit_date =$validatedData['limit_date'];

        $event->save();

        return redirect()->route('Front.admin.event.index')->with('success', "Demande de manifestation  ajouté avec succès.");
    }
    public function edit(Event $event)
    {
        return view('Front.admin.event.edit', compact('event'));
    }
    public function update(Request $request, Event $event)
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
            $imagePath = $request->file('image')->store('events', 'public');
            $event->image = $imagePath;
        }
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('events', 'public');
            $event->file = $imagePath;
        }
        $event->limit_date =$validatedData['limit_date'];
        $event->save();

        return redirect()->route('Front.admin.event.index')->with('success', "Demande de manifestation ajouté avec succès.");
    }
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('Front.admin.event.index')->with('success', "Demande de manifestation supprimé avec succès.");
    }
}
