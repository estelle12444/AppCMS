<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{

    protected $fillable = ['reference','title', 'version','code'];

    public function typeDemande()
    {
        return $this->belongsTo(TypeDeDemande::class);
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
