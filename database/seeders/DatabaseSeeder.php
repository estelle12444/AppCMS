<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $this->call([
            // SectorSeeder::class,
            PartnerSeeder::class,
            // RoleSeeder::class,
            // UserSeeder::class,
            // CompanySeeder::class,
            // EligibilitySeeder::class,
            // DispositionSeeder::class,
            // ObligationSeeder::class,
            // TypeDemandeSeeder::class,
            // EligibilityTypeDemandeSeeder::class,
            // ObligationTypeDemandeSeeder::class,
            // DispositionTypeDemandeSeeder::class,
            // TypeDeDocumentSeeder::class,
            // TypeDocumentTypeDemandeSeeder::class,
            // BusinessPlanSeeder::class
        ]);
    }
}
