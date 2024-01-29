<?php

namespace App\Http\Controllers;

use App\Models\Enums\ActivityTypeEnum;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends ActivityController
{
    protected $folder = 'quotation';
    protected $type = ActivityTypeEnum::QUOTATIONS;
}
