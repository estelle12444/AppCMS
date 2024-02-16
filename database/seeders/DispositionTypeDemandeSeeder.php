<?php

namespace Database\Seeders;

use App\Models\DispositionTypeDemande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DispositionTypeDemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dispositionFr1 = [1, 3, 5,7,9,11];
        $typeDemandeIdFr1 = 1;

        $dispositionAn1 = [2, 4, 6,8,10,12];
        $typeDemandeIdAn1 = 2;

        $dispositionFr2 = [1, 3, 5,7,9,11,13,15];
        $typeDemandeIdFr2 = 3;

        $dispositionAn2 = [2, 4, 6,8,10,12,14,16];
        $typeDemandeIdAn2 = 4;

        foreach ($dispositionFr1 as $disposition) {
            DispositionTypeDemande::create([
                'disposition_id' => $disposition,
                'type_de_demande_id' => $typeDemandeIdFr1
            ]);
        }
        foreach ($dispositionAn1 as $disposition) {
            DispositionTypeDemande::create([
                'disposition_id' => $disposition,
                'type_de_demande_id' => $typeDemandeIdAn1
            ]);
        }
        foreach ($dispositionFr2 as $disposition) {
            DispositionTypeDemande::create([
                'disposition_id' => $disposition,
                'type_de_demande_id' => $typeDemandeIdFr2
            ]);
        }
        foreach ($dispositionAn2 as $disposition) {
            DispositionTypeDemande::create([
                'disposition_id' => $disposition,
                'type_de_demande_id' => $typeDemandeIdAn2
            ]);
        }
    }
}
