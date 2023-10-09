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
                'image' => "afric_power.fw.png"
            ],
            'AFRICURE PHARMACEUTICALS' => [
                'sectors' => [
                    "BIOTECH", "PHARMACEUTIQUE"
                ],
                'content' => "• Fabrication, conditionnement et distribution de produits pharmaceutiques ;
                • L’importation de produits, de matériels et d’équipements de laboratoire et d’analyse.",
                'image' => "africture.fw.png"
            ],

            'ALINK WEST AFRICA' => [
                'sectors' => [
                    "TELECOM", "TIC"
                ],
                'content' => "Alink West Africa est un opérateur majeur dans les télécoms en Afrique subsaharienne. Elle a une expertise en matière de transmission de données, téléphonie IP et internet haut débit. Alink West Africa offre des solutions bâties autour de 3 pôles d’activités :
                - Intégration : SAP en cloud computing, sécurité informatique
                - Connectivité : solution VSAT, Boucle Locale radio, Fibre Optique (MPLS), réseaux hybrides.
                - Convergence IP : voix, IPBX, vidéoconférence  ",
                'image' => "alink.fw.png"
            ],


            'ATLANTIC FUTURE TECHNOLOGY' => [
                'sectors' => [
                    "TIC", "ELECTRONIQUE"
                ],
                'content' => "• Assurance de Service de communications électroniques et de Mission relevant du service public et en particulier services des communications électroniques ;
                • Etablissement, développement et exploitation de tous réseaux ouverts au public de communication électroniques nécessaires à la fourniture de ces services et assurer leur interconnexion avec d’autres réseaux ouverts aux publics dans la limite des licences et autorisation obtenus ;",
                'image' => 'atlantic.fw.png'
            ],
            'BIODIAGNOSTIC - DAS LABOR' => [
                'sectors' => [
                    "BIOTECH",
                ],
                'content' => "Biotech/ Production de tests biologiques ",
                'image' => "biodiagnostic.fw.png"
            ],


            'CALL ME CI' => [
                'sectors' => [
                    "CALL CENTER", "TIC"
                ],
                'content' => " Télémarketing
                • Gestion de relations de clients à distance
                • Marketing direct
                • Conseil en marketing",
                'image' => 'call.fw.png'
            ],
            'CATE ELEC' => [
                'sectors' => [
                    "TIC"
                ],
                'content' => "Intégration d’équipements Électricité, Électronique et Informatique
                a. Produits :  Cellules MT, Tableaux électriques
                b. Services :  Formation et Ingénierie automatismes ",
                'image' => "cate_elec.fw.png"
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
                'image' => "cee_net.fw.png"
            ],
            'CERCO CI' => [
                'sectors' => [
                    "FONDS D'INVESTISSEMENT"
                ],
                'content' => "Installation d'usines d’assemblage d’ordinateurs portables, de tablettes, Smartphones et de production d’application mobiles au Benin/Burkina/Côte d’Ivoire, éducation formation et incubation d'entreprises.",
                'image' => 'cerco_ci.fw.png'
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
                'image' => 'cieria.fw.png'
            ],


            "CORAIL SOLUTIONS" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Déploiement de solutions ERP ",
                'image' => "corail.fw.png"
            ],


            "COTE D'IVOIRE DATA" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Déploiement d'internet haut débit et Fibre optique",
                'image' => 'data.fw.png'
            ],


            "DATANALYTIX" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Déploiement de solutions de business intelligence ",
                'image' => "datanalytix.fw.png"
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
                'image' => 'digital_afrique.fw.png'
            ],


            "DIP SYSTÈME AFRIQUE" => [
                'sectors' => [
                    "TIC", "ARCHIVAGE DES DONNEES"
                ],
                'content' => "Acteur dédié au monde de la GED (Gestion Electronique de Documents, de  l’Archivage Electronique (Scanning Center, dématérialisation) et des services connexes (hébergement, Saas, prestations de service, …).",
                'image' => "dip.fw.png"
            ],

            "ECOBAND NETWORKS COTE D'IVOIRE" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Fourniture d'accès d'interconnexions de sites",
                'image' => "ecoband.fw.png"
            ],

            "EDIATTAH CONSEILS & SOLUTIONS" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => "Créée depuis Octobre 2007, EDIATTAH Conseils & Solutions en abrégé « EDIATTAH » est une Société à Responsabilité Limitée (SARL) de droit ivoirien spécialisée dans les services et solutions télécoms à valeur ajoutée notamment, les Solutions de communication et de notification par SMS, l’Agrégation de Solutions de paiements par monnaie électronique pour la Collecte de paiements marchands via Mobile Money et Cartes Bancaires, le Développement de solutions de digitalisation de processus métiers pour les administrations publiques, le Développement de Plateformes Télécoms sous forme de Services Managés pour les Opérateurs de téléphonie mobile. … Depuis 2016, EDIATTAH dispose d’une Autorisation Générale de Revente de Services de téléphonie Voix, SMS et Données, délivrée par l’ARTCI qui l’a renouvelée en 2021. Cette autorisation fait de EDIATTAH, l’une des premières sinon, la première structure après les opérateurs de téléphonie mobile à avoir obtenu une telle Autorisation. Grâce à son expertises pointue en matière de développement de gros systèmes, de digitalisation de processus métiers et de développement de solutions de messagerie mobile, EDIATTAH compte aujourd’hui de solides références auprès des opérateurs de téléphonie mobile, de banques et administrations publiques.",
                'image' => "ediattah.fw.png"
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
                'image' => "europa.fw.png"
            ],
            "EVOTECH" => [
                'sectors' => [
                    "TIC", "ARCHIVAGE DES DONNEES"
                ],
                'content' => "Sauvegarde de données électroniques avec la solution : EVOTECH Backup System (E.B.S. Tout cela automatiquement, sans aucune intervention humaine.",
                'image' => "evotech.fw.png"
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
                'image' => "grolleau.fw.png"
            ],
            "GROUPEMENT ORANGE SERVICES" => [
                'sectors' => [
                    "TIC", "CALL CENTER"
                ],
                'content' => "GOS est une entité de mutualisation de la zone Orange Afrique Moyen-Orient Asie dont les missions sont de booster le business, d’améliorer la qualité de service et de réduire les dépenses d’investissement et d’exploitation grâce à la mutualisation des ressources. ",
                'image' => "GOS.fw.png"
            ],
            "GSM.COM (CASYS TECHNOLOGIES)" => [
                'sectors' => [
                    "TIC", "MONETIQUE"
                ],
                'content' => "La Générale des Systèmes Monétiques (Gsm.com) est opérateur :
                • auprès des Pétroliers pour la mise en oeuvre de leur Cartes Essence, de leur télémétrie de cuve,  avec la plateforme CaSys carburant
                "
                ,
                'image' => "GSM.fw.png"
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
                'image' => "IIT.fw.png"
            ],
            "ITITUDE" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Sécurité informatique",
                'image' => "ITITUDE.fw.png"
            ],


        // jour 2

            "IXPERTA" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " Déploiement de support informatique",
                'image' => "IXPERTA.fw.png"
            ],

            "LOGIMATIQUE ELECTRONIQUE ET SECURITE " => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Electronique et sécurité",
                'image' => "LOGIMATIQUE.fw.png"
            ],

            "MAINONE" => [
                'sectors' => [
                    "TIC","DATA CENTER"
                ],
                'content' => " Leader en fourniture de services de télécommunication novateurs et de solutions de réseau des affaires en Afrique occidentale. Depuis son lancement en 2010, MainOne a développé une solide réputation de services fortement fiables pour devenir le fournisseur préféré de services Internet de gros opérateurs de télécommunication majeurs, des fournisseurs d'accès Internet, des agences gouvernementales, de grandes entreprises et des institutions éducatives en Afrique occidentale.
                L’activité principale consistera en la fourniture de capacité Internet en gros (IP Transit & IPLC) aux opérateurs Télécoms et ISP.",
                'image' => "mainone.fw.png"
            ],


            "MAPACI " => [
                'sectors' => [
                    "BIOTECHNOLOGIE"
                ],
                'content' => " Transformation de fruits et légumes tropicaux",
                'image' => "mapaci.fw.png"
            ],


            "MEDIMAGE MEDICAL DEVICES" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " Distribution, Négoce (importation/exportation) et Maintenance de matériel médical & Formation",
                'image' => "ITITUDE.fw.png"
            ],

            "MED-PROTEX PRODUCTION" => [
                'sectors' => [
                    "MEDICAL","BIOTECH"
                ],
                'content' => " Production de matériel sanitaire",
                'image' => "med-protex.fw.png"
            ],

            "MY BILL BOX" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => "IT - Développepent d'applications informatiques",
                'image' => "billbox.fw.png"
            ],

            "NEW DIGITAL AFRICA BUSINESS SOLUTIONS" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " Sous-holding de NDA",
                'image' => ""
            ],
            "NEW DIGITAL AFRICA (NDA) " => [
                'sectors' => [
                    "TIC","INFORMATIQUE"
                ],
                'content' => " IT - Conception des systèmes informatiques et investissement  Holding de sous holdings et de filiales",
                'image' => "nda.fw.png"
            ],

            "OPENVIEW" => [
                'sectors' => [
                    "COMPAGNIE D'INVESTISSEMENT"
                ],
                'content' => " Sous holding de filiales",
                'image' => "openview.fw.png"
            ],

            "PANELYS" => [
                'sectors' => [
                    "TIC","BIOTECH"
                ],
                'content' => "Entreprise d’inclusion financière digitale visant à régler le problème de la précarité des femmes, des jeunes et des acteurs du secteur informel via l’application SMS et Mobile Panelys ",
                'image' => "panelys.fw.png"
            ],

            "PHARMANOVA CI" => [
                'sectors' => [
                    "BIOTECH","FINTECH"
                ],
                'content' => " • Fabrication de médicaments à usage humain ;
                • Représentation, Promotion et Commercialisation de produits pharmaceutiques et dispositifs médicaux;
                • Laboratoire de recherche et développement en  biotechnologie
                ",
                'image' => "pharmanova.fw.png"
            ],
            "PY TECHNOLOGIES" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " PY TECHNOLOGIES spécialisée dans l’ingénierie logicielle et dans la conception de solutions
                informatiques intégrées. Elle est le résultat de plusieurs années de réflexion et de travaux
                préparatoires.",
                'image' => "py_technologies.fw.png"
            ]
            ,
            "RAXIO" => [
                'sectors' => [
                    "TIC","DATA CENTER"
                ],
                'content' => " activité de Data Center (hebergement de salle serveurs) et fourniture de capacité Internet.",
                'image' => "raxio.fw.png"
            ]
            ,
            "RIGHTCOM CI" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => "Mise en place de logiciel d’entreprises qui permet de créer, de diffuser et de mesurer les expériences que vous offrez à vos clients, vos employés, vos partenaires ou tout autre personne quel que soit votre secteur d’activité par l’élaboration de certains logiciels tels que :
                     RIGHT Q : Application intelligente de gestion dynamique de file d’attente pour hall d’accueil d’agences;",
                'image' => "rightcom_ci.fw.png"
            ]
            ,
            "SAH ANALYTICS INTERNATIONAL " => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " Analyse de données, traitement big data, intelligence Artificielle",
                'image' => "sah_analytics.fw.png"
            ]
            ,
            "SAIPH IVOIRE" => [
                'sectors' => [
                    "BIOTECH","PHARMACEUTIQUE"
                ],
                'content' => " Fabrication, conditionnement, distribution ainsi que promotion de médicaments à usage humain;
                - La construction, l’équipement et l’exploitation d’une unité de production des produits à usage pharmaceutiques et cosmétiques à usage humain et vétérinaire et de tous produits de base ou annexes de réactifs ;
                - L’achat, la vente, l’importation, l’exportation de tous ces produits,
                - La promotion médicale des produits y afférents.… ",
                'image' => "saiph_ivoire.fw.png"
            ]
            ,
            "SATEL" => [
                'sectors' => [
                    "TIC","TELECOM-ENERGIE"
                ],
                'content' => " • Conception et assemblages des composants électroniques ;
                • Montage d’automates et d’armoires électroniques ;
                • Etude et réalisations de projets d’éclairage ;
                • Distribution des produits d’éclairage ; Formation ; Conseil ;
                • Produits et services connexes.",
                'image' => "satel.fw.png"
            ]
            ,
            "SCTE" => [
                'sectors' => [
                    "TIC","TELECOM-ENERGIE"
                ],
                'content' => " • Montage et câblage d’équipements électriques et/ou pneumatiques dans coffrets, armoires, châssis, baies et tout type d’enveloppes et de schelters, montages et câblages d’équipements  électriques et/ou pneumatiques dans schelters en basse tension, moyenne tension, courant fort et/ou courant faible.
                • Tout matériel ou système de process d’automatisme, de supervision, d’instrumentation, d’entrainement et matériels en réseaux informatiques ;
                • Programmation et essais des composants électriques et d’automatismes.",
                'image' => "scte.fw.png"
            ]
            ,
            "SMART SENSORS AFRICA (S2A)" => [
                'sectors' => [
                    "TIC","OBJETS CONNECTES"
                ],
                'content' => "IT -Objets connectés",
                'image' => "s2a.fw.png"
            ],
            "LIFE TV PRODUCTION" => [
                'sectors' => [
                    "TIC","AUDIO VISUEL"
                ],
                'content' => " Production audiovisuelle",
                'image' => "lifetv.fw.png"
            ],
            "SUPERNET TECHNOLOGIES" => [
                'sectors' => [
                    "TIC","TELECOM"
                ],
                'content' => " Intervention dans les Télécoms et des Services à valeur ajoutée au profit des institutions financières, des opérateurs télécoms et des administrations fiscales.
                Supernet Technologies est le partenaire stratégique et technologique du GIM-UEMOA en matière de Mobile Banking, et plus généralement de l’écosystème Mobile Financial Services (MFS) de l’UEMOA. ",
                'image' => "supernet.fw.png"
            ],
            "TALENTYS SC-CI" => [
                'sectors' => [
                    "TIC","SECURITE"
                ],
                'content' => ",Sécurité de l’information
                , Infrastructure et fourniture d’application
                , Communication unifiée et collaboration
                , Audit sécurité informatique;",
                'image' => "talentycs.fw.png"
            ],
            "TECHMEDIA INTERNATIONAL" => [
                'sectors' => [
                    "TIC","FORMATION"
                ],
                'content' => " IT - Formation  Sécurité informatique",
                'image' => "techmedia.fw.png"
            ],
            "TECHNOLOGY INNOVATION REVOLUTIONNER (TIR)" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " TIR est une entreprise privée du digital qui offre une palette de services sur mesure à des firmes exerçant dans divers domaines d'activités, basées en côte d'ivoire ou à l'exterieur.
                TIR utilise des technologies innovantes et prime dans des domaines tels que
                l'Ingénierie logicielle du cloud et microservices,
                l'Ingénierie de la cybersécurité,
                l'Ingénierie des infrastructures cloud et
                l'Ingénierie du développement d’application mobile, web et UX.",
                'image' => "tir.fw.png"
            ],

            "WEBLOGY OFFSHORE" => [
                'sectors' => [
                    "TIC","PRESSE EN LIGNE"
                ],
                'content' => " Developpement Web - Presse en ligne - paiement mobile - inclusion financiere",
                'image' => "weblogy.fw.png"
            ],
            "WEST AFRICA DATABRIDGE" => [
                'sectors' => [],
                'content' => " ",
                'image' => "west_africa.fw.png"
            ],
            "AHOKO" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " ATECOMCI INTER est spécialisée dans la télécommunication et la construction métallique. Ainsi elle met à la disposition de ses clients les services suivants :
                •Technologie informatique et télécommunication :
                • Vente de matériels informatiques et bureautiques (accessoires, matériels de sécurité, télécommunication) ;
                • Installation de réseaux informatiques et télécom (câblage et configuration) ;
                • Maintenance informatique ;
                • Dépannage de réseaux informatiques et télécom ;
                • Montage informatique et équipement ;
                • Création et gestion de sites internet ;
                • Communication sur objets (plaquette publicitaire, brochure commerciale, papier entête, affiche publicitaire, faire-part, carte de visite, banderole, enseigne, kakemono (roll up), calendrier, flyers, dépliant, etc…) ;
                • Conseil, assistance et formation.

                 Gros œuvres :
                • Montage équipements informatique ;
                • Travaux bâtiments ;
                • Construction métallique (réhabilitation et aménagement, charpente métallique, grille et barrière extensible, hangar métallique, rideau métallique, porte métallique blindée, construction aluminium, mobilier et artisanat en fer forgé).
                ",
                'image' => "ahoko.fw.png"
            ],
            "INVESTIV Cote d'Ivoire" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Montage de drones et de solutions informatiquesGestion de plantations et de projets agricoles : Offre d’une solution intégrée et innovante destinée aux producteurs agricoles afin de les aider à être plus précis et plus efficaces tout en optimisant l’utilisation des intrants",
                'image' => "investiv.fw.png"
            ]
            ,
            "SPA ENTERPRISE" => [
                'sectors' => [
                    "TIC"
                ],
                'content' => " IT - Montage de drones et de solutions informatiquesGestion de plantations et de projets agricoles : Offre d’une solution intégrée et innovante destinée aux producteurs agricoles afin de les aider à être plus précis et plus efficaces tout en optimisant l’utilisation des intrantsassembalage véhicules électrique, Fintech, e-Commerce, incubation",
                'image' => "spa.fw.png"
            ]

            ,
            "WARIPARK" => [
                'sectors' => [
                    "TIC","INCUBATEUR"
                ],
                'content' => " Intégrateur de l'Ecosystème digital/ Management d'incubateurs et de Tech Hubs",
                'image' => "waripark.fw.png"
            ]
        ];
    }
}
