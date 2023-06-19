<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DispositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dispositions = [
            [
                'percent' => 0,
                'title' => '',
                'content' => 'de droits de douanes à l’importation et à l’exportation',
            ],
            [
                'percent' => 0,
                'title' => '',
                'content' => 'd’impôts sur les revenus pendant les 5 premières années',
            ],
            [
                'percent' => NULL ,
                'title' => 'Exonération',
                'content' => 'totale de la patente',
            ],
            [
                'percent' => 1,
                'title' => '',
                'content' => 'd’impôts sur le chiffre d’affaires à partir de la 6ème année avec
                possibilités de remise d’impôt jusqu’à 50%',
            ],
            [
                'percent' => 0,
                'title' => '',
                'content' => 'de taxe à valeur ajoutée sur les facteurs de production :
                consommations d’électricité, d’eau et de produits pétroliers…',
            ],
            [
                'percent' =>  NULL ,
                'title' => 'Guichet unique',
                'content' => 'pour l’assistance au traitement rapide des
                opérations administratives',
            ],
            [
                'percent' =>  NULL ,
                'title' => 'Titre de séjour',
                'content' => ' pour les étrangers et leurs familles',
            ],
            [
                'percent' => NULL  ,
                'title' => 'Aucune limite ',
                'content' => 'sur les investissements étrangers et locaux',
            ],

        ];

        foreach ($dispositions as $disposition) {
            DB::table('dispositions')->insert($disposition);
        }
    }
}
