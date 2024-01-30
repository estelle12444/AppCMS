<?php

namespace App\Http\Controllers\Traits;

use App\Models\Activity;
use App\Models\Enums\ActivityTypeEnum;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;

trait AnnonceTrait
{
    private function getAnnonces($active=true, $offset=5){
        $builder = Activity::query()->latest();

        if($active) {
            $builder = $builder->active();
        }

        return $builder->ofLang('fr')->ofType(array_map(
            fn($type) => $type->value, [
                ActivityTypeEnum::CAREERS,
                ActivityTypeEnum::JOBS,
                ActivityTypeEnum::EVENTS,
                ActivityTypeEnum::QUOTATIONS,
                ActivityTypeEnum::TENDER,
            ])
        )->get()->take($offset)->toArray();
    }
}

