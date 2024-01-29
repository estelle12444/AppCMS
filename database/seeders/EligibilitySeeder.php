<?php

namespace Database\Seeders;

use App\Models\Eligibility;
use Database\Seeders\Trait\SeederTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EligibilitySeeder extends Seeder
{
    use SeederTrait;
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

        $this->insert($data, Eligibility::class);
    }
}
