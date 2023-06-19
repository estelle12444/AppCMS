<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eligibility extends Model
{
    public $timestamps = false;
    protected $fillable = ['title'];
    public function typeDemandes()
    {
        return $this->belongsToMany(
            TypeDemande::class,
            'eligibility_type_de_demande',
            'eligibility_id',
            'type_de_demande_id'

        );
    }
}
