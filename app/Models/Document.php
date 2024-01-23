<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model implements TranslateContracts
{
    use HasFactory, ParentLanguageTrait;

    protected $fillable = ['fichier', 'nom_original','type_de_document_id', 'company_id', "demande_id", 'parent_id', 'translate_code'];

    public function typeDeDemande(){
        return $this->belongsTo(TypeDeDemande::class, 'type_demande_id');
    }

    public function typeDeDocument()
    {
        return $this->belongsTo(TypeDeDocument::class, 'type_de_document_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function demande()
    {
        return $this->belongsTo(Demande::class, 'demande_id');
    }
}
