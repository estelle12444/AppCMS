<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EligibilityTypeDemande extends Model
{
    protected $table = 'eligibility_type_demande';
    protected $fillable = ['eligibility_id', 'type_de_demande_id'];
    public $timestamps = false;

    public function Eligibility()
    {
        return $this->belongsTo(
            Eligibility::class
        );
    }

    public function typeDemande()
    {
        return $this->belongsTo(
            TypeDeDemande::class

        );
    }
}
