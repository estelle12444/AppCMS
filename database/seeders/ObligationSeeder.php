<?php

namespace Database\Seeders;

use App\Models\Obligation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObligationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obligations = [
            [
                'title' => 'Dossier d’agrément',
                'content' => "Un formulaire de demande d’agrément dument
                renseigné par le représentant légal de l’entreprise
                - Les statuts de la société
                - Un résumé du business plan de l’activité qui sera
                exercée sur le parc et faire ressortir l’évolution sur cinq
                (5) ans : a. Des états financiers des trois derniers exercices,
                pour une entreprise existante. b. Des états financiers prévisionnels sur cinq ans.",
                'cost' => NULL
            ],



            [
                'title' => 'Signature',
                'content' => 'La signature des Conditions Générales d’Implantation (CGI)',
                'cost' => NULL
            ],

            [
                'title' => 'Signature d’un contrat de bail commercial',
                'content' => " La signature d’un contrat de bail commercialen cas de
                location de bureaux ou d’un contrat de bail emphytéotique
                de 15 à 50 ans renouvelable en cas d’option de
                construction, correspondant aux besoins exprimés en
                espaces;",
                'cost' => NULL
            ],

            [
                'title' => "Frais d'agrement",
                'content' => "L’acquittement de la facture de frais d’agrément",
                'cost' => NULL
            ],

            [
                'title' => ' Paiement de redevance',
                'content' => 'Le paiement de redevance sur le chiffre d’affaires dès le
                début de l’exploitation;',
                'cost' =>NULL
            ],

            [
                'title' => 'Dossier technique',
                'content' => "La communication du dossier technique de construction sur
                la ZBTIC y compris les délais;",
                'cost' => NULL
            ],

            [
                'title' => '  Plan',
                'content' => ' Le plan de financement du projet',
                'cost' =>NULL
            ],
        [
                'title' => 'Dispositions ',
                'content' => "Les dispositions en matière de sécurité, d’hygiène, de
                salubrité publique, de protection de l’environnement, de la
                faune, de la flore et du patrimoine national",
                'cost' => NULL
            ]
            ,
            [
                'title' => 'EIES',
                'content' => 'Pour les entreprises de Biotechnologie, fournir l’Étude
                d’Impact Environnemental et Social (EIES) .',
                'cost' => NULL
            ],

            [
                'title' => 'Dossier d’agrément',
                'content' => "Un formulaire de demande d’agrément dûment renseigné par
                le représentant légal de l’entreprise
                - les statuts de la société
                - un résumé du business plan de l’activité qui sera exercée sur
                le parc et faire ressortir l’évolution sur trois(3) ans.",
                'cost' => '500000'
            ]


        ];

        foreach ($obligations as $obligation) {
            DB::table('obligations')->insert($obligation);
        }
    }
}
