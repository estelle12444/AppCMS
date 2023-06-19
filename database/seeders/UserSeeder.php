<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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

          // Création des administrateurs
          User::create([
              'nom' => 'Admin1',
              'prenom' => 'Admin1',
              'email' => 'admin1@example.com',
              'password' => Hash::make('password'),
              'telephone' => '0123456789',
              'adresse' => 'Adresse Admin1',
              'role_id' => $adminRole->id,
              'piece_identite'=>'passeport'
          ]);

          User::create([
              'nom' => 'Admin2',
              'prenom' => 'Admin2',
              'email' => 'admin2@example.com',
              'password' => Hash::make('password'),
              'telephone' => '9876543210',
              'adresse' => 'Adresse Admin2',
              'role_id' => $adminRole->id,
              'piece_identite'=>'carte_identite'
          ]);

          // Création des utilisateurs
          User::create([
              'nom' => 'User1',
              'prenom' => 'User1',
              'email' => 'user1@example.com',
              'password' => Hash::make('password'),
              'telephone' => '5555555555',
              'adresse' => 'Adresse User1',
              'role_id' => $userRole->id,
              'piece_identite'=>'passeport'
          ]);

          User::create([
              'nom' => 'User2',
              'prenom' => 'User2',
              'email' => 'user2@example.com',
              'password' => Hash::make('password'),
              'telephone' => '1111111111',
              'adresse' => 'Adresse User2',
              'role_id' => $userRole->id,
              'piece_identite'=>'carte_identite'
          ]);
    }
}
