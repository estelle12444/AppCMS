<?php

namespace Database\Seeders;

use App\Models\Disposition;
use Database\Seeders\Trait\SeederTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DispositionSeeder extends Seeder
{
    use SeederTrait;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                ['percent' => 0,'title' => '','content' => 'de droits de douanes à l’importation et à l’exportation'],
                ['percent' => 0,'title' => '','content' => 'd’impôts sur les revenus pendant les 5 premières années'],
                ['title' => 'Exonération','content' => 'totale de la patente'],
                ['percent' => 1,'title' => '','content' => 'd’impôts sur le chiffre d’affaires à partir de la 6ème année avec possibilités de remise d’impôt jusqu’à 50%'],
                ['percent' => 0,'title' => '','content' => 'de taxe à valeur ajoutée sur les facteurs de production : consommations d’électricité, d’eau et de produits pétroliers…'],
                ['title' => 'Guichet unique','content' => 'pour l’assistance au traitement rapide des opérations administratives'],
                ['title' => 'Titre de séjour', 'content' => ' pour les étrangers et leurs familles'],
                ['title' => 'Aucune limite ', 'content' => 'sur les investissements étrangers et locaux']
            ],[
                ['percent' => 0,'title' => '','content' => 'customs import and export duties'],
                ['percent' => 0,'title' => '','content' => 'income tax for the first 5 years'],
                ['title' => 'Exemption','content' => 'total tax exemption'],
                ['percent' => 1,'title' => '','content' => 'sales tax from the 6th year with the possibility of tax rebates up to 50%'],
                ['percent' => 0,'title' => '','content' => 'value-added tax on production factors: consumption of electricity, water and petroleum products...'],
                ['title' => 'Guichet unique', 'content' => 'for assistance with the rapid processing of administrative operations'],
                ['title' => 'Residence permit', 'content' => 'for foreigners and their families'],
                ['title' => 'No limit ', 'content' => 'on foreign and local investments'],
            ]
        ];

        $this->insert($data, Disposition::class);
    }
}
