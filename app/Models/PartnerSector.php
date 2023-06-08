<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerSector extends Model
{
    use HasFactory;

    protected $table = 'partners_sectors';
    protected $fillable = ['partner_id', 'sector_id'];
    public $timestamps = false;

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
