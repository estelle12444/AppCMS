<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{

    protected $fillable = ['reference','title', 'version','code','type_de_demande_id','user_id', 'status'];

    public function typeDemande()
    {
        return $this->belongsTo(TypeDeDemande::class,'type_de_demande_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function checkIfDocIsCompleted()
    {
        $addTypeDocumentIds = $this->documents()->get()->pluck('type_de_document_id');
        $requiredTypeDocumentIds = $this->typeDemande->typeDocuments()->get()->pluck('id');


        // dump('addDoc',$addTypeDocumentIds);
        // dump('requiredDoc',$requiredTypeDocumentIds);
        // dd('ok');
    }
}
