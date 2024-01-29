<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Enums\ActivityTypeEnum;
use Illuminate\Http\Request;

class CareerController extends ActivityController
{
    protected $folder = 'career';
    protected $type = ActivityTypeEnum::CAREERS;
}
