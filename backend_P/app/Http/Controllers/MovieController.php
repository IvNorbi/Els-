<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\MovieRolePeople;
use App\Models\Comment;
use App\Models\Rating;
use App\Models\Genre;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;



class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $return = Movie::with([ 'rolesPeople.roles','rolesPeople.people'])->get();
        foreach ($return as $key => $movie) {
            $tags = [];
            foreach ($movie->genres as $genre) {
                $tags[] = $genre->name;
            }
            $movie->tags = $tags;
            $movie->stars = round($movie->ratings/2.0);
            $movie->imageUrl = asset("storage/".$movie->imageUrl);
        }

        return $return;

    }


    public function indexByGenre(Genre $genre)
    {
        $return = Movie::with([ 'rolesPeople.roles','rolesPeople.people'])->get();
        $return2 = [];
        foreach ($return as $key => $movie) {
            $belekellrakni = false;
            $tags = [];
            foreach ($movie->genres as $g) {
                if ($genre->name == $g->name) $belekellrakni = true;
                $tags[] = $g->name;
            }
            $movie->tags = $tags;
            $movie->stars = round($movie->ratings/2.0);
            $movie->imageUrl = asset("storage/".$movie->imageUrl);
            if ($belekellrakni) $return2[]= $movie;
        }

        return $return2;

    }

    public function toplist()
    {
        $return = Movie::with([ 'rolesPeople.roles','rolesPeople.people'])->orderBy('ratings', 'desc')->get();
        foreach ($return as $key => $movie) {
            $tags = [];
            foreach ($movie->genres as $genre) {
                $tags[] = $genre->name;
            }
            $movie->tags = $tags;
            $movie->stars = round($movie->ratings/2.0);
            $movie->imageUrl = asset("storage/".$movie->imageUrl);

        }

        return $return;

    }

    public function randomMovies()
    {
    $previousMovies = Session::get('previousMovies', []);                                               // Előző lekérdezésből származó filmek

    
    $movieIds = Movie::pluck('id')->toArray();                                                          // Lekérdezi az összes film ID-jét

    if (count($movieIds) < 4) {                                                                         // Ellenőrzi, hogy van-e elegendő film az adatbázisban
        $movies = Movie::all();                                                                         // Ha kevesebb, mint 4 film van az adatbázisban, visszaad mindent
        Session::put('previousMovies', $movies->pluck('id'));                                           // Frissíti a session-t az összes film ID-jével
    } else {
        shuffle($movieIds);                                                                             // Összekeveri a filmeket
        $filteredMovieIds = array_diff($movieIds, $previousMovies);                                     // Kiszűri azokat a filmeket, amelyek már szerepeltek
        $movies = Movie::whereIn('id', array_slice($filteredMovieIds, 0, 4))->get();                    // Lekérdezi a 4 véletlenszerű filmet 
        foreach ($movies as $movie) {
            $movie->imageUrl = asset("storage/".$movie->imageUrl);
        }
        Session::put('previousMovies', array_merge($previousMovies, $movies->pluck('id')->toArray()));  // Tárolja az aktuális lekérdezésből származó filmeket a sessionben
        if (count($filteredMovieIds) < 4) {                                                             // Ha kevesebb, mint 4 új film van megjelenítendő, újraindítja a ciklust
            return $this->randomMovies();
        }
    }
    return response()->json($movies);                                                                    // Visszatér a filmekkel
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //nem kell
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        $movie = new Movie();

        $movie->name = $request->name;
        $movie->release_year = $request->release_year;
        $movie->description = $request->description;
        
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $movie->imageUrl = str_replace('public/', '', $file->storeAs('public', $request->name.".".$extension));

        if( $request->imageUrl != "")  
            $movie->imageUrl = $request->imageUrl;
       // $movie->ratings = $request->ratings;
        $movie->length = $request->length;  


        
        $movie->save();

    /*    $people = new People();
        $people->name = $request->people[0]->name;
        $people->birth_date = $request->birth_date;
        $people->country = $request->country;
        $people->save();*/
        return $movie;
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $movie->rolesPeople;
        $tags = [];
        foreach ($movie->genres as $genre) {
            $tags[] = $genre->name;
        }
        $movie->tags = $tags;
        $movie->stars = round($movie->ratings/2.0);
        $movie->imageUrl = asset("storage/".$movie->imageUrl);

        return $movie;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //nem kell
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        if( $request->name != "")  $movie->name = $request->name;
        if( $request->release_year != "")  $movie->release_year = $request->release_year;
        if( $request->description != "")  $movie->description = $request->description;
        if( $request->imageUrl != "")  $movie->imageUrl = $request->imageUrl;
        if( $request->length != "")  $movie->length = $request->length;
        $movie->save();
        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        Rating::where("movie_id","=",$movie->id)->delete();
        Comment::where("movie_id","=",$movie->id)->delete();
        MovieRolePeople::where("movie_id","=",$movie->id)->delete();
        Storage::delete("public/".$movie->imageUrl);

        $movie->delete();
        return true;
    }
}
