<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validez les données du formulaire
        $request->validate([
            'email' => 'required|email|unique:newsletters',
        ]);

        // Enregistrez l'abonné dans la base de données
        Newsletter::create([
            'email' => $request->input('email'),
        ]);

        // Redirigez l'utilisateur vers la page index avec un message de succès
        return redirect()->route('index')->with('success', 'Vous avez été abonné à la newsletter avec succès.');
    }

}
