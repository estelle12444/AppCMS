<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Enums\ActivityTypeEnum;
use Illuminate\Support\Facades\Storage;

abstract class ActivityController extends Controller
{
    protected $folder;
    protected $type;

    public function index()
    {
        $activities = Activity::ofLang('fr')->ofType([$this->type->value])->get();
        return view("Front.admin.$this->folder.index", compact('activities'));
    }

    public function create()
    {
        return view("Front.admin.$this->folder.create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lang.*.translate_code' => 'required',
            'lang.*.title' => 'required',
            'lang.*.content' => 'required',
            'lang.*.resume' => 'nullable',
            'lang.*.image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'lang.*.file' => 'nullable',
            'lang.*.limit_date'=>'nullable'
        ]);

        $french = $this->save(data: $validatedData['lang'][0]);
        $this->save(data: $validatedData['lang'][1], french: $french);

        return redirect()->route("Front.admin.$this->folder.index")->with('success', $this->type->getTypeText()." ajouté avec succès.");
    }

    public function edit(Activity $activity)
    {
        return view("Front.admin.$this->folder.edit", compact('activity'));
    }

    public function update(Request $request, Activity $activity)
    {
        $validatedData = $request->validate([
            'lang.*.translate_code' => 'required',
            'lang.*.title' => 'required',
            'lang.*.content' => 'required',
            'lang.*.resume' => 'nullable',
            'lang.*.image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'lang.*.file' => 'nullable',
            'lang.*.limit_date'=>'nullable'
        ]);

        $french = $this->save(data: $validatedData['lang'][0], activity: $activity);
        $this->save(data: $validatedData['lang'][1], activity: $activity->child, french: $french);

        return redirect()->route("Front.admin.$this->folder.index")->with('success', $this->type->getTypeText()." ajouté avec succès.");
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route("Front.admin.$this->folder.index")->with('success', $this->type->getTypeText()." supprimé avec succès.");
    }

    private function save($data, ?Activity $activity=null, $french=null){
        if(is_null($activity)){
            $activity = new Activity();
        }
        $activity->type = $this->type->value;
        $activity->title = $data['title'];
        $activity->content = $data['content'];
        $activity->resume = $data['resume'];
        $activity->translate_code = $data['translate_code'];
        $activity->limit_date = $data['limit_date'];

        if (!is_null($data['image'])) {
            if(is_null($activity)){
                Storage::disk('public')->delete($activity->image);
            }

            $imagePath = $data['image']->store($this->folder, 'public');
            $activity->image = $imagePath;
        }

        if(!is_null($french)){
            $activity->parent_id = $french->id;
        }

        $activity->save();
        return $activity;
    }
}
