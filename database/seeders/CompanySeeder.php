<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed the first company


        DB::table('companies')->insert([
            'name' => 'Nom de la société',
            'legal_form' => 'Forme juridique',
            'RCCM' => 'Numéro RCCM',
            'taxpayer_account' => 'Numéro de compte fiscal',
            'capital' => 'Capital social',
            'siege' => 'Siège social',
            'phone' => 'Numéro de téléphone',
            'cellulaire' => 'Numéro de téléphone cellulaire',
            'email' => 'email@entreprise.com',
            'website_link' => 'http://www.exemple.com',
            'legal_agent' => 'Agent légal',
            'fonction' => 'Fonction',
            'activity' => 'Activité',
            'location_type' => 'new_society',
            'partner_id' => null, // ID du partenaire lié (s'il y en a un)
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        }
}
