<?php

namespace App\Models\Enums;

use Illuminate\Support\Facades\Session;

enum ActivityTypeEnum:string {
    case CAREERS = 'careers';
    case EVENTS =  'events';
    case JOBS = 'jobs';
    case QUOTATIONS = 'quotations';
    case TENDER = 'tender';

    public static function getTypeText(self $value): string {
        $cond = Session::get('locale') == 'fr';

        return match ($value) {
            ActivityTypeEnum::CAREERS =>  $cond ? "Appels à Candidature" : '',
            ActivityTypeEnum::EVENTS => $cond ? 'Demande de manifestation': '',
            ActivityTypeEnum::QUOTATIONS => $cond ? 'Page Not Found': '',
            ActivityTypeEnum::TENDER => $cond ? "Appels d'Offres": '',
            ActivityTypeEnum::JOBS => $cond ? "Appels d'offres" : '',
        };
    }
}

