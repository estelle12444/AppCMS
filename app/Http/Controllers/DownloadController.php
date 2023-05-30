<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{


    public function telechargerPDF()
    {
        $cheminFichier = storage_path('app/public/LISTE-DES-OPPORTUNITES.pdf.pdf'); // Chemin du fichier PDF à télécharger

        if (file_exists($cheminFichier)) {
            return response()->download($cheminFichier, 'LISTE-DES-OPPORTUNITES.pdf');
        } else {
            return response()->json(['message' => 'Le fichier PDF n\'existe pas.'], 404);
        }
    }
    public function downloadPDF()
    {
        $cheminFichier = storage_path('app/public/ENTREPRISES-AGREEES.pdf.pdf'); // Chemin du fichier PDF à télécharger

        if (file_exists($cheminFichier)) {
            return response()->download($cheminFichier, 'ENTREPRISES-AGREEES.pdf');
        } else {
            return response()->json(['message' => 'Le fichier PDF n\'existe pas.'], 404);
        }
    }
}
