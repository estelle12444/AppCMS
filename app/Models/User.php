<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public $timestamps = false;
}
