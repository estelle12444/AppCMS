<?php

namespace Database\Seeders;

use App\Models\Obligation;
use Database\Seeders\Trait\SeederTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObligationSeeder extends Seeder
{
    use SeederTrait;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                [
                    'title' => 'Dossier d’agrément',
                    'content' => "Un formulaire de demande d’agrément dument
                    renseigné par le représentant légal de l’entreprise
                    - Les statuts de la société
                    - Un résumé du business plan de l’activité qui sera
                    exercée sur le parc et faire ressortir l’évolution sur cinq
                    (5) ans : a. Des états financiers des trois derniers exercices,
                    pour une entreprise existante. b. Des états financiers prévisionnels sur cinq ans.",
                ],
                [
                    'title' => 'Signature',
                    'content' => 'La signature des Conditions Générales d’Implantation (CGI)',
                ],
                [
                    'title' => 'Signature d’un contrat de bail commercial',
                    'content' => " La signature d’un contrat de bail commercialen cas de
                    location de bureaux ou d’un contrat de bail emphytéotique
                    de 15 à 50 ans renouvelable en cas d’option de
                    construction, correspondant aux besoins exprimés en
                    espaces;",
                ],
                [
                    'title' => "Frais d'agrement",
                    'content' => "L’acquittement de la facture de frais d’agrément",
                ],
                [
                    'title' => ' Paiement de redevance',
                    'content' => 'Le paiement de redevance sur le chiffre d’affaires dès le
                    début de l’exploitation;',
                ],
                [
                    'title' => 'Dossier technique',
                    'content' => "La communication du dossier technique de construction sur
                    la ZBTIC y compris les délais;",
                ],
                [
                    'title' => '  Plan',
                    'content' => ' Le plan de financement du projet',
                ],
                [
                    'title' => 'Dispositions ',
                    'content' => "Les dispositions en matière de sécurité, d’hygiène, de
                    salubrité publique, de protection de l’environnement, de la
                    faune, de la flore et du patrimoine national",
                ],
                [
                    'title' => 'EIES',
                    'content' => 'Pour les entreprises de Biotechnologie, fournir l’Étude
                    d’Impact Environnemental et Social (EIES) .',
                ],
                [
                    'title' => 'Dossier d’agrément',
                    'content' => "Un formulaire de demande d’agrément dûment renseigné par
                    le représentant légal de l’entreprise
                    - les statuts de la société
                    - un résumé du business plan de l’activité qui sera exercée sur
                    le parc et faire ressortir l’évolution sur trois(3) ans.",
                    'cost' => 500000
                ]
            ],
            [
                [
                    'title' => 'Approval form',
                    'content' => "An approval application form duly
                    completed by the company's legal representative
                    - The company's articles of association
                    - A summary of the business plan for the activity to be
                    to be carried out at the park, showing changes over five
                    (5) years: a. Financial statements for the last three years,
                    for an existing company. b. Five-year financial forecasts",
                ],
                [
                    'title' => 'Signature',
                    'content' => 'The signature of the General Conditions of Implementation (CGI)',
                ],
                [
                    'title' => 'Signing a commercial lease contract',
                    'content' => "The signing of a commercial lease contract in the case of
                    in the case of an office lease, or an emphyteutic lease contract
                    15 to 50 years renewable in the case of a construction option
                    corresponding to the needs expressed in
                    space requirements;",
                ],
                [
                    'title' => "Approval fees",
                    'content' => "Approval fee invoice payment",
                ],
                [
                    'title' => 'Royalty payment',
                    'content' => 'Payment of royalty on sales from the start of
                    start of operation;',
                ],
                [
                    'title' => 'Technical file',
                    'content' => "Communication of the technical construction file on the
                    the ZBTIC including deadlines;",
                ],
                [
                    'title' => 'Plan',
                    'content' => ' Project financing plan',
                ],
                [
                    'title' => 'Provisions ',
                    'content' => "Provisions relating to safety, hygiene, public health
                    protection of the environment, fauna, flora and national
                    fauna, flora and national heritage",
                ],
                [
                    'title' => 'EIES',
                    'content' => 'For Biotechnology companies, provide the Environmental and Social
                    Environmental and Social Impact Assessment (ESIA) .',
                ],
                [
                    'title' => "Registration file",
                    'content' => "An approval application form duly completed by
                    the company's legal representative
                    - the company's articles of association
                    - a summary of the business plan for the activity to be carried out on the
                    the park and show the evolution over three(3) years.",
                    'cost' => 500000
                ]
            ]
        ];

        $this->insert($data, Obligation::class);
    }
}
