<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
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
        'name',
        'email',
        'portfolio',
        'skills',
        'cover_letter',
        'attachments',
        'status'
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


}
