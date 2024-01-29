<?php

namespace Database\Seeders;

use App\Models\BusinessPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                [
                    ['name' => 'Compte de résultats prévisionnel'],
                    ['name' => 'Plan des investissements et des sources de financement'],
                    ['name' => 'L’organigramme de la société et le plan de recrutement'],
                    ['name' => 'Évolution des Ventes'],
                    ['name' => 'Évolution de la Marge brute'],
                    ['name' => 'Évolution des charges d’exploitation'],
                    ['name' => 'Compte de résultats prévisionnel sur 5 ans'],
                    ['name' => 'Bilan des trois (3) derniers exercices pour une entreprise en exploitation'],
                    ['name' => 'Plan de développement commercial'],
                    ['name' => 'Plan de recherche et d’innovation']
                ],
                [
                    ['name' => 'Solutions innovantes'],
                    ['name' => 'Plan d’affaires'],
                    ['name' => 'Compte de résultats prévisionnel sur 3 ans.'],
                    ['name' => 'Plan de développement']
                ]
            ],
            [
                [
                    ['name' => 'Income statement'],
                    ['name' => 'Investment and financing plan'],
                    ['name' => 'Company organization chart and recruitment plan'],
                    ['name' => 'Sales development'],
                    ['name' => 'Gross Margin Evolution'],
                    ['name' => 'Operating expenses'],
                    ['name' => '5-year forecast income statement'],
                    ['name' => 'Balance sheet for the last three (3) years for a company in operation'],
                    ['name' => 'Business development plan'],
                    ['name' => 'Research and innovation plan']
                ],
                [
                    ['name' => 'Innovative solutions'],
                    ['name' => 'Business plan'],
                    ['name' => '3-year projected income statement'],
                    ['name' => 'Development plan']
                ]
            ]
        ];
        $typeId = 0;
        foreach ($data[0] as $group) {
            foreach ($group as $key => $fr) {
                $en = $data[1][$typeId][$key];
                $fr['type_de_demande_id'] = $typeId;
                $parent =  BusinessPlan::create($fr);
                $en = array_merge($en, [
                    'type_de_demande_id' => $typeId,
                    'translate_code' => 'en',
                    'parent_id' => $parent->id
                ]);
                BusinessPlan::create($en);
            }
            $typeId++;
        }
    }
}
