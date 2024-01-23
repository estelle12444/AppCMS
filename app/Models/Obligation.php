<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obligation extends Model implements TranslateContracts
{
    use ParentLanguageTrait;

    public $timestamps = true;
    protected $fillable = ['title', 'content', 'cost', 'translate_code', 'parent_id'];

    public function typeDemandes()
    {
        return $this->belongsToMany(TypeDeDemande::class,'obligation_type_demande','obligation_id','type_de_demande_id');
    }
}
