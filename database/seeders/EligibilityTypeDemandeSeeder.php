<?php

namespace Database\Seeders;

use App\Models\EligibilityTypeDemande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EligibilityTypeDemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eligibilityFr1 = [1, 3, 5];
        $typeDemandeIdFr1 = 1;

        $eligibilityAn1 = [2, 4, 6];
        $typeDemandeIdAn1 = 2;

        $eligibilityFr2 = [1, 3, 5];
        $typeDemandeIdFr2 = 3;

        $eligibilityAn2 = [2, 4, 6];
        $typeDemandeIdAn2 = 4;

        foreach ($eligibilityFr1 as $eligibility) {
            EligibilityTypeDemande::create([
                'eligibility_id' => $eligibility,
                'type_de_demande_id' => $typeDemandeIdFr1
            ]);
        }
        foreach ($eligibilityAn1 as $eligibility) {
            EligibilityTypeDemande::create([
                'eligibility_id' => $eligibility,
                'type_de_demande_id' => $typeDemandeIdAn1
            ]);
        }
        foreach ($eligibilityFr2 as $eligibility) {
            EligibilityTypeDemande::create([
                'eligibility_id' => $eligibility,
                'type_de_demande_id' => $typeDemandeIdFr2
            ]);
        }
        foreach ($eligibilityAn2 as $eligibility) {
            EligibilityTypeDemande::create([
                'eligibility_id' => $eligibility,
                'type_de_demande_id' => $typeDemandeIdAn2
            ]);
        }
    }
}
