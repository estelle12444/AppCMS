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
        TypeDeDocument::create(['name' => 'Statuts']);
        TypeDeDocument::create(['name' => 'Références bancaires']);
        TypeDeDocument::create(['name' => 'Copie du Registre de commerce']);
        TypeDeDocument::create(['name' => 'Copie DFE']);
        TypeDeDocument::create(['name' => 'Plan de financement du projet']);
        TypeDeDocument::create(['name' => 'En cas de construction, dispositions prévues en matière de sécurité, d’hygiène, de salubrité publique, de protection de l’environnement, de la faune, de la flore et du patrimoine national']);
    }
}
