<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eligibility extends Model implements TranslateContracts
{
    use HasFactory, ParentLanguageTrait;

    protected $with = ['child'];
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
