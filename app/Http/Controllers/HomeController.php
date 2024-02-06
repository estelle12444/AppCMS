<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $avantages = [
            [
                'routeName' => 'avantage1',
                'imgPath' => 'img/icon-index/Group 133.png',
                'altText' => 'Logo Avantage 1',
                'translationKey' => 'home.fiscal_and_regulatory_advantages', // Assurez-vous que cette clé est définie dans vos fichiers de langues
            ],
            [
                'routeName' => 'avantage2',
                'imgPath' => 'img/icon-index/Group 136.png',
                'altText' => 'Logo Avantage 2',
                'translationKey' => 'home.customs_advantages', // Assurez-vous que cette clé est définie dans vos fichiers de langues
            ],
            [
                'routeName' => 'avantage3',
                'imgPath' => 'img/icon-index/Group 138.png',
                'altText' => 'Logo Avantage 2',
                'translationKey' => 'home.partneships', // Assurez-vous que cette clé est définie dans vos fichiers de langues
            ],
            [
                'routeName' => 'avantage4',
                'imgPath' => 'img/icon-index/Group 132.png',
                'altText' => 'Logo Avantage 4',
                'translationKey' => 'home.access_to_a_thriving_market', // Assurez-vous que cette clé est définie dans vos fichiers de langues
            ],
            [
                'routeName' => 'avantage5',
                'imgPath' => 'img/icon-index/Group 138.png',
                'altText' => 'Logo Avantage 5',
                'translationKey' => 'home.skilled_workforce', // Assurez-vous que cette clé est définie dans vos fichiers de langues
            ],
            [
                'routeName' => 'avantage6',
                'imgPath' => 'img/icon-index/Group 134.png',
                'altText' => 'Logo Avantage 6',
                'translationKey' => 'home.state_of_the_art_infrastructure', // Assurez-vous que cette clé est définie dans vos fichiers de langues
            ],


        ];
        return view('index',compact('avantages'));
    }

    public function avantages($query){
        return view('Front.pages.avantagesDetail',compact('query'));
    }


}
