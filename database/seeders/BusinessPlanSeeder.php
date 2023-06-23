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

        BusinessPlan::create(
            [
            'name' => 'Compte de résultats prévisionnel',
            'type_de_demande_id'=>1
            ]
    );
        BusinessPlan::create(['name' => 'Plan des investissements et des sources de financement','type_de_demande_id'=>1]);
        BusinessPlan::create(['name' => 'L’organigramme de la société et le plan de recrutement','type_de_demande_id'=>1]);
        BusinessPlan::create(['name' => 'Évolution des Ventes','type_de_demande_id'=>1]);
        BusinessPlan::create(['name' => 'Évolution de la Marge brute','type_de_demande_id'=>1]);
        BusinessPlan::create(['name' => 'Évolution des charges d’exploitation','type_de_demande_id'=>1]);
        BusinessPlan::create(['name' => 'Compte de résultats prévisionnel sur 5 ans','type_de_demande_id'=>1]);
        BusinessPlan::create(['name' => 'Bilan des trois (3) derniers exercices pour une entreprise en exploitation','type_de_demande_id'=>1]);
        BusinessPlan::create(['name' => 'Plan de développement commercial','type_de_demande_id'=>1]);
        BusinessPlan::create(['name' => 'Plan de recherche et d’innovation','type_de_demande_id'=>1]);


        BusinessPlan::create(['name' => 'Solutions innovantes','type_de_demande_id'=>2]);
        BusinessPlan::create(['name' => 'Plan d’affaires','type_de_demande_id'=>2]);
        BusinessPlan::create(['name' => 'Compte de résultats prévisionnel sur 3 ans.','type_de_demande_id'=>2]);
        BusinessPlan::create(['name' => 'Plan de développement','type_de_demande_id'=>2]);



    }
}
