<?php

namespace Database\Seeders;


use App\Models\TypeDeDocument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeDeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                ['name' => 'Statuts'],
                ['name' => 'Références bancaires'],
                ['name' => 'Copie du Registre de commerce'],
                ['name' => 'Copie DFE'],
                ['name' => 'Plan de financement du projet'],
                ['name' => 'En cas de construction, dispositions prévues en matière de sécurité, d’hygiène, de salubrité publique, de protection de l’environnement, de la faune, de la flore et du patrimoine national'],
            ],
            [
                ['name' => 'Status'],
                ['name' => 'Bank references'],
                ['name' => 'Copy of Trade Register'],
                ['name' => 'Copy of DFE'],
                ['name' => 'Project financing plan'],
                ['name' => 'In the event of construction, provisions relating to safety, hygiene, public health, protection of the environment, fauna, flora and national heritage'],
            ]
        ];

        foreach ($data[0] as $key => $row) {
            $type = TypeDeDocument::create($row);
            $row_en = $data[1][$key];
            $row_en = array_merge($row_en, [
                'translate_code' => 'en',
                'parent_id' => $type->id,
            ]);
            TypeDeDocument::create($row_en);
        }
    }
}
