<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model implements TranslateContracts
{
    use HasFactory, ParentLanguageTrait;

    protected $fillable = ['name', 'translate_code', 'parent_id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function compagnies()
    {
        return $this->hasMany(Company::class);
    }

}
