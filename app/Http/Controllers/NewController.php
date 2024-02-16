<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Enums\ActivityTypeEnum;
use Illuminate\Http\Request;

class NewController extends ActivityController
{
    protected $folder = 'new';
    protected $type = ActivityTypeEnum::NEWS;


    public function newIndex()
    {
        $news = Activity::ofLang('fr')->ofType([$this->type->value == ActivityTypeEnum::NEWS])
            ->latest()
            ->take(4)
            ->get();

        $elts = Activity::ofLang('fr')
            ->ofType([$this->type->value == ActivityTypeEnum::NEWS])
            ->inRandomOrder()
            ->take(8)
            ->get();

        return view('Front.pages.actu', compact('news','elts'));
    }
}
