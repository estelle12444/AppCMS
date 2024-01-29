<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model implements TranslateContracts
{
    use HasFactory, ParentLanguageTrait;

    protected $with = ['child'];
    protected $fillable = ['title', 'content', 'resume', 'image', 'file', 'limit_date', 'type','translate_code', 'parent_id'];

    public function scopeOfType(Builder $query, array $type): void
    {
        $query->whereIn('type', $type);
    }
}
