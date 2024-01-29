<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\PageCount;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $allAnnouncements = Activity::latest()->ofLang('fr')->all();
        $adminCount = User::where('role_id', 1)->count();
        $downloadCount = PageCount::all()->sum('count');
        $downloadCount = PageCount::all()->sum('count');
        dd($allAnnouncements);
    }
}
