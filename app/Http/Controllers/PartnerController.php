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
        $data = $request->all();
        $sectors = Sector::all();

        $partners = Partner::whereHas('sectors', function () use ($data) {

         })->where('title', 'like','%'. $data['search_term'] . '%')->get();

        return view('Front.pages.etsagre', ['results' => $partners], compact('sectors', 'partners'));
    }
}
