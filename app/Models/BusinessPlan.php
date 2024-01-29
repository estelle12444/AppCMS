<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPlan extends Model implements TranslateContracts
{
    use  HasFactory, ParentLanguageTrait;

    protected $with = ['child'];
    protected $fillable = ['name', 'type_de_demande_id', 'translate_code', 'parent_id'];
}
