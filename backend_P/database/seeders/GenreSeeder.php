<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genre = new Genre();
        $genre->name = "akció";
        $genre->save();

        $genre = new Genre();
        $genre->name = "animációs";
        $genre->save();

        $genre = new Genre();
        $genre->name = "bűnügyi";
        $genre->save();

        $genre = new Genre();
        $genre->name = "börtön";
        $genre->save();

        $genre = new Genre();
        $genre->name = "bűnügyi";
        $genre->save();

        $genre = new Genre();
        $genre->name = "családi";
        $genre->save();

        $genre = new Genre();
        $genre->name = "dokumentum";
        $genre->save();

        $genre = new Genre();
        $genre->name = "dráma";
        $genre->save();

        $genre = new Genre();
        $genre->name = "életrajzi";
        $genre->save();

        $genre = new Genre();
        $genre->name = "erotikus";
        $genre->save();

        $genre = new Genre();
        $genre->name = "fantasy";
        $genre->save();

        $genre = new Genre();
        $genre->name = "háborús";
        $genre->save();

        $genre = new Genre();
        $genre->name = "harcművészet";
        $genre->save();

        $genre = new Genre();
        $genre->name = "holokauszt";
        $genre->save();

        $genre = new Genre();
        $genre->name = "horror";
        $genre->save();

        $genre = new Genre();
        $genre->name = "kaland";
        $genre->save();

		$genre = new Genre();
        $genre->name = "kalózos";
        $genre->save();

		$genre = new Genre();
        $genre->name = "katasztrófa";
        $genre->save();

        $genre = new Genre();
        $genre->name = "kém";
        $genre->save();

        $genre = new Genre();
        $genre->name = "koncert";
        $genre->save();

        $genre = new Genre();
        $genre->name = "misztikus";
        $genre->save();

        $genre = new Genre();
        $genre->name = "musical";
        $genre->save();

        $genre = new Genre();
        $genre->name = "néma";
        $genre->save();

        $genre = new Genre();
        $genre->name = "politikai";
        $genre->save();

        $genre = new Genre();
        $genre->name = "road-movie";
        $genre->save();

        $genre = new Genre();
        $genre->name = "romantikus";
        $genre->save();

        $genre = new Genre();
        $genre->name = "rövid";
        $genre->save();

        $genre = new Genre();
        $genre->name = "sci-fi";
        $genre->save();

        $genre = new Genre();
        $genre->name = "szatíra";
        $genre->save();

        $genre = new Genre();
        $genre->name = "szuperhős";
        $genre->save();

        $genre = new Genre();
        $genre->name = "vígjáték";
        $genre->save();

        $genre = new Genre();
        $genre->name = "thriller";
        $genre->save();

        $genre = new Genre();
        $genre->name = "western";
        $genre->save();

    }
}
