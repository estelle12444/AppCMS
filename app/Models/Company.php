<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Company extends Model

{
    use HasFactory;
    use Notifiable;



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

        'website_link',
        'legal_agent',
        'fonction',
        'activity',
        'location_type',

    ];




    public function demandes()
    {
        return $this->belongsToMany(Demande::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Company.php (modèle)

    public function countFieldsRenseignes()
    {
        // Comptez ici le nombre de champs réellement renseignés dans votre modèle
        // Par exemple, vous pouvez utiliser les propriétés/colonnes de votre modèle
        $count = 0;

        if ($this->name) {
            $count++;
        }

        if ($this->legal_form) {
            $count++;
        }
        if ($this->location_type) {
            $count++;
        }
        if ($this->activity) {
            $count++;
        }
        if ($this->fonction) {
            $count++;
        }
        if ($this->legal_agent) {
            $count++;
        }
        if ($this->website_link) {
            $count++;
        }
        if ($this->password) {
            $count++;
        }
        if ($this->email) {
            $count++;
        }
        if ($this->cellulaire) {
            $count++;
        }
        if ($this->phone) {
            $count++;
        }
        if ($this->siege) {
            $count++;
        }
        if ($this->capital) {
            $count++;
        }
        if ($this->taxpayer_account) {
            $count++;
        }
        if ($this->RCCM) {
            $count++;
        }


        return $count;
    }
}
