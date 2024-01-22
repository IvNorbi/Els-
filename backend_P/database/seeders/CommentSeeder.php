<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Movie;
use App\Models\User;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Vegyük fel néhány kommentet a táblába
        for ($i = 1; $i <= 15; $i++) {
            try {
                $comment = new Comment();
                $comment->movie_id = Movie::inRandomOrder()->first()->id;
                $comment->user_id = User::inRandomOrder()->first()->id;
                $comment->content = $faker->paragraph;
                $comment->date = $faker->dateTimeBetween('-1 year', 'now');
                $comment->save();
            } catch (Exception $e) {

            }
        } 
    }
}
