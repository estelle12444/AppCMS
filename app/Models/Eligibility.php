<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eligibility extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'translate_code', 'parent_id'];
    public function typeDemandes()
    {
        return $this->belongsToMany(
            TypeDeDemande::class,
            'eligibility_type_de_demande',
            'eligibility_id',
            'type_de_demande_id'

        );
    }
}
