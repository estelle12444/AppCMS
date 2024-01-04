<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObligationTypeDemande extends Model
{
    protected $table = 'obligation_type_demande';
    protected $fillable = ['obligation_id', 'type_de_demande_id'];


    public function obligation()
    {
        return $this->belongsTo(Obligation::class,'obligation_id');
    }

    public function typeDemande()
    {
        return $this->belongsTo(TypeDeDemande::class,'type_de_demande_id');
    }

}
