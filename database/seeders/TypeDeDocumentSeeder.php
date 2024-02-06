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

        $this->insert($data, TypeDeDocument::class);
    }
    public function insert($data, $class){
        $model = app()->make($class);
        foreach ($data[0] as $key => $row) {
            $french = $model::create($row);
            $english = $data[1][$key];
            $model::create(
                array_merge($english, [
                    'translate_code' => 'en',
                    'parent_id' => $french->id,
                ])
            );
        }
    }
}
