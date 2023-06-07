<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image'
    ];

    public $timestamps = false;

    public function sectors()
    {
        return $this->hasMany(PartnerSector::class);
    }
}
