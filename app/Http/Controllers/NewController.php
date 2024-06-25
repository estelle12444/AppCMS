<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Enums\ActivityTypeEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewController extends ActivityController
{
    protected $folder = 'new';
    protected $type = ActivityTypeEnum::NEWS;


    public function newIndex()
    {
        $last_second_news = Activity::ofLang('fr')
            ->ofType([$this->type->value])
            ->latest()
            ->take(2)
            ->get();

        $news = Activity::ofLang('fr')
            ->ofType([$this->type->value])
            ->latest()
            ->take(8)
            ->get();

        $elts = Activity::ofLang('fr')
            ->ofType([$this->type->value])
            ->inRandomOrder()
            ->take(8)
            ->get();


        return view('Front.pages.actu', compact('news','elts','last_second_news'));
    }

    public function newsDetail(Activity $activity) {
        // $activity = Activity::findOrFail($id);
        $additionalImages = $activity->images;
        
        if (Auth::check() ) {
            $activityKey = 'viewed_activity_' . $activity->id;

            if (!session()->has($activityKey)) {

                $activity->increment('views');
                session([$activityKey => true]);
            }
        }

        return view('Front.pages.newsDetail',compact('activity','additionalImages'));

    }

    public function media()
    {
        $news = Activity::ofLang('fr')->ofType([$this->type->value])->get();

        return view('Front.pages.media', compact('news'));
    }
}
