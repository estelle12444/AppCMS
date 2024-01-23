<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\App;

trait ParentLanguageTrait
{
    public function child(){
        return $this->hasOne(__CLASS__, 'parent_id', 'id');
    }

    public function getTranslatorAttribute(): array
    {
        $cond = App::getLocale() == 'fr';
        $translate = [];
        foreach ($this->getFillable() as $field) {
            $translate[$field] = $cond ? $this->{$field} : $this->child?->{$field};
        }
        return $translate;
    }
}

