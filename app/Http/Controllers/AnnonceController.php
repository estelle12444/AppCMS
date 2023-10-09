<?php

namespace App\Http\Controllers;

use App\Models\Career;
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
        $tenders = Tender::all();
        $careers = Career::all();
        $jobs = Job::all();
        $quotations = Quotation::all();
        $events = Event::all();


        return view('Front.pages.anonce', compact('tenders', 'careers', 'jobs', 'quotations', 'events'));
    }


    public function show_tender(Tender $tender)
    {
        return view('Front.pages.info', compact('tender'));
    }



    public function show_job(Job $job)
    {
        return view('Front.pages.job', compact('job'));
    }


    public function show_quotation(Quotation $quotation)
    {
        return view('Front.pages.quotation', compact('quotation'));
    }


    public function show_event(Event $event)
    {
        return view('Front.pages.event', compact('event'));
    }


    public function show_career(Career $career)
    {
        return view('Front.pages.career', compact('career'));
    }


    public function recentes()
    {
        $allAnnouncements = $this->getAllAnnouncements();
        $recentAnnonces = $this->getRecentAnnouncements($allAnnouncements, 8);

        return view('Front.admin.annonce.recent', ['recentAnnonces' => $recentAnnonces]);
    }

    public function moinsRecentes()
    {
        $allAnnouncements = $this->getAllAnnouncements();
        $lessRecentAnnonces = $this->getLessRecentAnnouncements($allAnnouncements, 5);

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
