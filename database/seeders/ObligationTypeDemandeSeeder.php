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


        ObligationTypeDemande::insert([
            [
                'obligation_id' => 1,
                'type_de_demande_id' => 1
            ],
            [
                'obligation_id' => 2,
                'type_de_demande_id' => 1
            ],
            [
                'obligation_id' => 3,
                'type_de_demande_id' => 1
            ],
            [
                'obligation_id' => 4,
                'type_de_demande_id' => 1
            ],
            [
                'obligation_id' => 5,
                'type_de_demande_id' => 1
            ],
            [
                'obligation_id' => 6,
                'type_de_demande_id' => 1
            ],
            [
                'obligation_id' => 7,
                'type_de_demande_id' => 1
            ],
            [
                'obligation_id' => 8,
                'type_de_demande_id' => 1
            ],
            [
                'obligation_id' => 9,
                'type_de_demande_id' => 1
            ],
            [
                'obligation_id' => 1,
                'type_de_demande_id' => 2
            ],
            [
                'obligation_id' => 2,
                'type_de_demande_id' => 2
            ],
            [
                'obligation_id' => 3,
                'type_de_demande_id' => 2
            ],
            [
                'obligation_id' => 4,
                'type_de_demande_id' => 2
            ],

        ]);

    }
}
