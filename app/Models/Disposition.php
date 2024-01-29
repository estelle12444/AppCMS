<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposition extends Model implements TranslateContracts
{
    use HasFactory, ParentLanguageTrait;

    protected $with = ['child'];
    protected $fillable = ['percent', 'title', 'content', 'parent_id', 'translate_code'];

    public function typeDemandes()
    {
        return $this->belongsToMany(
            TypeDeDemande::class,
            'disposition_type_de_demande',
            'disposition_id',
            'type_de_demande_id'
        );
    }
}
