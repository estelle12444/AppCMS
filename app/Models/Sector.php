<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    public $timestamps = false;

    // protected $with = ['child'];
    protected $fillable = ['nom'];

    public function partners()
    {
        return $this->belongsToMany(Partner::class);
    }
}
