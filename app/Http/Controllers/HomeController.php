<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Enums\ActivityTypeEnum;
use Illuminate\Http\Request;

class HomeController extends ActivityController
{
    protected $folder = 'advantage';
    protected $type = ActivityTypeEnum::ADVANTAGES;

    public function Advantageindex(){

        $avantages = Activity::ofLang('fr')->ofType([$this->type->value])->get();

        return view('index',compact('avantages'));
    }

    public function avantages(Activity $activity){

        $additionalImages = $activity->images;
        return view('Front.pages.avantagesDetail',compact('activity','additionalImages'));
    }


}
