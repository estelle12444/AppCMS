<?php

namespace App\Http\Controllers;

use App\Models\Enums\ActivityTypeEnum;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends ActivityController
{
    protected $folder = 'event';
    protected $type = ActivityTypeEnum::EVENTS;
}
