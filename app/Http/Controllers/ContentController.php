<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ContentController extends Controller
{
    public function contentIndex(){
        $pages = [
            'layouts' => [
                "title" => "",
                "count" => 33
            ],
            'profil.layouts' => [
                "title" => "",
                "count" => 8
            ],
            'home' => [
                "title" => "Accueil",
                "count" => 20
            ],
            'about' => [
                "title" => "A propos",
                "count" => 9
            ],
            'opportunity' => [
                "title" => "Opportunité",
                "count" => 26
            ],
            'installer' => [
                "title" => "S'implanter",
                "count" => 33
            ],
            'landing' => [
                "title" => "",
                "count" => 7
            ],
            'news' => [
                "title" => " Actualités",
                "count" =>8
            ],
            'actu'=>[
                "title"=>"Gallery",
                "count" =>1
            ],
            'info' => [
                "title" => "Detail de l'annonce",
                "count" => 6
            ],
            'profil.home' => [
                "title" => " Accueil du dashboard du client",
                "count" => 10
            ],
            'profil.company' => [
                "title" => "Formulaire des entreprises",
                "count" => 14
            ],
            'profil.document' => [
                "title" => "",
                "count" => 6
            ],
            'profil.profil_edit' => [
                "title" => "",
                "count" => 6
            ],
            'profil.demande_state' => [
                "title" => "",
                "count" => 9
            ],
            'profil.form' => [
                "title" => "",
                "count" => 23
            ]
        ];

        return view('Front.admin.content.index',compact('pages'));
    }

    public function contentPage($key){
        $contents = [];

        foreach (['fr', 'en'] as $id) {
            $json = json_decode(file_get_contents(resource_path("lang/$id.json")), true);
            $contents[$id] = collect($json)->where(function($value, $index) use($key){
                return Str::startsWith($index, $key);
            })->toArray();
        }
        return view('Front.admin.content.page', compact('contents'));
    }

    public function contentPageEdit($key){
        $contents = [];

        foreach (['en', 'fr'] as $id) {
            $json = json_decode(file_get_contents(resource_path("lang/$id.json")), true);
            $contents[$id] = collect($json)->where(function($value, $index) use($key){
                return $index === $key;
            })->toArray();
        }
        return view('Front.admin.content.edit', compact('contents', 'key'));
    }

    public function saveContent(Request $request, $key){
        $max = config("translate_rule")[$key];
        $isSuccess = true;

        $validator = Validator::make($request->all() ,[
            'en.content' => 'required',
            'fr.content' => 'required'
        ]);

        $validator->after(function ($validator) use($request, $max) {
            foreach ($request->all() as $key => $value) {
                if(in_array($key, ['en', 'fr'])){
                    $value = strip_tags($value['content']);
                    if(strlen($value) > $max){
                        $validator->errors()->add(
                            "$key.content", "Le nombre de caractèrer maximum autorisé est $max"
                        );
                    }
                }
            }
        });

        $validated = $validator->validate();

        foreach ($validated as $ind => $value) {
            $json = json_decode(file_get_contents(resource_path("lang/$ind.json")));
            $json->$key = $value['content'];
            $isSuccess = file_put_contents(resource_path("lang/$ind.json"), json_encode($json, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        }

        if($isSuccess){
            $pages = collect(['layouts', 'profil.layouts', 'home', 'about', 'opportunity', "installer", "landing", "news", "actu", "info", "profil.home", "profil.company", "profil.document", "profil.profil_edit", "profil.demande_state", "profil.form"]);

            $page = $pages->where(function($value) use ($key) {
                return Str::startsWith($key, $value);
            })->first();

            return redirect()->route("ContentPage", ['key' => $page])->with('success', "Texte modifié avec succès.");
        }else{
            return redirect()->back()->with('error', 'Erreur lors de la modification');
        }

    }

}
