<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityCompany extends Model
{
    use HasFactory;

    protected $fillable = ['activity_id', 'company_id', 'status'];
}
