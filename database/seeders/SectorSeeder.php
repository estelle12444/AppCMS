<?php

namespace Database\Seeders;

use App\Models\Sector;
use Database\Seeders\Trait\SeederTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    use SeederTrait;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
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
            ],
            [
                ['nom' => 'TECH'],
                ['nom' => 'AUDIO VISUAL'],
                ['nom' => 'TIC'],
                ['nom' => "INVESTMENT FUND"],
                ['nom' => 'DATA CENTER'],
                ['nom' => 'TELECOM'],
                ['nom' => 'ENERGY'],
                ['nom' => 'BIOTECH'],
                ['nom' => 'CALL CENTER'],
                ['nom' => 'MONETIQUE'],
                ['nom' => "COMPAGNIE D'INVESTISSEMENT"],
                ['nom' => 'BIOTECHNOLOGY'],
                ['nom' => 'MEDICAL'],
                ['nom' => 'TELECOM-ENERGIE'],
                ['nom' => 'PHARMACEUTICAL'],
                ['nom' => 'ELECTRONICS'],
                ['nom' => 'TRAINING-INCUBATION'],
                ['nom' => 'IT'],
                ['nom' => 'DATA ARCHIVING'],
                ['nom' => 'DOUBLAGE'],
                ['nom' => 'IT TRAINING'],
                ['nom' => 'COMPUTING'],
                ['nom' => 'FINTECH'],
                ['nom' => 'CONNECTED OBJECTS'],
                ['nom' => 'SECURITY'],
                ['nom' => 'TRAINING'],
                ['nom' => 'ONLINE PRESS'],
                ['nom' => 'INCUBATOR'],
            ]
        ];

        $this->insert($data, Sector::class);

    }
}
