<?php

namespace App\Http\Controllers;

use PDF;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Exemple de fichier PDF',
            'content' => 'Conten du fichier PDF généré avec Laravel',
        ];

        $pdf = PDF::loadView('Front.pdf.template', $data);

        return $pdf->download('exemple.pdf');
    }
}
