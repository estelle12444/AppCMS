<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDeDocument extends Model
{
    protected $fillable = ['name'];

    public function typeDemandes()
    {
        return $this->belongsToMany(TypeDeDemande::class,'type_de_demande_type_de_document ','type_de_document_id','type_de_demande_id');
    }
}
