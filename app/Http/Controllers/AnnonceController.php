<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Career;
use App\Models\Enums\ActivityTypeEnum;
use App\Models\Event;
use App\Models\Job;
use App\Models\Quotation;
use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnonceController extends Controller
{
    public function index()
    {
        $activities=Activity::ofType(
            array_map(
                fn($type) => $type->value,
                [
                    ActivityTypeEnum::CAREERS,
                    ActivityTypeEnum::JOBS,
                    ActivityTypeEnum::EVENTS,
                    ActivityTypeEnum::QUOTATIONS,
                    ActivityTypeEnum::TENDER,
                ])
            )->get()->groupBy('type');
        dd($activities);
        return view('Front.pages.anonce', compact('activities'));
    }

    public function show_tender(Activity $activity)
    {
        return view('Front.pages.info', compact('activity'));
    }


    public function recentes()
    {
        $allAnnouncements = $this->getAllAnnouncements();
        $recentAnnonces = $this->getRecentAnnouncements($allAnnouncements, 8);
        if (is_null($recentAnnonces)) {
            // Si $recentAnnonces est null, initialisez-le avec un tableau vide
            $recentAnnonces = [];
        }
        return view('Front.admin.annonce.recent', ['recentAnnonces' => $recentAnnonces]);
    }

    public function moinsRecentes()
    {
        $allAnnouncements = $this->getAllAnnouncements();
        $lessRecentAnnonces = $this->getLessRecentAnnouncements($allAnnouncements, 5);
        if (is_null($lessRecentAnnonces)) {
            // Si $recentAnnonces est null, initialisez-le avec un tableau vide
            $lessRecentAnnonces = [];
        }
        return view('Front.admin.annonce.moins-recent', ['lessRecentAnnonces' => $lessRecentAnnonces]);
    }

    private function getAllAnnouncements()
    {
        $announcements = [];
        $models = ['Career', 'Job', 'Quotation', 'Event','Tender'];

        foreach ($models as $model) {
            $className = "\App\Models\\$model";
            if (class_exists($className)) {
                $data = app()->make($className)->all();
                foreach ($data as $item) {
                    $announcements[] = [
                        'type' => $model,
                        'date' => $item->created_at,
                        'title' => $item->title ?? $item->position ?? '',
                        'content' => $item->content,
                        'id'=> $item->id
                    ];
                }
            }
        }

        usort($announcements, function ($a, $b) {
            return $b['date'] <=> $a['date'];
        });

        return $announcements;
    }

    private function getRecentAnnouncements($announcements, $count)
    {
        return array_slice($announcements, 0, $count);
    }

    private function getLessRecentAnnouncements($announcements, $count)
    {
        return array_slice($announcements, $count, $count);
    }
}
