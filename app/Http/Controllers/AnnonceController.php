<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\AnnonceTrait;
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
    use AnnonceTrait;

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
        $recentAnnonces = $this->getAnnonces(offset: Activity::active()->count());
        return view('Front.admin.annonce.recent', compact('recentAnnonces'));
    }

    public function moinsRecentes()
    {
        $lessRecentAnnonces = $this->getAnnonces(active: false, offset: Activity::disable()->count());
        return view('Front.admin.annonce.moins-recent', compact('lessRecentAnnonces'));
    }
}
