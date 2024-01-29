<?php

namespace Database\Seeders;

use App\Models\Activity;
use Database\Seeders\Trait\SeederTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::create([
            'title' => "SELECTION D’UN CONSULTANT (FIRME) POUR LA REALISATION DE L’EXPERTISE TECHNIQUE DE L’HOTEL D’ENTREPRISES TIC DE LA ZBTIC",
            'content'=>"",
            'resume'=>"",
            'image'=>'',
            'limit_date'=>'',
            'type'=>'',
            'translate_code'=>''
        ]);

    }
}
