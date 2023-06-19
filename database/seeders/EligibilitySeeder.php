<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EligibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eligibilities = [
            [
                'title' => 'Biotechnologie',
            ],
            [
                'title' => 'Technologies de l’Information et de la Communication',
            ],
            [
                'title' => 'Banques et Établissements financiers d’appui aux
                investissements réalisés dans la Zone Franche',
            ],
            // Ajoutez d'autres enregistrements d'éligibilité ici
        ];

        foreach ($eligibilities as $eligibility) {
            DB::table('eligibilities')->insert($eligibility);
        }
    }
}
