<?php

namespace Database\Seeders;

use App\Models\Eligibility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EligibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                ['title' => 'Biotechnologie'],
                ['title' => 'Technologies de l’Information et de la Communication'],
                ['title' => 'Banques et Établissements financiers d’appui aux investissements réalisés dans la Zone Franche']
            ],
            [
                ['title' => 'Biotechnology'],
                ['title' => 'Information and Communication Technologies'],
                ['title' => 'Banks and financial institutions supporting investments in the Free Zone']
            ]
        ];

        foreach ($data[0] as $key => $row) {
            $disposition = Eligibility::create($row);
            $row_en = $data[1][$key];
            $row_en = array_merge($row_en, [
                'translate_code' => 'en',
                'parent_id' => $disposition->id,
            ]);
            Eligibility::create($row_en);
        }
    }
}
