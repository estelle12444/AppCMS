<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Eligibility;
use App\Models\Obligation;
use App\Models\TypeDemande;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(SectorSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(EligibilitySeeder::class);
        $this->call(DispositionSeeder::class);
        $this->call(ObligationSeeder::class);
        $this->call(TypeDemandeSeeder::class);

        $this->call(EligibilityTypeDemandeSeeder::class);
        $this->call(ObligationTypeDemandeSeeder::class);
        $this->call(DispositionTypeDemandeSeeder::class);


        $this->call(TypeDeDocumentSeeder::class);
        $this->call(TypeDocumentTypeDemandeSeeder::class);
        $this->call(BusinessPlanSeeder::class);



    }
}
