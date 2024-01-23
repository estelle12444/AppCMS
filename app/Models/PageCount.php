<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageCount extends Model implements TranslateContracts
{
    use HasFactory, ParentLanguageTrait;

    protected $fillable = ['url', 'name', 'count', 'translate_code', 'parent_id'];
}
