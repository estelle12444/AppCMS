<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $secteurs = [
            ['nom' => 'TECH'],
            ['nom' => 'AUDIO VISUEL'],
            ['nom' => 'TIC'],
            ['nom' => "FONDS D'INVESTISSEMENT"],
            ['nom' => 'DATA CENTER'],
            ['nom' => 'TELECOM'],
            ['nom' => 'ENERGIE'],
            ['nom' => 'BIOTECH'],
            ['nom' => 'CALL CENTER'],
            ['nom' => 'MONETIQUE'],
            ['nom' => "COMPAGNIE D'INVESTISSEMENT"],
            ['nom' => 'BIOTECHNOLOGIE'],
            ['nom' => 'MEDICAL'],
            ['nom' => 'TELECOM-ENERGIE'],
            ['nom' => 'PHARMACEUTIQUE'],
            ['nom' => 'ELECTRONIQUE'],
            ['nom' => 'FORMATION-INCUBATION'],
            ['nom' => 'IT'],
            ['nom' => 'ARCHIVAGE DES DONNEES'],
            ['nom' => 'DOUBLAGE'],
            ['nom' => 'FORMATION IT'],
            ['nom' => 'INFORMATIQUE'],
            ['nom' => 'FINTECH'],
            ['nom' => 'OBJETS CONNECTES'],
            ['nom' => 'SECURITE'],
            ['nom' => 'FORMATION'],
            ['nom' => 'PRESSE EN LIGNE'],
            ['nom' => 'INCUBATEUR'],
            // Ajoutez d'autres secteurs d'activité ici
        ];

        foreach ($secteurs as $secteur) {
            Sector::create($secteur);
        }

    }
}
