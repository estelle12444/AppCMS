<?php

namespace App\Http\Controllers;

use App\Models\Enums\ActivityTypeEnum;
use App\Models\Tender;
use Illuminate\Http\Request;



class TenderController extends ActivityController
{
    protected $folder = 'tender';
    protected $type = ActivityTypeEnum::TENDER;
}
