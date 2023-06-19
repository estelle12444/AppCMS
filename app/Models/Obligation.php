<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obligation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'content', 'cost'];
    public function typeDemandes()
    {
        return $this->belongsToMany(
            TypeDemande::class,
            'obligation_type_de_demande',
            'obligation_id',
            'type_de_demande_id'

        );
    }
}
