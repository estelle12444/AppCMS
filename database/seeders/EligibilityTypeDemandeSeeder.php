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
        EligibilityTypeDemande::insert([
            ['eligibility_id' => 1, 'type_de_demande_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['eligibility_id' => 2, 'type_de_demande_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['eligibility_id' => 3, 'type_de_demande_id' => 1,'created_at' => now(),'updated_at' => now()]
        ]);

        EligibilityTypeDemande::insert([
            ['eligibility_id' => 1, 'type_de_demande_id' => 2,'created_at' => now(),'updated_at' => now()],
            ['eligibility_id' => 2, 'type_de_demande_id' => 2,'created_at' => now(),'updated_at' => now()],
            ['eligibility_id' => 3, 'type_de_demande_id' => 2,'created_at' => now(),'updated_at' => now()]
        ]);

    }
}
