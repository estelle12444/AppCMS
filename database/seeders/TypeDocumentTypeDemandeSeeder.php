<?php

namespace Database\Seeders;

use App\Models\DocumentTypeDemande;
use App\Models\TypeDocumentTypeDemande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeDocumentTypeDemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $document1 = [1, 2, 3, 4];
        $typeDemandeId1 = 1;

        $document2 = [1,2,3,4,5,6];
        $typeDemandeId2 = 2;

        foreach ($document1 as $document) {
            TypeDocumentTypeDemande::create([
                'type_de_document_id' => $document,
                'type_de_demande_id' => $typeDemandeId1
            ]);
        }
        foreach ($document2 as $document) {
            TypeDocumentTypeDemande::create([
                'type_de_document_id' => $document,
                'type_de_demande_id' => $typeDemandeId2
            ]);
        }
    }
}
