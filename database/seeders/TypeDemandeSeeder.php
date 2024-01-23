<?php

namespace Database\Seeders;

use App\Models\TypeDeDemande;
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

        foreach ($data[0] as $key => $row) {
            $type = TypeDeDemande::create($row);
            $row_en = $data[1][$key];
            $row_en = array_merge($row_en, [
                'translate_code' => 'en',
                'parent_id' => $type->id,
            ]);
            TypeDeDemande::create($row_en);
        }
    }
}
