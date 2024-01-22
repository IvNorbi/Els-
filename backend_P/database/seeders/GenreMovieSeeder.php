<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genre_movie')->insert([
            'genre_id' => 1,
            'movie_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 2,
            'movie_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 16,
            'movie_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 1,
            'movie_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 30,
            'movie_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 32,
            'movie_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 1,
            'movie_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 30,
            'movie_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 32,
            'movie_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 1,
            'movie_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 30,
            'movie_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 32,
            'movie_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 1,
            'movie_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 2,
            'movie_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => 11,
            'movie_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => ,
            'movie_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => ,
            'movie_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre_movie')->insert([
            'genre_id' => ,
            'movie_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
