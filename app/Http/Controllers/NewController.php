<?php

namespace App\Http\Controllers;

use App\Models\Enums\ActivityTypeEnum;
use Illuminate\Http\Request;

class NewController extends Controller
{
    protected $folder = 'new';
    protected $type = ActivityTypeEnum::NEWS;
}
