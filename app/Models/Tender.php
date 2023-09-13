<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;
    protected $table = 'tender';
    protected $fillable = [
        'title',
        'content',
        'resume',
        'image',
        'file'
    ];

}
