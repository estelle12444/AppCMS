<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\PartnerSector;
use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->dataProvider() as $key => $value) {
            if ($value['image'] != '') {
                $imagePath = Storage::putFile('public/partners', public_path('img/Partenaire/' . $value['image']));
                $partner = Partner::create([
                    'image' => str_replace("public/", "", $imagePath),
                    'title' => $key,
                    'content' => $value['content']
                ]);

                foreach ($value['sectors'] as $sector) {
                    PartnerSector::create([
                        'sector_id' => Sector::where('nom', $sector)->first()->id,
                        'partner_id' => $partner->id
                    ]);
                }
            }
        }
    }

    private function dataProvider(): array
    {
        return [
            'AFRIC POWER' => [
                'sectors' => [
                    "TIC", "TELECOM-ENERGIE"
                ],
                'content' => "Production de tableaux TGBT, électromécaniques et  d’automatismes.
                 Développement de projets « énergies alternatives » et montage   d’équipements de protection électriques.
                Plateforme d’assemblage shelter ou conteneur énergie et informatique (Data center) et d’une salle de recherche et développement.
                 Formations (automatisme, énergie). ",
                'image' => "afric_power.png"
            ],
            'AFRICURE PHARMACEUTICALS' => [
                'sectors' => [
                    "BIOTECH", "PHARMACEUTIQUE"
                ],
                'content' => "• Fabrication, conditionnement et distribution de produits pharmaceutiques ;
                • L’importation de produits, de matériels et d’équipements de laboratoire et d’analyse.",
                'image' => "africure.png"
            ],

            'ALINK WEST AFRICA' => [
                'sectors' => [
                    "TELECOM", "TIC"
                ],
                'content' => "Alink West Africa est un opérateur majeur dans les télécoms en Afrique subsaharienne. Elle a une expertise en matière de transmission de données, téléphonie IP et internet haut débit. Alink West Africa offre des solutions bâties autour de 3 pôles d’activités :
                - Intégration : SAP en cloud computing, sécurité informatique
                - Connectivité : solution VSAT, Boucle Locale radio, Fibre Optique (MPLS), réseaux hybrides.
                - Convergence IP : voix, IPBX, vidéoconférence  ",
                'image' => "alink.png"
            ],


            'ATLANTIC FUTURE TECHNOLOGY' => [
                'sectors' => [
                    "TIC", "ELECTRONIQUE"
                ],
                'content' => "• Assurance de Service de communications électroniques et de Mission relevant du service public et en particulier services des communications électroniques ;
                • Etablissement, développement et exploitation de tous réseaux ouverts au public de communication électroniques nécessaires à la fourniture de ces services et assurer leur interconnexion avec d’autres réseaux ouverts aux publics dans la limite des licences et autorisation obtenus ;",
                'image' => 'atlantic.png'
            ],
            'BIODIAGNOSTIC - DAS LABOR' => [
                'sectors' => [
                    "BIOTECH",
                ],
                'content' => "Biotech/ Production de tests biologiques ",
                'image' => "biodiagnostic.png"
            ],


            'CALL ME CI' => [
                'sectors' => [
                    "CALL CENTER", "TIC"
                ],
                'content' => " Télémarketing
                • Gestion de relations de clients à distance
                • Marketing direct
                • Conseil en marketing",
                'image' => 'call.png'
            ],
            'CATE ELEC' => [
                'sectors' => [
                    "TIC"
                ],
                'content' => "Intégration d’équipements Électricité, Électronique et Informatique
                a. Produits :  Cellules MT, Tableaux électriques
                b. Services :  Formation et Ingénierie automatismes ",
                'image' => "cate_elec.png"
            ],


            'CEE-NET TECHNOLOGIES' => [
                'sectors' => [
                    "TIC"
                ],
                'content' => "Intégration de solutions numériques et télécom ;
                - Réseaux Entreprises WAN/VPN ;
                - Solutions internet VSAT ;
                - Développement Web ;
                - Intégration de sécurité ;
                - Prestations de services ;",
                'image' => "cee_net.png"
            ],
            'CERCO CI' => [
                'sectors' => [
                    "FONDS D'INVESTISSEMENT"
                ],
                'content' => "Installation d'usines d’assemblage d’ordinateurs portables, de tablettes, Smartphones et de production d’application mobiles au Benin/Burkina/Côte d’Ivoire, éducation formation et incubation d'entreprises.",
                'image' => 'cerco_ci.png'
            ],


            "COMPAGNIE FINANCIERE D'INVESTISSEMENT (CFI) CI" => [
                'sectors' => [
                    "COMPAGNIE D'INVESTISSEMENT"
                ],
                'content' => "Appui aux investissements sur la ZBTIC ",
                'image' => ""
            ],


            "COMPAGNIE IVOIRIENNE D'ETUDES ET DE REALISATIONS EN INFORMATIQUE ET AUTOMATISME (CIERIA)" => [
                'sectors' => [
                    "IT"
                ],
                'content' => "Logiciel, cybersécurité, matériel informatique",
                'image' => 'cieria.png'
            ],


            "CORAIL SOLUTIONS" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Déploiement de solutions ERP ",
                'image' => "corail.png"
            ],


            "COTE D'IVOIRE DATA" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Déploiement d'internet haut débit et Fibre optique",
                'image' => 'data.png'
            ],


            "DATANALYTIX" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Déploiement de solutions de business intelligence ",
                'image' => "datanalytix.png"
            ],


            'DIGITAL AFRIQUE MOBILES ' => [
                'sectors' => [
                    "TIC", "TELECOM"
                ],
                'content' => "DAM est spécialisé dans les nouvelles technologies de l'Information et de la communication. Ses actions principales sont axées sur :
                    • La conception, la fabrication et l'assemblage de produits Informatiques ; Télécoms et Réseaux ; Audiovisuels ;
                    • La production de contenus audiovisuels ; multimédia ;
                    • La conception et l'édition de logiciels & progiciels ;
                    • Les activités de recherche dans le domaine des Nouvelles Technologies de l'Information et de la Communication(NTIC)
                    • Les activités de toutes sortes liés aux NTIC.",
                'image' => 'digital_afrique.png'
            ],


            "DIP SYSTÈME AFRIQUE" => [
                'sectors' => [
                    "TIC", "ARCHIVAGE DES DONNEES"
                ],
                'content' => "Acteur dédié au monde de la GED (Gestion Electronique de Documents, de  l’Archivage Electronique (Scanning Center, dématérialisation) et des services connexes (hébergement, Saas, prestations de service, …).",
                'image' => "dip.png"
            ],

            "ECOBAND NETWORKS COTE D'IVOIRE" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Fourniture d'accès d'interconnexions de sites",
                'image' => "ecoband.png"
            ],

            "EDIATTAH CONSEILS & SOLUTIONS" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => "Créée depuis Octobre 2007, EDIATTAH Conseils & Solutions en abrégé « EDIATTAH » est une Société à Responsabilité Limitée (SARL) de droit ivoirien spécialisée dans les services et solutions télécoms à valeur ajoutée notamment, les Solutions de communication et de notification par SMS, l’Agrégation de Solutions de paiements par monnaie électronique pour la Collecte de paiements marchands via Mobile Money et Cartes Bancaires, le Développement de solutions de digitalisation de processus métiers pour les administrations publiques, le Développement de Plateformes Télécoms sous forme de Services Managés pour les Opérateurs de téléphonie mobile. … Depuis 2016, EDIATTAH dispose d’une Autorisation Générale de Revente de Services de téléphonie Voix, SMS et Données, délivrée par l’ARTCI qui l’a renouvelée en 2021. Cette autorisation fait de EDIATTAH, l’une des premières sinon, la première structure après les opérateurs de téléphonie mobile à avoir obtenu une telle Autorisation. Grâce à son expertises pointue en matière de développement de gros systèmes, de digitalisation de processus métiers et de développement de solutions de messagerie mobile, EDIATTAH compte aujourd’hui de solides références auprès des opérateurs de téléphonie mobile, de banques et administrations publiques.",
                'image' => "ediattah.png"
            ],

            "EUROPA DUBBING WEST  AFRICA" => [
                'sectors' => [
                    "AUDIO VISUEL", "DOUBLAGE"
                ],
                'content' => "• Mise à disposition de studios audiovisuels ;
                • Production et distribution de contenus audiovisuels ;
                • Laboratoire de post production audio et vidéo ;
                • Restauration et conservation de patrimoine audiovisuel ;
                • Formation dans le secteur des TIC et audiovisuel ;
                • Casting & booking ;
                • Toutes activités de caractère événementiel.",
                'image' => "europa.png"
            ],
            "EVOTECH" => [
                'sectors' => [
                    "TIC", "ARCHIVAGE DES DONNEES"
                ],
                'content' => "Sauvegarde de données électroniques avec la solution : EVOTECH Backup System (E.B.S. Tout cela automatiquement, sans aucune intervention humaine.",
                'image' => "evotech.png"
            ],

            "FHL TELECOM &ENGINEERING" => [
                'sectors' => [
                    "TIC", "TELECOM"
                ],
                'content' => "FHL Telecom & Engineering (FTE ) met à la disposition de sa clientèle, sa plate forme satellitaire, son hub, ses infrastructures et son organisation afin de leur offrir un service d'accès bidirectionnel sur large bande par satellite. Son système VSAT permet de mettre les atouts du satellite à la portée des entreprises publiques et privées en leur garantissant le meilleur service et une maitrise de la chaine de communication de bout en bout.",
                'image' => ""
            ],

            "GROLLEAU EUROPHANE AFRIQUE" => [
                'sectors' => [
                    "TIC", "TELECOM"
                ],
                'content' => "Conception et fabrication de baies d’énergie, d’armoires télécom et de bornes de recharge pour véhicules électriques.",
                'image' => "grolleau.png"
            ],
            "GROUPEMENT ORANGE SERVICES" => [
                'sectors' => [
                    "TIC", "CALL CENTER"
                ],
                'content' => "GOS est une entité de mutualisation de la zone Orange Afrique Moyen-Orient Asie dont les missions sont de booster le business, d’améliorer la qualité de service et de réduire les dépenses d’investissement et d’exploitation grâce à la mutualisation des ressources. ",
                'image' => "GOS.png"
            ],
            "GSM.COM (CASYS TECHNOLOGIES)" => [
                'sectors' => [
                    "TIC", "MONETIQUE"
                ],
                'content' => "La Générale des Systèmes Monétiques (Gsm.com) est opérateur :
                • auprès des Pétroliers pour la mise en oeuvre de leur Cartes Essence, de leur télémétrie de cuve,  avec la plateforme CaSys carburant
                "
                ,
                'image' => "GSM.png"
            ],
            "IIT (Institut ivoirien de technologies)" => [
                'sectors' => [
                    "TIC", "FORMATION IT"
                ],
                'content' => "Formation initiale et formation continue dans les domaines suivants :
                    - Les réseaux informatiques et de télécommunication ; les systèmes d’information ; l’internet et la cyber sécurité ;
                    - Les systèmes de gestion de bases de données ;
                    - Le développement de logiciels et applications informatiques ;
                    - L’intelligence artificielle et le big data ;
                    - Les enseignements en Biotechnologies et Administration des Entreprises démarreront dans un second temps.",
                'image' => "IIT.png"
            ],
            "ITITUDE" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Sécurité informatique",
                'image' => "ITITUDE.png"
            ]
        ];
    }
}
