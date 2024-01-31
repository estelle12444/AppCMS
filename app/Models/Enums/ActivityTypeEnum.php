<?php

namespace App\Models\Enums;

use Illuminate\Support\Facades\Session;

enum ActivityTypeEnum: string
{
    case CAREERS = 'careers';
    case EVENTS =  'events';
    case JOBS = 'jobs';
    case QUOTATIONS = 'quotations';
    case TENDER = 'tender';
    case NEWS = 'news';

    public function getImage():string
    {
        return match ($this) {
            ActivityTypeEnum::CAREERS =>  asset('img/annonce/candidature.png'),
            ActivityTypeEnum::EVENTS => "https://abc-signaletique.fr/822-large_default/panneau-point-d-exclamation-refd868.jpg",
            ActivityTypeEnum::QUOTATIONS => asset('img/annonce/cotation.png'),
            ActivityTypeEnum::TENDER => asset('img/annonce/appel_offre.jpg'),
            ActivityTypeEnum::JOBS => asset('img/annonce/offre_emploi.jpg'),
        };
    }

    public function getTypeText(): string
    {
        $cond = Session::get('locale') == 'fr';

        return match ($this) {
            ActivityTypeEnum::CAREERS =>  $cond ? "Appels à Candidature" : 'Careers',
            ActivityTypeEnum::EVENTS => $cond ? 'Demande de manifestation' : 'Events',
            ActivityTypeEnum::QUOTATIONS => $cond ? 'Demande de cotation' : 'Quotation',
            ActivityTypeEnum::TENDER => $cond ? "Appels d'Offres" : 'Tenders',
            ActivityTypeEnum::JOBS => $cond ? "Offres d'emploi" : 'Jobs',
        };
    }

    public function getHeaderCreate()
    {
        return match ($this) {
            ActivityTypeEnum::CAREERS => '<div class="section-header">
                                            <h1>Liste des Appels à Candidature</h1>
                                            <div class="section-header-breadcrumb">
                                               <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Appels à Candidature</a></div>
                                                <div class="breadcrumb-item">Création</div>
                                            </div>
                                        </div>',
            ActivityTypeEnum::EVENTS => '<div class="section-header">
                                                <h1>Liste des demandes de manifestations</h1>
                                                <div class="section-header-breadcrumb">
                                                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                    <div class="breadcrumb-item"><a href="#">Demandes de manifestations</a></div>
                                                    <div class="breadcrumb-item">Création</div>
                                                </div>
                                        </div>',
            ActivityTypeEnum::QUOTATIONS => ' <div class="section-header">
                                                    <h1>Liste des Demandes de Cotations</h1>
                                                    <div class="section-header-breadcrumb">
                                                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                        <div class="breadcrumb-item"><a href="#">Demandes de Cotations</a></div>
                                                        <div class="breadcrumb-item">Création</div>
                                                    </div>
                                                </div> ',
            ActivityTypeEnum::TENDER => '<div class="section-header">
                                            <h1>Liste des appels d\'offres</h1>
                                                <div class="section-header-breadcrumb">
                                                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                    <div class="breadcrumb-item"><a href="#">Appels d\'offres</a></div>
                                                    <div class="breadcrumb-item">Création</div>
                                                </div>
                                        </div>',
            ActivityTypeEnum::JOBS => '<div class="section-header">
                                            <h1>Liste des offres d\'emploi</h1>
                                                <div class="section-header-breadcrumb">
                                                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                    <div class="breadcrumb-item"><a href="#">Offres d\'emploi</a></div>
                                                    <div class="breadcrumb-item">Création</div>
                                                </div>
                                        </div>',
            ActivityTypeEnum::NEWS => '<div class="section-header">
                                        <h1>Liste des Actualités</h1>
                                            <div class="section-header-breadcrumb">
                                                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Actualités</a></div>
                                                <div class="breadcrumb-item">Création</div>
                                            </div>
                                    </div>'
        };
    }

    public function getHeaderEdit()
    {
        return match ($this) {
            ActivityTypeEnum::CAREERS => '<div class="section-header">
                                                <h1>Liste des Appels à Candidature</h1>
                                                <div class="section-header-breadcrumb">
                                                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                    <div class="breadcrumb-item"><a href="#">Appels à Candidature</a></div>
                                                    <div class="breadcrumb-item">Edition</div>
                                                </div>
                                            </div>',
            ActivityTypeEnum::EVENTS => '<div class="section-header">
                                                <h1>Liste des demandes de manifestations</h1>
                                                <div class="section-header-breadcrumb">
                                                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                    <div class="breadcrumb-item"><a href="#">Demandes de manifestations</a></div>
                                                    <div class="breadcrumb-item">Edition</div>
                                                </div>
                                        </div>',
            ActivityTypeEnum::QUOTATIONS => '  <div class="section-header">
                                                    <h1>Liste des Demandes de Cotations</h1>
                                                    <div class="section-header-breadcrumb">
                                                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                        <div class="breadcrumb-item"><a href="#">Demandes de Cotations</a></div>
                                                        <div class="breadcrumb-item">Edition</div>
                                                    </div>
                                                </div> ',
            ActivityTypeEnum::TENDER => '<div class="section-header">
                                                <h1>Liste des appels d\'offres</h1>
                                                <div class="section-header-breadcrumb">
                                                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                    <div class="breadcrumb-item"><a href="#">Appels d\'offres</a></div>
                                                    <div class="breadcrumb-item">Edition</div>
                                                </div>
                                        </div>',
            ActivityTypeEnum::JOBS => '<div class="section-header">
                                            <h1>Liste des offres d\'emploi</h1>
                                            <div class="section-header-breadcrumb">
                                                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Offres d\'emploi</a></div>
                                                <div class="breadcrumb-item">Edition</div>
                                            </div>
                                        </div>',
            ActivityTypeEnum::NEWS => '<div class="section-header">
                                        <h1>Liste des Actualités</h1>
                                            <div class="section-header-breadcrumb">
                                                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Actualités</a></div>
                                                <div class="breadcrumb-item">Edition</div>
                                            </div>
                                    </div>',
        };
    }

    public function getHeaderIndex()
    {
        return match ($this) {
            ActivityTypeEnum::CAREERS => '<div class="section-header">
                                                <h1>Liste des appels d\'offres</h1>
                                                <div class="section-header-breadcrumb">
                                                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                    <div class="breadcrumb-item"><a href="#">Appels à Candidature</a></div>
                                                    <div class="breadcrumb-item">Liste</div>
                                                </div>
                                            </div>',
            ActivityTypeEnum::EVENTS => '<div class="section-header">
                                                <h1>Liste des demandes de manifestations</h1>
                                                <div class="section-header-breadcrumb">
                                                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                    <div class="breadcrumb-item"><a href="#">Demandes de manifestations</a></div>
                                                    <div class="breadcrumb-item">Liste</div>
                                                </div>
                                        </div>',
            ActivityTypeEnum::QUOTATIONS => '  <div class="section-header">
                                                    <h1>Liste des Demandes de Cotations</h1>
                                                    <div class="section-header-breadcrumb">
                                                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                        <div class="breadcrumb-item"><a href="#">Demandes de Cotations</a></div>
                                                        <div class="breadcrumb-item">Liste</div>
                                                    </div>
                                                </div> ',
            ActivityTypeEnum::TENDER => '<div class="section-header">
                                                <h1>Liste des appels d\'offres</h1>
                                                <div class="section-header-breadcrumb">
                                                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                    <div class="breadcrumb-item"><a href="#">Appels d\'offres</a></div>
                                                    <div class="breadcrumb-item">Liste</div>
                                                </div>
                                        </div>',
            ActivityTypeEnum::JOBS => '<div class="section-header">
                                            <h1>Liste des offres d\'emploi</h1>
                                            <div class="section-header-breadcrumb">
                                                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Offres d\'emploi</a></div>
                                                <div class="breadcrumb-item">Liste</div>
                                            </div>
                                        </div>',
            ActivityTypeEnum::NEWS => '<div class="section-header">
                                        <h1>Liste des offres d\'emploi</h1>
                                            <div class="section-header-breadcrumb">
                                                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                                <div class="breadcrumb-item"><a href="#">Actualités</a></div>
                                                <div class="breadcrumb-item">Liste</div>
                                            </div>
                                    </div>',
            };
    }

    public function getMessageDelete()
    {
        return match ($this) {
            ActivityTypeEnum::CAREERS => "Êtes-vous sûr de vouloir supprimer cet appel d'offres?",
            ActivityTypeEnum::EVENTS => 'Êtes-vous sûr de vouloir supprimer cette  demande de manifestation',
            ActivityTypeEnum::QUOTATIONS => 'Êtes-vous sûr de vouloir supprimer cette  demande de cotatation',
            ActivityTypeEnum::TENDER => "Êtes-vous sûr de vouloir supprimer cet appel d\'offres?",
            ActivityTypeEnum::JOBS => "Êtes-vous sûr de vouloir supprimer cette offre d'emploi",
            ActivityTypeEnum::NEWS => "Êtes-vous sûr de vouloir supprimer cette  actualités",
        };
    }

    public function getMessageEdit()
    {
        return match ($this) {
            ActivityTypeEnum::CAREERS => "Modifier l'appel à candidature",
            ActivityTypeEnum::EVENTS => 'Modifier la Demande de manifestation',
            ActivityTypeEnum::QUOTATIONS => 'Modifier la demande de cotation',
            ActivityTypeEnum::TENDER => "Modifier l'appel d'offre",
            ActivityTypeEnum::JOBS => "Modifier l'offre  d'emploi",
            ActivityTypeEnum::JOBS => "Modifier l'actualité",
        };
    }
}
