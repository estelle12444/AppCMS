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
            'name' => 'SAH ANALYTICS',
            'legal_form' => 'DEVOOOZE',
            'RCCM' => 'RCCM000031',
            'taxpayer_account' => 'NC000934',
            'capital' => '5000000',
            'siege' => 'Abidjan',
            'phone' => '+2250789340956',
            'cellulaire' => '+225 21222409876',
            'email' => 'email@entreprise.com',
            'website_link' => 'http://www.exemple.com',
            'legal_agent' => 'Pascale',
            'fonction' => 'DEV',
            'activity' => 'Activité',
            'location_type' => 'new_society',
            'partner_id' => null, // ID du partenaire lié (s'il y en a un)
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        }
}
