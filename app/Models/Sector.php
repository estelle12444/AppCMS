<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];


    public function partners()
    {
        return $this->belongsToMany(Partner::class);
    }
}
