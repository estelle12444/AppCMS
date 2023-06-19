<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Création du rôle "admin"
        Role::create([
            'nom' => 'admin',
        ]);

        // Création du rôle "user"
        Role::create([
            'nom' => 'user',
        ]);
    }
}
