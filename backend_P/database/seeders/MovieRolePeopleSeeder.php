<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieRolePeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_role_people')->insert([
            'people_id' => 1,
            'movie_id' => 1,
            'role_id' => 1,
            'rolename' => "Sanji",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

		DB::table('movie_role_people')->insert([
            'people_id' => 2,
            'movie_id' => 1,
            'role_id' => 1,
            'rolename' => "Monkey D. Luffy",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 3,
            'movie_id' => 1,
            'role_id' => 1,
            'rolename' => "Nami",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 4,
            'movie_id' => 1,
            'role_id' => 1,
            'rolename' => "Uta",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 5,
            'movie_id' => 1,
            'role_id' => 1,
            'rolename' => "Gordon",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 6,
            'movie_id' => 1,
            'role_id' => 1,
            'rolename' => "Usopp",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 7,
            'movie_id' => 1,
            'role_id' => 1,
            'rolename' => "Franky",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 8,
            'movie_id' => 1,
            'role_id' => 1,
            'rolename' => "Tony Tony Chopper",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 9,
            'movie_id' => 1,
            'role_id' => 1,
            'rolename' => "Roronora Zoro",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 10,
            'movie_id' => 1,
            'role_id' => 1,
            'rolename' => "Nico Robin",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 11,
            'movie_id' => 1,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 12,
            'movie_id' => 1,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 13,
            'movie_id' => 1,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 14,
            'movie_id' => 1,
            'role_id' => 2,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 15,
            'movie_id' => 2,
            'role_id' => 1,
            'rolename' => "Bruce Wayne/Batman",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 16,
            'movie_id' => 2,
            'role_id' => 1,
            'rolename' => "Alfred",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 17,
            'movie_id' => 2,
            'role_id' => 1,
            'rolename' => "Selina Kyle/Macskanő",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 18,
            'movie_id' => 2,
            'role_id' => 1,
            'rolename' => "Bane",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 19,
            'movie_id' => 2,
            'role_id' => 1,
            'rolename' => "John Blake",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 20,
            'movie_id' => 2,
            'role_id' => 1,
            'rolename' => "Ra's Al Ghul",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 21,
            'movie_id' => 2,
            'role_id' => 1,
            'rolename' => "Miranda Tate",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 22,
            'movie_id' => 2,
            'role_id' => 1,
            'rolename' => "Jim Gordon",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 23,
            'movie_id' => 2,
            'role_id' => 1,
            'rolename' => "Lucius Fox",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 24,
            'movie_id' => 2,
            'role_id' => 2,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 24,
            'movie_id' => 2,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('movie_role_people')->insert([
            'people_id' => 24,
            'movie_id' => 2,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);   

        DB::table('movie_role_people')->insert([
            'people_id' => 25,
            'movie_id' => 2,
            'role_id' => 4,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('movie_role_people')->insert([
            'people_id' => 26,
            'movie_id' => 2,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('movie_role_people')->insert([
            'people_id' => 27,
            'movie_id' => 2,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('movie_role_people')->insert([
            'people_id' => 28,
            'movie_id' => 2,
            'role_id' => 3,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('movie_role_people')->insert([
            'people_id' => 29,
            'movie_id' => 2,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('movie_role_people')->insert([
            'people_id' => 30,
            'movie_id' => 2,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('movie_role_people')->insert([
            'people_id' => 31,
            'movie_id' => 2,
            'role_id' => 7,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('movie_role_people')->insert([
            'people_id' => 32,
            'movie_id' => 2,
            'role_id' => 8,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
      
    }
}
