<?php

namespace App\Models;

use App\Models\Contracts\TranslateContracts;
use App\Models\Traits\ParentLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDeDocument extends Model implements TranslateContracts
{
    use ParentLanguageTrait;

    protected $fillable = ['name','translate_code', 'parent_id'];

    public function typeDemandes()
    {
        return $this->belongsToMany(TypeDeDemande::class, 'type_de_demande_type_de_document ', 'type_de_document_id', 'type_de_demande_id');
    }
    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function tousLesDocumentsTransmis(Demande $demande)
    {
        dd($demande->checkIfDocIsCompleted);
        if (empty($demande->typeDemande)) {
            return false; // Ou faites ce qui est approprié dans votre cas
        }

        $typesDeDocumentsAssocies = $demande->typeDemande->typeDocuments;

        // Récupérer les identifiants des documents transmis
        $documentsTransmis = $demande->documents->pluck('type_de_document_id')->unique();

        // Vérifier si tous les identifiants des documents associés sont présents dans les documents transmis
        return array_diff($typesDeDocumentsAssocies->pluck('id'), $documentsTransmis) === [];
    }

    public function documentsManquants(Demande $demande): array
    {
        if (!$demande->typeDemande) {
            return []; // Ou gérer le cas où la demande n'a pas de type
        }

        $typesDeDocumentsAssocies = $demande->typeDemande->typeDocuments;
        $documentsTransmisIds = $demande->documents->pluck('id')->toArray();

        $documentsManquants = [];

        foreach ($typesDeDocumentsAssocies as $typeDeDocument) {
            foreach ($typeDeDocument->documents as $document) {
                if (!in_array($document->id, $documentsTransmisIds)) {
                    $documentsManquants[] = $document;
                }
            }
        }

        return $documentsManquants;
    }
}
