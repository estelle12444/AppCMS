<?php

namespace App\Http\Controllers;

use App\Models\Enums\ActivityTypeEnum;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends ActivityController
{
    protected $folder = 'job';
    protected $type = ActivityTypeEnum::JOBS;
}
