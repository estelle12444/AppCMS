<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ContentController extends Controller
{
    private function data()
    {
        return [
            [
                'title' => 'Toutes les Images',
                'id' => 'image',
                'items' => [
                    'image.logo_url'=>" Le logo",
                    // 'video.home.url'=>"La vidéo de présentation",
                    // 'image.home' => ' Toutes les images de Accueil/Home',
                    'image.home.tech' => "Image section gauche",
                    'image.home.smart' => 'Image section droite',
                    "image.about.dg"=> "Photo du directeur Géneral",
                    "image.opportunity.warehouses"=> "img/city.png",
                    "image.opportunity.promotion"=> "img/Picture9.png",
                    "image.opportunity.office"=> "img/immeuble.png",
                    "image.opportunity.business_hotels"=> "img/hotel.png",
                    "image.opportunity.university"=> "img/universite.png",
                    "image.opportunity.immobilier"=> "img/immobilier.png",
                    "image.opportunity.clinic"=> "img/clinique.png",
                    "image.opportunity.centre_cultu"=> "img/centre_cultu.png",
                    "image.opportunity.centre_commer"=> "img/centre_commer.png",
                    "image.opportunity.project_service"=> "img/Image4.png",
                    "image.installer.eligibilite"=> "Page ''",
                    "image.installer.procedure"=> "img/icon-installer/Parcours.png",
                    "image.installer.join_us"=> "img/Image7.png",
                ]
            ],
            [
                'title' => 'Accueil/Home',
                'id' => 'home',
                'items' => [
                    'home' => ' Tous le contenu Accueil/Home',
                    'home.carousel.left' => "Texte introductif",
                    'home.advantages' => 'Les titres des avantages',
                    'home.presentation' => 'Contenu de la présentation',
                    'home.presentation2' => 'Contenu des autres avantages',

                ]
            ],
            [
                'title' => 'A propos/About us',
                'id' => 'about',
                'items' => [
                    'about' => 'Voir Tout',
                    'about.vision' => 'Notre vision',
                    'about.director' => ' Mot du directeur',
                    'about.mission' => 'Notre mission',
                    'about.value' => 'Nos Valeurs',
                ]
            ],
            [
                'title' => 'Opportunités / Opportunity',
                'id' => 'opportunity',
                'items' => [
                    'opportunity' => 'Voir Tout',
                    'opportunity.zone' => 'Domaines d\'activités',
                    'opportunity.projects' => 'Nos projets',
                    'opportunity.projects.future_projects' => 'Nos futurs projets',
                    'opportunity.section' => 'Autres Opportunités',

                ]
            ],
            [
                'title' => 'S\'implanter / Installer',
                'id' => 'installer',
                'items' => [
                    'installer' => 'Voir Tout',
                    'installer.carousel' => ' Le texte introductif',
                    'installer.section.eligibility' => 'Les Eligibilités',
                    'installer.section.eligibility.prerequisites' => 'Prérequis des Eligibilités',
                    'installer.section.eligibility.industrial'=>'Activités Eligibles (les sous titres)',
                    'installer.section.eligibility.industrial.1' => 'Activités Industrielles',
                    'installer.section.eligibility.industrial.2' => 'Recherche et développement',
                    'installer.section.eligibility.industrial.3' => ' Renforcement des capacités',
                    'installer.section.eligibility.industrial.4' => 'Services à valeur ajoutée ',
                    'installer.section.eligibility.industrial.5' => "Activités d'accompagnement",
                    'installer.section.value_added' => 'Notre valeur ajoutée',
                    'installer.join_us' => 'Nous rejoindre'
                ]
            ],
            [
                'title' => 'Annonces',
                'id' => 'new',
                'items' => [
                    'news' => 'Annonce/ News',
                    'news.job' => 'Offres en Génerales',
                    'news.job.no' => 'Offres',
                    'news.job.no.result' => 'En cas de non-resultat',
                ]
            ],
            [
                'title' => 'Détail de l\'offre',
                'id' => 'info',
                'items' => [
                    'info' => 'Détail de l\'annonce',
                    'info.job' => 'Détail de l\'offre',
                ]
            ],
            [
                'title' => 'Actualités',
                'id' => 'actu',
                'items' => [
                    'actu' => 'Gallérie',
                    'actu.event' => 'Evénements',
                ]
            ],
            [
                'title' => 'Site: page d\'atterrissage',
                'id' => 'landing',
                'items' => [
                    'landing' => 'Voir Tout',
                    'landing.innovation_village' => 'Village de l\'innovation',
                    'landing.agreement_application' => 'Documents d\'agrément',
                    'landing.website_browsing' => 'lien du naviguation',

                ]
            ],
            [
                'title' => 'Dispositions',
                'id' => 'layouts',
                'items' => [
                    'layouts' => 'Tous les élements de Dispositions ',
                    'layouts.nav' => 'Entête du site\ Header',
                    'layouts.nav.menu' => 'Menu de l\'Entête ',
                    'layouts.footer' => 'Pied de page/ Footer',
                    'layouts.footer.address' => 'Adresse ou contact',
                    'layouts.footer.ads' => 'Annonce du Footer',
                    'layouts.footer.newsletter' => ' Newsletter',
                    'layouts.footer.social' => ' réseau social',
                    'layouts.footer.copyright' => ' Copyright',
                ]
            ],
            [
                'title' => 'Administration Client',
                'id' => 'profil',
                'items' => [
                    'profil' => 'Adminstration Client',
                    'profil.layouts' => "Bar de navigation",
                    'profil.layouts.requests' => 'Demandes effectuées',
                    'profil.layouts.documents' => 'Documents founirs',
                    'profil.home' => 'Accueil',
                    'profil.company' => 'Données Entreprises',
                    'profil.company.form' => ' Champs du Formulaire',
                    'profil.document_edit' => 'Modification du document',
                    'profil.profil_edit' => 'Modifications des informations',
                    'profil.demande_state' => 'Etat de la demande'
                ]
            ]
        ];
    }

    public function contentIndex()
    {
        $sections = $this->data();
        return view('Front.admin.content.index', compact('sections'));
    }

    public function contentPage($key)
    {
        $contents = [];
        $title = '';

        foreach (['fr', 'en'] as $id) {
            $json = json_decode(file_get_contents(resource_path("lang/$id.json")), true);
            $contents[$id] = collect($json)->where(function ($value, $index) use ($key) {
                return Str::startsWith($index, $key);
            })->toArray();
        }

        if (count($contents['fr']) > 0) {
            $titles =  array_merge(...array_map(fn ($section) => $section['items'], $this->data()));
            $title = $titles[$key];
        }

        return view('Front.admin.content.page', compact('contents', 'key', 'title'));
    }



    public function contentPageEdit($key)
    {
        $contents = [];

        foreach (['en', 'fr'] as $id) {
            $json = json_decode(file_get_contents(resource_path("lang/$id.json")), true);
            $contents[$id] = collect($json)->where(function ($value, $index) use ($key) {
                return $index === $key;
            })->toArray();
        }
        return view('Front.admin.content.edit', compact('contents', 'key'));
    }

    public function imageContentPage($key)
    {
        $contents = [];

        foreach (['en', 'fr'] as $id) {
            $json = json_decode(file_get_contents(resource_path("lang/$id.json")), true);
            $contents[$id] = collect($json)->where(function ($value, $index) use ($key) {
                return $index === $key;
            })->toArray();
        }
        return view('Front.admin.content.edit-image', compact('contents', 'key'));
    }

    public function saveContent(Request $request, $key)
    {
        $max = config("translate_rule")[$key];
        $isSuccess = true;

        $validator = Validator::make($request->all(), [
            'en.content' => 'required',
            'fr.content' => 'required'
        ]);

        $validator->after(function ($validator) use ($request, $max) {
            foreach ($request->all() as $key => $field) {
                if (in_array($key, ['en', 'fr'])) {
                    $value = strip_tags($field['content']);
                    //dd(strlen($field['content']), $field['content'], strlen($value), $value, $max);
                    if (strlen($value) > $max) {
                        $validator->errors()->add("$key.content", "Le nombre de caractèrer maximum autorisé est $max");
                    }
                }
            }
        });

        $validated = $validator->validated();

        foreach ($validated as $ind => $value) {
            $json = json_decode(file_get_contents(resource_path("lang/$ind.json")));
            $json->$key = $value['content'];
            $isSuccess = file_put_contents(resource_path("lang/$ind.json"), json_encode($json, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        }

        if ($isSuccess) {
            $pages = collect(['image','layouts', 'profil.layouts', 'home', 'about', 'opportunity', "installer", "landing", "news", "actu", "info", "profil.home", "profil.company", "profil.document", "profil.profil_edit", "profil.demande_state", "profil.form"]);

            $page = $pages->where(function ($value) use ($key) {
                return Str::startsWith($key, $value);
            })->first();

            return redirect()->route("ContentPage", ['key' => $page])->with('success', "Texte modifié avec succès.");
        } else {
            return redirect()->back()->with('error', 'Erreur lors de la modification');
        }
    }


    public function imageSaveContent(Request $request, $key)
    {
        // Validation des fichiers téléchargés
        $validator = Validator::make($request->all(), [
            'en.content' => 'required|file|mimes:png,jpg,jpeg|max:2048',
            'fr.content' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        foreach (['en', 'fr'] as $lang) {
            if ($request->hasFile("$lang.content")) {
                $file = $request->file("$lang.content");
                $filename = $file->getClientOriginalName();
                $filePath = $file->storeAs('public/images', $filename);

                $storagePath = 'storage/' . str_replace('public/', '', $filePath);

                $jsonPath = resource_path("lang/$lang.json");
                $json = [];

                if (file_exists($jsonPath)) {
                    $json = json_decode(file_get_contents($jsonPath), true);
                }

                $json[$key] =  $storagePath;
                $isSuccess = file_put_contents($jsonPath, json_encode($json, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

                if (!$isSuccess) {
                    return redirect()->back()->with('error', 'Erreur lors de la modification');
                }
            }
        }

        return redirect()->route("ContentIndex")->with('success', "Image ajoutée avec succès.");
    }


    public function ContentPageEditGroup()
    {
        return view('Front.admin.content.edit-group');
    }

    public function getContentByTag(Request $request)
    {
        // if (auth()->user()->role->nom !== "admin") {
        //     return response()->json(["error" => "Unauthorized"], 401);
        // }
        $data = $request->all();
        $contents = [];

        foreach (['en', 'fr'] as $id) {
            $json = json_decode(file_get_contents(resource_path("lang/$id.json")), true);
            $contents[$id] = collect($json)->where(function ($value, $index) use ($data) {
                return $index === $data['tag'];
            })->first();
        }
        return response()->json($contents);
    }


    public function saveContentByTag(Request $request)
    {
        if(!array_key_exists($request->input('tag'), config("translate_rule"))){
            return response()->json(['errors' => ['tag' => "Identifiant inconnu"]], 400);
        }

        $max = config("translate_rule")[$request->input('tag')];

        $validator = Validator::make($request->all(), [
            'en' => "required|max:$max",
            'fr' => "required|max:$max",
        ]);

        // Valider les données
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Mettre à jour les fichiers JSON
        foreach (['en', 'fr'] as $lang) {
            try {
                $file = resource_path("lang/$lang.json");
                $json = json_decode(file_get_contents($file), true);
                $json[$request->input('tag')] = $request->input("$lang");
                file_put_contents($file, json_encode($json, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
            } catch (\Exception $e) {
                return response()->json(['errors' => 'Une erreur s\'est produite lors de l\'enregistrement du contenu'], 500);
            }
        }

        session()->flash('success', "Texte modifié avec succès.");
        return response()->json(['success' => true]);
    }

}
