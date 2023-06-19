<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeDemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'DEMANDE D\'AGREMENT VITIB',
            ],
            [
                'name' => 'DEMANDE D\'AGREMENT VITIB PEPINIERE',
            ],
            // Ajoutez d'autres enregistrements de types de demandes ici
        ];

        foreach ($types as $type) {
            DB::table('type_de_demandes')->insert($type);
        }
    }
}
