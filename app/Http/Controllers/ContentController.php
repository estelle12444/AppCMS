<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ContentController extends Controller
{
    private function data(){
        return [
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
                    'profil'=>'Adminstration Client',
                    'profil.layouts' =>"Bar de navigation",
                    'profil.layouts.requests' =>'Demandes effectuées',
                    'profil.layouts.documents' => 'Documents founirs',
                    'profil.home'=>'Accueil',
                    'profil.company'=>'Données Entreprises',
                    'profil.company.form' => ' Champs du Formulaire',
                    'profil.document_edit' => 'Modification du document',
                    'profil.profil_edit' => 'Modifications des informations',
                    'profil.demande_state' => 'Etat de la demande'
                ]
            ],
            [
                'title' => 'Accueil/Home',
                'id' => 'home',
                'items' => [
                    'home' => ' Tous le contenu Accueil/Home',
                    'home.carousel.left'=>"Texte introductif",
                    'home.advantages'=>'Les titres des avantages',
                    'home.presentation'=>'Contenu de la presentation',
                    'home.presentation2'=>'Contenu des autres avantages',

                ]
            ],
            [
                'title' => 'A propos/About us',
                'id' => 'about',
                'items' => [
                    'about' => 'Tous',
                    'about.vision'=>'Notre vision',
                    'about.director'=>' Mot du directeur',
                    'about.mission'=>'Notre mission',
                    'about.value'=>'Nos Valeurs',
                ]
            ],
            [
                'title' => 'Opportunités / Opportunity',
                'id' => 'opportunity',
                'items' => [
                    'opportunity' => 'Tous',
                    'opportunity.zone'=>'Domaines d\'activités',
                    'opportunity.projects'=>'Nos projets',
                    'opportunity.projects.future_projects'=>'Nos futurs projets',
                    'opportunity.section'=>'Autres Opportunités',

                ]
            ],
            [
                'title' => 'S\'implanter / Installer',
                'id' => 'installer',
                'items' => [
                    'installer' => 'Tous voir',
                    'installer.carousel'=>' Le texte introductif',
                    'installer.section.eligibility'=>'Les différents eligibilités',
                    'installer.section.eligibility.prerequisites'=>'Les prérequies de nos éligibilités',
                    'installer.section.eligibility.activities'=>'Nos activités éligibles',
                    'installer.section.eligibility.industrial'=>'Nos activités éligibles industrielles',
                    'installer.section.value_added'=>'Notre valeur ajoutée',
                    'installer.join_us'=>'Nous rejoindre'
                ]
            ],
            [
                'title' => 'Annonces',
                'id' => 'new',
                'items' => [
                    'news' => 'Annonce/ News',
                    'news.job'=>'Offres en Génerales',
                    'news.job.no'=>'Offres',
                    'news.job.no.result'=>'En cas de non-resultat',
                ]
            ],
            [
                'title' => 'Détail de l\'offre',
                'id' => 'info',
                'items' => [
                    'info' => 'Détail de l\'annonce',
                    'info.job'=>'Détail de l\'offre',
                ]
            ],
            [
                'title' => 'Actualités',
                'id' => 'actu',
                'items' => [
                    'actu'=>'Gallérie',
                    'actu.event'=>'Evénements',
                ]
            ],
            [
                'title' => 'Site: page d\'natterrissage',
                'id' => 'landing',
                'items' => [
                    'landing' => 'Tous Savoir',
                    'landing.innovation_village'=>'Village de l\'innovation',
                    'landing.agreement_application'=>'Documents d\'agrément',
                    'landing.website_browsing'=>'lien du naviguation',

                ]
            ]
        ];
    }

    public function contentIndex(){
        $sections = $this->data();

        return view('Front.admin.content.index',compact('sections'));
    }

    public function contentPage($key){
        $contents = [];
        $title = '';

        foreach (['fr', 'en'] as $id) {
            $json = json_decode(file_get_contents(resource_path("lang/$id.json")), true);
            $contents[$id] = collect($json)->where(function($value, $index) use($key){
                return Str::startsWith($index, $key);
            })->toArray();
        }

        if(count($contents['fr']) > 0){
            $titles =  array_merge(...array_map(fn($section) => $section['items'], $this->data()));
            $title = $titles[$key];
        }

        return view('Front.admin.content.page', compact('contents','key', 'title'));
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
            foreach ($request->all() as $key => $field) {
                if(in_array($key, ['en', 'fr'])){
                    $value = strip_tags($field['content']);
                    //dd(strlen($field['content']), $field['content'], strlen($value), $value, $max);
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

    public function ContentPageEditGroup(){
        return view('Front.admin.content.edit-group');
    }

}
