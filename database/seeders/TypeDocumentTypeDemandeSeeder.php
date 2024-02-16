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
        $documentFr1 = [1, 3, 5, 7];
        $typeDemandeIdFr1 = 1;

        $documentAn1 = [2, 4, 6, 8];
        $typeDemandeIdAn1 = 2;

        $documentFr2 = [1, 3, 5, 7,9,11];
        $typeDemandeIdFr2 = 3;

        $documentAn2 = [2, 4, 6, 8,10,12];
        $typeDemandeIdAn2 = 4;

        foreach ($documentFr1 as $document) {
            TypeDocumentTypeDemande::create([
                'type_de_document_id' => $document,
                'type_de_demande_id' => $typeDemandeIdFr1
            ]);
        }
        foreach ($documentAn1 as $document) {
            TypeDocumentTypeDemande::create([
                'type_de_document_id' => $document,
                'type_de_demande_id' => $typeDemandeIdAn1
            ]);
        }
        foreach ($documentFr2 as $document) {
            TypeDocumentTypeDemande::create([
                'type_de_document_id' => $document,
                'type_de_demande_id' => $typeDemandeIdFr2
            ]);
        }
        foreach ($documentAn2 as $document) {
            TypeDocumentTypeDemande::create([
                'type_de_document_id' => $document,
                'type_de_demande_id' => $typeDemandeIdAn2
            ]);
        }
    }
}
