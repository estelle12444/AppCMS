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
        // DispositionTypeDemande::create([
        //     'disposition_id'=> [1,2,3,4,5,6],
        //      'type_de_demande_id'=>1
        // ]);

        // DispositionTypeDemande::create([
        //     'disposition_id'=> [1,2,3,4,5,6,7,8],
        //      'type_de_demande_id'=>2
        // ]);

        $dispositions = [1, 2, 3, 4, 5, 6];
        $typeDemandeId = 1;

        foreach ($dispositions as $disposition) {
            DispositionTypeDemande::create([
                'disposition_id' => $disposition,
                'type_de_demande_id' => $typeDemandeId
            ]);
        }
    }
}
