<?php

namespace Database\Seeders;

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
        // Admin felhasználó létrehozása
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'ability' => 'admin,moderator,user',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Jelszó: password
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => "Moderator",
            'email' => "moderator@example.com",
            'ability' => 'moderator,user',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Jelszó: password
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // További felhasználók létrehozása
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'name' => "User $i",
                'email' => "user$i@example.com",
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Jelszó: password
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
