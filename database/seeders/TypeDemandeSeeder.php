<?php

namespace Database\Seeders;

use App\Models\TypeDeDemande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeDemandeSeeder extends Seeder
{
    use SeederTrait;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                ['name' => 'DEMANDE D\'AGREMENT VITIB'],
                ['name' => 'DEMANDE D\'AGREMENT VITIB PEPINIERE'],
            ],
            [
                ['name' => "APPLICATION FOR VITIB APPROVAL"],
                ['name' => "APPLICATION FOR VITIB PEPINIERE APPROVAL"],
            ]
        ];

        $this->insert($data, TypeDeDemande::class);
    }
}
