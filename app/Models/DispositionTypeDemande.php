<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DispositionTypeDemande extends Model
{
    protected $table = 'disposition_type_demande';
    protected $fillable = ['disposition_id', 'type_de_demande_id'];


    public function disposition()
    {
        return $this->belongsTo(
            Disposition::class,'disposition_id'
        );
    }

    public function typeDemande()
    {
        return $this->belongsTo(
            TypeDeDemande::class,'type_de_demande_id'

        );
    }
}
