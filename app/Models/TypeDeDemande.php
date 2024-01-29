<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDeDemande extends Model implements TranslateContracts
{
    use HasFactory, ParentLanguageTrait;

    protected $with = ['child'];
    protected $fillable = ['name', 'translate_code', 'parent_id'];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function obligations()
    {
        return $this->hasMany(Obligation::class,'obligation_type_demande','type_de_demande_id','obligation_id');
    }

    public function eligibilities()
    {
        return $this->belongsToMany(
            Eligibility::class,
            'eligibility_type_demande',
            'type_de_demande_id',
            'eligibility_id'
        );
    }

    public function dispositions()
    {
        return $this->belongsToMany(
            Disposition::class,
            'disposition_type_demande',
            'type_de_demande_id',
            'disposition_id'
        );
    }

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }

    public function typeDocuments(){
        return $this->belongsToMany(TypeDeDocument::class,'type_de_demande_type_de_document','type_de_document_id',
        'type_de_demande_id');
    }
}
