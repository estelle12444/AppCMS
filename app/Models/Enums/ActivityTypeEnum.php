<?php

namespace App\Models\Enums;

use Illuminate\Support\Facades\Session;

enum ActivityTypeEnum:string {
    case CAREERS = 'careers';
    case EVENTS =  'events';
    case JOBS = 'jobs';
    case QUOTATIONS = 'quotations';
    case TENDER = 'tender';
    case NEWS = 'news';

    public function getTypeText(): string {
        $cond = Session::get('locale') == 'fr';

        return match ($this) {
            ActivityTypeEnum::CAREERS =>  $cond ? "Appels à Candidature" : '',
            ActivityTypeEnum::EVENTS => $cond ? 'Demande de manifestation': '',
            ActivityTypeEnum::QUOTATIONS => $cond ? 'Page Not Found': '',
            ActivityTypeEnum::TENDER => $cond ? "Appels d'Offres": '',
            ActivityTypeEnum::JOBS => $cond ? "Appels d'offres" : '',
        };
    }

    public function getHeaderCreate(){
        return match ($this) {
            ActivityTypeEnum::CAREERS => "Appels à Candidature",
            ActivityTypeEnum::EVENTS => '<div class="section-header">
                                            <h1>Liste des demandes de manifestations</h1>
                                            <div class="section-header-breadcrumb">
                                                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Demandes de manifestations</a></div>
                                                <div class="breadcrumb-item">Liste</div>
                                            </div>
                                        </div>',
            ActivityTypeEnum::QUOTATIONS => 'Page Not Found',
            ActivityTypeEnum::TENDER => '<div class="section-header">
                                            <h1>Liste des appels d\'offres</h1>
                                            <div class="section-header-breadcrumb">
                                                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Appels d\'offres</a></div>
                                                <div class="breadcrumb-item">Liste</div>
                                            </div>
                                        </div>',
            ActivityTypeEnum::JOBS => "Appels d'offres",
        };
    }

    public function getHeaderEdit(){
        return match ($this) {
            ActivityTypeEnum::CAREERS => "Appels à Candidature",
            ActivityTypeEnum::EVENTS => '<div class="section-header">
                                            <h1>Liste des demandes de manifestations</h1>
                                            <div class="section-header-breadcrumb">
                                                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Demandes de manifestations</a></div>
                                                <div class="breadcrumb-item">Liste</div>
                                            </div>
                                        </div>',
            ActivityTypeEnum::QUOTATIONS => 'Page Not Found',
            ActivityTypeEnum::TENDER => '<div class="section-header">
                                            <h1>Liste des appels d\'offres</h1>
                                            <div class="section-header-breadcrumb">
                                                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Appels d\'offres</a></div>
                                                <div class="breadcrumb-item">Liste</div>
                                            </div>
                                        </div>',
            ActivityTypeEnum::JOBS => "Appels d'offres",
        };
    }

    public function getHeaderIndex(){
        return match ($this) {
            ActivityTypeEnum::CAREERS => "Appels à Candidature",
            ActivityTypeEnum::EVENTS => '<div class="section-header">
                                            <h1>Liste des demandes de manifestations</h1>
                                            <div class="section-header-breadcrumb">
                                                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Demandes de manifestations</a></div>
                                                <div class="breadcrumb-item">Liste</div>
                                            </div>
                                        </div>',
            ActivityTypeEnum::QUOTATIONS => 'Page Not Found',
            ActivityTypeEnum::TENDER => '<div class="section-header">
                                            <h1>Liste des appels d\'offres</h1>
                                            <div class="section-header-breadcrumb">
                                                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Appels d\'offres</a></div>
                                                <div class="breadcrumb-item">Liste</div>
                                            </div>
                                        </div>',
            ActivityTypeEnum::JOBS => "Appels d'offres",
        };
    }

    public function getMessageDelete(){
        return match ($this) {
            ActivityTypeEnum::CAREERS => "Êtes-vous sûr de vouloir supprimer cet appel d'offres?",
            ActivityTypeEnum::EVENTS => 'Demande de manifestation',
            ActivityTypeEnum::QUOTATIONS => 'Page Not Found',
            ActivityTypeEnum::TENDER => "Êtes-vous sûr de vouloir supprimer cet appel d\'offres?",
            ActivityTypeEnum::JOBS => "Appels d'offres",
        };
    }
}

