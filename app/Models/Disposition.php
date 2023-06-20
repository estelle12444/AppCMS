<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposition extends Model
{

    protected $fillable = ['percent', 'title', 'content'];

    public function typeDemandes()
    {
        return $this->belongsToMany(
            TypeDeDemande::class,
            'disposition_type_de_demande',
            'disposition_id',
            'type_de_demande_id',


        );
    }
}
