<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Event;
use App\Models\Job;
use App\Models\Quotation;
use App\Models\Tender;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index()
    {
        $tenders = Tender::all();
        $careers = Career::all();
        $jobs = Job::all();
        $quotations = Quotation::all();
        $events = Event::all();


        return view('Front.pages.anonce', compact( 'tenders','careers','jobs','quotations','events'));
    }


    public function show_tender(Tender $tender)
    {
        return view('Front.pages.info', compact( 'tender'));
    }
    


    public function show_job(Job $job)
    {
        return view('Front.pages.job', compact( 'job'));
    }


    public function show_quotation(Quotation $quotation)
    {
        return view('Front.pages.quotation', compact( 'quotation'));
    }


    public function show_event(Event $event)
    {
        return view('Front.pages.event', compact( 'event'));
    }


    public function show_career(Career $career)
    {
        return view('Front.pages.career', compact( 'career'));
    }

}
