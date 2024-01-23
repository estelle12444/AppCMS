<?php

namespace App\Models\Contracts;

use Illuminate\Database\Eloquent\Casts\Attribute;

interface TranslateContracts {
    public function getTranslatorAttribute(): array;
}
