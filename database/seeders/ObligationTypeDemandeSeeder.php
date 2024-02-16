<?php

namespace Database\Seeders;

use App\Models\Obligation;
use App\Models\ObligationTypeDemande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObligationTypeDemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obligationFr1 = [1, 3, 5, 7,9,11,13,15,17];
        $typeDemandeIdFr1 = 1;

        $obligationAn1 = [2, 4, 6, 8,10,12,14,16,18];
        $typeDemandeIdAn1 = 2;

        $obligationFr2 = [19, 3, 5, 7];
        $typeDemandeIdFr2 = 3;

        $obligationAn2 = [20, 4, 6, 8];
        $typeDemandeIdAn2 = 4;

        foreach ($obligationFr1 as $obligation) {
            ObligationTypeDemande::create([
                'obligation_id' => $obligation,
                'type_de_demande_id' => $typeDemandeIdFr1
            ]);
        }
        foreach ($obligationAn1 as $obligation) {
            ObligationTypeDemande::create([
                'obligation_id' => $obligation,
                'type_de_demande_id' => $typeDemandeIdAn1
            ]);
        }
        foreach ($obligationFr2 as $obligation) {
            ObligationTypeDemande::create([
                'obligation_id' => $obligation,
                'type_de_demande_id' => $typeDemandeIdFr2
            ]);
        }
        foreach ($obligationAn2 as $obligation) {
            ObligationTypeDemande::create([
                'obligation_id' => $obligation,
                'type_de_demande_id' => $typeDemandeIdAn2
            ]);
        }


    }
}
