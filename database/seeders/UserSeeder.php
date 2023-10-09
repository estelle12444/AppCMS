<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Récupération des rôles
          $adminRole = Role::where('nom', 'admin')->first();
          $userRole = Role::where('nom', 'user')->first();

          DB::table('users')->insert([
            'name' => 'Admin2',
            'email' => 'admin2@example.com',
            'password' => Hash::make('password'),
            'status' => true, // true pour actif, false pour inactif
            'role_id' => $adminRole->id, // ID du rôle de l'utilisateur
            'company_id' => 1, // ID de la société liée
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'BANDAMA',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'),
            'status' => true, // true pour actif, false pour inactif
            'role_id' => $userRole->id, // ID du rôle de l'utilisateur
            'company_id' => 1, // ID de la société liée
            'created_at' => now(),
            'updated_at' => now(),
        ]);






    }
}
