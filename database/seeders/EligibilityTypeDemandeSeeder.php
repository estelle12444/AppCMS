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
        for ($i=1; $i < 2; $i++) {
            for ($j=1; $j < 4; $j++) {
                EligibilityTypeDemande::create(['eligibility_id' => $j, 'type_de_demande_id' => $i]);
            }
        }
    }
}
