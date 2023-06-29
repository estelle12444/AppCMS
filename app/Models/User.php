<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'telephone',
        'adresse',
        'role_id',
        'piece_identite'
    ];


    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public $timestamps = false;
}
