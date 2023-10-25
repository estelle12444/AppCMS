<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDocumentTypeDemande extends Model
{
    protected $table = 'type_de_demande_type_de_document';
    protected $fillable = ['type_de_document_id', 'type_de_demande_id'];


    public function typeDocuments()
    {
        return $this->belongsTo(
            TypeDeDocument::class,'type_de_document_id'
        );
    }

    public function typeDemandes()
    {
        return $this->belongsTo(
            TypeDeDemande::class,'type_de_demande_id'

        );
    }
}
