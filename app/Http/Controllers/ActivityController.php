<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Enums\ActivityTypeEnum;

abstract class ActivityController extends Controller
{
    protected $folder;
    protected $type;

    public function index()
    {
        $activities = Activity::ofType([$this->type->value])->get();
        return view("Front.admin.$this->folder.index", compact('activities'));
    }

    public function create()
    {
        return view("Front.admin.$this->folder.create");
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

        $activity = new Activity();
        $activity->type = $this->type->value;
        $activity->title = $validatedData['title'];
        $activity->content = $validatedData['content'];
        $activity->resume = $validatedData['resume'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store($this->folder, 'public');
            $activity->image = $imagePath;
        }
        $activity->limit_date = $validatedData['limit_date'];
        $activity->save();
        return redirect()->route("Front.admin.$this->folder.index")->with('success', $this->type->getTypeText()." ajouté avec succès.");
    }

    public function edit(Activity $activity)
    {
        return view("Front.admin.$this->folder.edit", compact('activity'));
    }

    public function update(Request $request, Activity $activity)
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
            $imagePath = $request->file('image')->store($this->folder, 'public');
            $activity->image = $imagePath;
        }
        $activity->type = $this->type->value;
        $activity->limit_date = $validatedData['limit_date'];
        $activity->save();
        return redirect()->route("Front.admin.$this->folder.index")->with('success', $this->type->getTypeText()." ajouté avec succès.");
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route("Front.admin.$this->folder.index")->with('success', $this->type->getTypeText()." supprimé avec succès.");
    }
}
