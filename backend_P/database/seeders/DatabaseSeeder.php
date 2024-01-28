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
         $this->call([
             UserSeeder::class,
             RoleSeeder::class,
             GenreSeeder::class,
             PeopleSeeder::class,
             MovieSeeder::class,
             CommentSeeder::class,
             CalculateAverageRating::class, // Itt hívd meg az új parancsot a CommentSeeder után
             MovieRolePeopleSeeder::class,
             GenreMovieSeeder::class,
         ]);
     


    // public function run(): void
    // {
    //     $this->call(
    //         [
    //             UserSeeder::class,
    //             RoleSeeder::class,  
    //             MovieSeeder::class,
    //             GenreSeeder::class,
    //             PeopleSeeder::class,
    //             CommentSeeder::class,
    //             MovieRolePeopleSeeder::class,
    //             GenreMovieSeeder::class
    //         ]
    //     );

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
