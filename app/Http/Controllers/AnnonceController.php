<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index()
    {
        $tenders = Tender::all();


        return view('Front.pages.anonce', compact( 'tenders'));
    }
}