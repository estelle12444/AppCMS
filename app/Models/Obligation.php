<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obligation extends Model
{
    public $timestamps = true;
    protected $fillable = ['title', 'content', 'cost'];

    public function typeDemandes()
    {
        return $this->belongsToMany(TypeDeDemande::class,'obligation_type_demande','obligation_id','type_de_demande_id');
    }
}
