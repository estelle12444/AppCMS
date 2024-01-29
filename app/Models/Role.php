<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function compagnies()
    {
        return $this->hasMany(Company::class);
    }

}
