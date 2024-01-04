<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class PartnerController extends Controller

{


    public function index()
    {
        $partners = Partner::with('sectors')->get();
        $sectors = Sector::all();

        return view('Front.pages.etsagre', compact('partners', 'sectors'));
    }

    public function search()
    {
        $sectors = Sector::all();
        $partners = Partner::all(['id', 'title', 'image', 'content']);
        return view('Front.pages.etsagre', compact('sectors', 'partners'));
    }

    public function search_process(Request $request)
    {
         $sector_id = '';
         $search_term = '';

         // Récupérer tous les secteurs d'activité
        $sectors = Sector::all();

        // Effectuer la recherche en fonction des critères
        $query = Partner::query();

        if (!empty($request->sector_id)) {
            // Filtrer par secteur d'activité
            $sector_id = htmlspecialchars($request->sector_id);
            $query->whereHas('sectors', function ($query) use ($request) {
                $query->where('sector_id','=', $request->sector_id);
            });
        }

        if (!empty($request->search_term)) {
            // Filtrer par nom de partenaire
            $search_term = htmlspecialchars($request->search_term);

            $query->where('title', 'LIKE', '%' . strtoupper($request->search_term) . '%');
        }

        // Récupérer les partenaires correspondants aux critères de recherche
        $partners = $query->get();

        return view('Front.pages.etsagre', compact('sectors', 'partners','search_term', 'sector_id'));


        // $partners = Partner::whereHas('sectors', function () use ($data) {
        // })->where('title', 'like', '%' . $data['search_term'] . '%')->get();

        // return view('Front.pages.etsagre', ['results' => $partners], compact('sectors', 'partners'));
    }
}
