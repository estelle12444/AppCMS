<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\AnnonceTrait;
use App\Models\Activity;
use App\Models\Company;
use App\Models\Enums\ActivityTypeEnum;
use App\Models\PageCount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    use AnnonceTrait;
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $users = User::all();
        $companies = Company::all();
        $recentAnnonces = $this->getAnnonces();
        $lessRecentAnnonces = $this->getAnnonces(active:false, offset:3);
        $activeCompaniesCount = $this->getCompanyCount(status:true);
        $pendingCompaniesCount = $this->getCompanyCount(status:false);

        $adminCount = User::where('role_id', 1)->count();

        return view('Front.admin.home', compact('adminCount','companies', 'users', 'activeCompaniesCount', 'pendingCompaniesCount', 'recentAnnonces', 'lessRecentAnnonces'));;
    }

    private function getCompanyCount(bool $status){
        return DB::table('companies')
        ->join('users', 'companies.id', '=', 'users.company_id')
        ->where('users.status', $status)
        ->count();
    }
}
