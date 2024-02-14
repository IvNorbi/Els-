<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class CalculateAverageRating extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->command->info('Calculating average ratings...');

        $movies = Movie::all();

        foreach ($movies as $movie) {
            $averageRating = $this->calculateAverageRating($movie->id);
            //$numberOfRatings = $movie->comments()->whereNotNull('rating')->count();
            //$averageRating = $numberOfRatings > 0 ? $totalRating / $numberOfRatings : 0;

            $movie->ratings = $averageRating;
            $movie->save();
        }

        //$this->command->info('Average ratings calculation completed.');
    }

    private function calculateAverageRating($movieId): float
    {
        {
            $movie = Movie::find($movieId);
        
            if (!$movie) {
                return 0; // Vagy más default érték, ha a film nem található
            }
        
            $totalRating = $movie->ratings()->whereNotNull('rating')->sum('rating');
            $numberOfRatings = $movie->ratings()->whereNotNull('rating')->count();
        
            //return $numberOfRatings > 0 ? $totalRating / $numberOfRatings : 0;

            $averageRating = $numberOfRatings > 0 ? $totalRating / $numberOfRatings : 0;

            return $averageRating;
        }
    }
}
