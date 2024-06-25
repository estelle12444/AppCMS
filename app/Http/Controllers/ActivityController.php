<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\ActivityImage;
use App\Models\Enums\ActivityTypeEnum;
use Illuminate\Support\Facades\Storage;

abstract class ActivityController extends Controller
{
    protected $folder;
    protected $type;


    public function index()
    {
        $activities = Activity::ofLang('fr')->ofType([$this->type->value])->orderBy('created_at', 'desc')->get();
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
            'lang.*.limit_date'=>'nullable',
            'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        $french = $this->save(data: $validatedData['lang'][0]);
        $this->save(data: $validatedData['lang'][1], french: $french);

        if ($request->hasFile('additional_images')) {
            $this->saveAdditionalImages($request->file('additional_images'), $french);
        }

        return redirect()->route("Front.admin.$this->folder.index")->with('success', $this->type->getTypeText()." ajouté avec succès.");
    }


    protected function saveAdditionalImages(array $images, $activity)
    {
        foreach ($images as $image) {
            $path = $image->store('activities','public');
            ActivityImage::create([
                'activity_id' => $activity->id,
                'path' => $path,
            ]);
        }
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
            'lang.*.limit_date'=>'nullable',
            'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        $french = $this->save(data: $validatedData['lang'][0], activity: $activity);
        $this->save(data: $validatedData['lang'][1], activity: $activity->child, french: $french);

        if ($request->hasFile('additional_images')) {
            $this->saveAdditionalImages($request->file('additional_images'), $french);
        }

        return redirect()->route("Front.admin.$this->folder.index")->with('success', $this->type->getTypeText()." ajouté avec succès.");
    }

    public function destroy(Activity $activity)
    {
        $this->deleteActivityImages($activity);
        $activity->delete();
        return redirect()->route("Front.admin.$this->folder.index")->with('success', $this->type->getTypeText()." supprimé avec succès.");
    }

    private function deleteActivityImages(Activity $activity)
    {
        // Retrieve all associated images for the activity
        $activityImages = ActivityImage::where('activity_id', $activity->id)->get();

        // Delete each image file and its database record
        foreach ($activityImages as $image) {
            if (Storage::exists($image->path)) {
                Storage::delete($image->path);
            }
            $image->delete();
        }
    }

    private function save($data, ?Activity $activity=null, $french=null){
        if(is_null($activity)){
            $activity = new Activity();
        }
        $activity->type = $this->type->value;
        $activity->title = $data['title'];
        $activity->content = $data['content'];
        $activity->resume = $data['resume']?? null;
        $activity->translate_code = $data['translate_code'];
        $activity->limit_date = $data['limit_date'];

        if (array_key_exists('image', $data) && !is_null($data['image'])) {
            if(is_null($activity)){
                Storage::disk('public')->delete($activity->image);
            }

            $imagePath = $data['image']->store($this->folder, 'public');
            $activity->image = $imagePath;
        }

        if (array_key_exists('file', $data) && !is_null($data['file'])) {
            if(is_null($activity)){
                Storage::disk('public')->delete($activity->file);
            }

            $filePath = $data['file']->store($this->folder, 'public');
            $activity->file = $filePath;
        }

        if(!is_null($french)){
            $activity->parent_id = $french->id;
        }

        $activity->save();
        return $activity;
    }
}
