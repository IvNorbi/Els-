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
      
      
    }
}
