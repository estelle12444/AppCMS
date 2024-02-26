<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityCompany extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activity_id',
        'company_id',
        'status',
    ];
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    /**
     * Get the company associated with the ActivityCompany.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
}
