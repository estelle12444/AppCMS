<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;


    public function demandes()
    {
        return $this->belongsToMany(Demande::class);
    }
}
