<?php

namespace Database\Seeders;

use App\Models\Activity;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdvantagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                [
                    'title' => 'Avantages fiscaux <br> et réglementaires',
                    'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.",
                    'image' => 'img/icon-index/Group 133.png',
                ],
                [
                    'title' => 'Avantages fiscaux <br> et douaniers',
                    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.',
                    'image' => 'img/icon-index/Group 136.png',
                ],
                [
                   'title' => 'Partenariats et <br>réseautages clés',
                    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.',
                    'image' => 'img/icon-index/Group 138.png',
                ],
                [
                   'title' => 'Expansions du <br> marché en cours',
                    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.',
                    'image' => 'img/icon-index/Group 132.png',
                ],

                [
                    'title' => "Main d'oeuvre de <br> qualité",
                     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.',
                     'image' => 'img/icon-index/Group 134.png',

                 ],
                 [
                    'title' => "Infrastructure de <br>pointe",
                     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.',
                     'image' => 'img/icon-index/Group 134.png',

                 ],

            ],
            [
                [
                    'title' => 'Fiscal advantages <br> and regulatory',
                    'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.",
                    'image' => 'img/icon-index/Group 133.png',
                ],
                [
                    'title' => 'Fiscal advantages <br> and customs officers',
                    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.',
                    'image' => 'img/icon-index/Group 136.png',
                ],
                [
                   'title' => 'Partnerships and <br>key networking',
                    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.',
                    'image' => 'img/icon-index/Group 138.png',
                ],
                [
                   'title' => 'Market expansion <br>underway',
                    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.',
                    'image' => 'img/icon-index/Group 132.png',
                ],
                
                [
                    'title' => 'Quality <br>workmanship',
                     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.',
                     'image' => 'img/icon-index/Group 134.png',

                 ],
                 [
                    'title' => 'point <br> Infrastructure',
                     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quaerat quae eum natus perspiciatis repellendus a optio eaque, velit officiis distinctio. Architecto accusantium quaerat vel eaque autem minima quia consequatur.',
                     'image' => 'img/icon-index/Group 134.png',

                 ],
            ]


        ];

        foreach ($data[0] as $index => $fr) {
            // Traitement pour la version française
            $storedImagePathFr = $this->storeImage($fr['image']);
            $fr['translate_code'] = 'fr';
            $fr['image'] = $storedImagePathFr;
            $fr['type'] = 'advantages';
            $parent = Activity::create($fr);

            // Traitement pour la version anglaise
            $en = $data[1][$index];
            $storedImagePathEn = $this->storeImage($en['image']);
            $en['translate_code'] = 'en';
            $en['image'] = $storedImagePathEn;
            $en['type'] = 'advantages';
            $en['parent_id'] = $parent->id;
            Activity::create($en);
        }
    }
    private function storeImage($image)
    {
        if (!empty($image) && File::exists(public_path($image))) {
            $uploadedFile = new UploadedFile(public_path($image), basename($image));
            $imageName = $uploadedFile->getClientOriginalName();
            $imagePath = Storage::putFileAs('public/Advantages', $uploadedFile, $imageName);
            return str_replace('public/', '', $imagePath);
        }
        return null;
    }
}
