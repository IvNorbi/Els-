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

		DB::table('movie_role_people')->insert([
            'people_id' => 15,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Bruce Wayne/Batman",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 33,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Joker",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 34,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Harvey Dent",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 23,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Lucius Fox",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 16,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Alfred",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 22,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "James Gordon",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 35,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Rachel Dawes",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 36,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Salvatore Maroni",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 37,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Dr. Jonathan Crane",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 38,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Mike Engel",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 39,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Gambol",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 40,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Mayor",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 24,
            'movie_id' => 3,
            'role_id' => 2,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 24,
            'movie_id' => 3,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 26,
            'movie_id' => 3,
            'role_id' => 5,
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
            'movie_id' => 3,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 25,
            'movie_id' => 3,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 31,
            'movie_id' => 3,
            'role_id' => 7,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 42,
            'movie_id' => 3,
            'role_id' => 7,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 28,
            'movie_id' => 3,
            'role_id' => 3,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 29,
            'movie_id' => 3,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 30,
            'movie_id' => 3,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 32,
            'movie_id' => 3,
            'role_id' => 8,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 15,
            'movie_id' => 4,
            'role_id' => 1,
            'rolename' => "Bruce Wayne/Batman",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 20,
            'movie_id' => 4,
            'role_id' => 1,
            'rolename' => "Henri Ducard",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 23,
            'movie_id' => 4,
            'role_id' => 1,
            'rolename' => "Lucius Fox",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 16,
            'movie_id' => 4,
            'role_id' => 1,
            'rolename' => "Alfred",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 22,
            'movie_id' => 4,
            'role_id' => 1,
            'rolename' => "James Gordon",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 43,
            'movie_id' => 4,
            'role_id' => 1,
            'rolename' => "Rachel",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 44,
            'movie_id' => 4,
            'role_id' => 1,
            'rolename' => "Ra's Al Ghul",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 37,
            'movie_id' => 4,
            'role_id' => 1,
            'rolename' => "Dr. Jonathan Crane",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 45,
            'movie_id' => 4,
            'role_id' => 1,
            'rolename' => "Earle",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 46,
            'movie_id' => 4,
            'role_id' => 1,
            'rolename' => "Carmine Falcone",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 24,
            'movie_id' => 4,
            'role_id' => 2,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 26,
            'movie_id' => 4,
            'role_id' => 4,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 24,
            'movie_id' => 4,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 26,
            'movie_id' => 4,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 25,
            'movie_id' => 4,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 31,
            'movie_id' => 4,
            'role_id' => 7,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      

        DB::table('movie_role_people')->insert([
            'people_id' => 42,
            'movie_id' => 4,
            'role_id' => 7,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 28,
            'movie_id' => 4,
            'role_id' => 3,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 41,
            'movie_id' => 4,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 29,
            'movie_id' => 4,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 30,
            'movie_id' => 4,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 32,
            'movie_id' => 4,
            'role_id' => 8,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 47,
            'movie_id' => 5,
            'role_id' => 1,
            'rolename' => "Mai Zen'in",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 48,
            'movie_id' => 5,
            'role_id' => 1,
            'rolename' => "Miguel",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 49,
            'movie_id' => 5,
            'role_id' => 1,
            'rolename' => "Kasumi Miwa",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 50,
            'movie_id' => 5,
            'role_id' => 1,
            'rolename' => "Shoko Ieiri",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 51,
            'movie_id' => 5,
            'role_id' => 1,
            'rolename' => "Rika Orimoto",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 52,
            'movie_id' => 5,
            'role_id' => 1,
            'rolename' => "Raru",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 53,
            'movie_id' => 5,
            'role_id' => 1,
            'rolename' => "Takuma Ino",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 54,
            'movie_id' => 5,
            'role_id' => 1,
            'rolename' => "Noritoshi Kamo",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 55,
            'movie_id' => 5,
            'role_id' => 2,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 56,
            'movie_id' => 5,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 57,
            'movie_id' => 5,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 58,
            'movie_id' => 5,
            'role_id' => 7,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 59,
            'movie_id' => 5,
            'role_id' => 7,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);
      
        DB::table('movie_role_people')->insert([
            'people_id' => 60,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Zsákos Frodó",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 61,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Gandalf",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 62,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Aragorn",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 63,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Legolas",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 64,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Csavardi Samu",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 65,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Gimli",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 66,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Tuk Peregrin",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 67,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Boromir",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 68,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Szarumán",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 69,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Elrond",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 70,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Borbak Trufiádok",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 71,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Arwen",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 72,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Zsákos Bilbó",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 73,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Galadriel",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 74,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Haldir",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 75,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Celeborn",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 76,
            'movie_id' => 8,
            'role_id' => 1,
            'rolename' => "Gollam/Sméagol",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 77,
            'movie_id' => 8,
            'role_id' => 2,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 78,
            'movie_id' => 8,
            'role_id' => 4,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 79,
            'movie_id' => 8,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 80,
            'movie_id' => 8,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 77,
            'movie_id' => 8,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 81,
            'movie_id' => 8,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 82,
            'movie_id' => 8,
            'role_id' => 3,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 83,
            'movie_id' => 8,
            'role_id' => 7,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 84,
            'movie_id' => 8,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 85,
            'movie_id' => 8,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 77,
            'movie_id' => 8,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);


        DB::table('movie_role_people')->insert([
            'people_id' => 85,
            'movie_id' => 8,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 86,
            'movie_id' => 8,
            'role_id' => 8,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 60,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Zsákos Frodó",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 61,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Gandalf ",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 62,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Aragorn",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 64,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Csavardi Samu",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 63,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Legolas",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 73,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Galadriel",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 65,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Gimli",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 71,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Arwen",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 66,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Tuk Peregrin",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 70,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Borbak Trufiádok",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 87,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Éowyn",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 68,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Szarumán",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 69,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Elrond",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 88,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Kígyónyelvű",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 89,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Eomer",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 90,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Faramir",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 91,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Theoden",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 76,
            'movie_id' => 7,
            'role_id' => 1,
            'rolename' => "Gollam/Sméagol",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 77,
            'movie_id' => 7,
            'role_id' => 2,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 78,
            'movie_id' => 7,
            'role_id' => 4,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 77,
            'movie_id' => 7,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 80,
            'movie_id' => 7,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 81,
            'movie_id' => 7,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 79,
            'movie_id' => 7,
            'role_id' => 5,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 82,
            'movie_id' => 7,
            'role_id' => 3,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 83,
            'movie_id' => 7,
            'role_id' => 7,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 77,
            'movie_id' => 7,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 79,
            'movie_id' => 7,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 84,
            'movie_id' => 7,
            'role_id' => 6,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);

        DB::table('movie_role_people')->insert([
            'people_id' => 92,
            'movie_id' => 7,
            'role_id' => 8,
            'rolename' => "",
            'created_at' => now(),
            'updated_at' => now(),
		]);



    }
}
