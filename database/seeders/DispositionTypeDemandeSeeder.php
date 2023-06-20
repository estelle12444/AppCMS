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

        $dispositions1 = [1, 2, 3, 4, 5, 6];
        $typeDemandeId1 = 1;

        $dispositions2 = [1,2,3,4,5,6,7,8];
        $typeDemandeId2 = 2;

        foreach ($dispositions1 as $disposition) {
            DispositionTypeDemande::create([
                'disposition_id' => $disposition,
                'type_de_demande_id' => $typeDemandeId1
            ]);
        }
        foreach ($dispositions2 as $disposition) {
            DispositionTypeDemande::create([
                'disposition_id' => $disposition,
                'type_de_demande_id' => $typeDemandeId2
            ]);
        }
    }
}
