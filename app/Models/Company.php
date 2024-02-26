<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Company extends Model

{
    use HasFactory, Notifiable;
    // use ParentLanguageTrait;

    protected $fillable = [
        'name',
        'legal_form',
        'RCCM',
        'taxpayer_account',
        'capital',
        'siege',
        'phone',
        'cellulaire',
        'email',
        // 'translate_code',
        // 'parent_id',
        'website_link',
        'legal_agent',
        'fonction',
        'activity',
        'location_type'
    ];


    public function demandes()
    {
        return $this->belongsToMany(Demande::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function countFieldsRenseignes()
    {
        // Comptez ici le nombre de champs réellement renseignés dans votre modèle
        // Par exemple, vous pouvez utiliser les propriétés/colonnes de votre modèle
        $count = 0;
        foreach (array_diff($this->getFillable(), ['parent_id', 'translate_code']) as $field) {
            if ($this->$field) {
                $count++;
            }
        }
        return $count;
    }
    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'activity_companies');
    }
    public function applicants()
    {
        return $this->belongsTo(Applicant::class);
    }
}
