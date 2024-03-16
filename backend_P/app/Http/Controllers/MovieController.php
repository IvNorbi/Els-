<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\MovieRolePeople;
use App\Models\Comment;
use App\Models\Rating;
use App\Models\Genre;
use App\Models\GenreMovie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;



class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $request = request();

        //dd($request->input("order"));
        if ($request->input("order")!= null)
            $return = Movie::with(['rolesPeople.roles', 'rolesPeople.people'])->orderBy($request->input("order"))->get();
        else
            $return = Movie::with(['rolesPeople.roles', 'rolesPeople.people'])->get();
        foreach ($return as $key => $movie) {
            $tags = [];
            foreach ($movie->genres as $genre) {
                $tags[] = $genre->name;
            }
            $movie->tags = $tags;
            $movie->stars = round($movie->ratings / 2.0);
            $movie->imageUrl = asset("storage/" . $movie->imageUrl);
        }

        return $return;
    }


    public function indexByGenre(Genre $genre)
    {
        $return = Movie::with(['rolesPeople.roles', 'rolesPeople.people'])->get();
        $return2 = [];
        foreach ($return as $key => $movie) {
            $belekellrakni = false;
            $tags = [];
            foreach ($movie->genres as $g) {
                if ($genre->name == $g->name) $belekellrakni = true;
                $tags[] = $g->name;
            }
            $movie->tags = $tags;
            $movie->stars = round($movie->ratings / 2.0);
            $movie->imageUrl = asset("storage/" . $movie->imageUrl);
            if ($belekellrakni) $return2[] = $movie;
        }

        return $return2;
    }

    public function toplist()
    {
        $return = Movie::with(['rolesPeople.roles', 'rolesPeople.people'])->orderBy('ratings', 'desc')->get();
        foreach ($return as $key => $movie) {
            $tags = [];
            foreach ($movie->genres as $genre) {
                $tags[] = $genre->name;
            }
            $movie->tags = $tags;
            $movie->stars = round($movie->ratings / 2.0);
            $movie->imageUrl = asset("storage/" . $movie->imageUrl);
        }

        return $return;
    }

    public function randomMovies()
    {
        $previousMovies = Session::get('previousMovies', []);                                              


        $movieIds = Movie::pluck('id')->toArray();                                                          

        if (count($movieIds) < 4) {                                                                         
            $movies = Movie::all();                                                                        
            Session::put('previousMovies', $movies->pluck('id'));                                           
        } else {
            shuffle($movieIds);                                                                             
            $filteredMovieIds = array_diff($movieIds, $previousMovies);                                    
            $movies = Movie::whereIn('id', array_slice($filteredMovieIds, 0, 4))->get();                   
            foreach ($movies as $movie) {
                $movie->imageUrl = asset("storage/" . $movie->imageUrl);
            }
            Session::put('previousMovies', array_merge($previousMovies, $movies->pluck('id')->toArray()));  
            if (count($filteredMovieIds) < 4) {                                                             
                return $this->randomMovies();
            }
        }
        return response()->json($movies);                                                                  
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
        $this->uploadImage($movie, $request);
        $movie->length = $request->length;
        $movie->save();

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
        $movie->stars = round($movie->ratings / 2.0);
        $movie->imageUrl = asset("storage/" . $movie->imageUrl);

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
        if ($request->name != "")  $movie->name = $request->name;
        if ($request->release_year != "")  $movie->release_year = $request->release_year;
        if ($request->description != "")  $movie->description = $request->description;
        if ($request->imageUrl != "")  $this->uploadImage($movie, $request);    //$movie->imageUrl = $request->imageUrl;
        if ($request->length != "")  $movie->length = $request->length;
        $movie->save();
        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        Rating::where("movie_id", "=", $movie->id)->delete();
        Comment::where("movie_id", "=", $movie->id)->delete();
        MovieRolePeople::where("movie_id", "=", $movie->id)->delete();
        Storage::delete("public/" . $movie->imageUrl);

        $movie->delete();
        return true;
    }

    protected function uploadImage(Movie $movie, $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $movie->imageUrl = str_replace('public/', '', $file->storeAs('public', $movie->name . "." . $extension));
        } elseif ($request->filled('imageUrl')) {
            $movie->imageUrl = $request->input('imageUrl');
        }
    }

    protected function addGenre(Movie $movie, Request $request) {
        
        
  
        $genre = Genre::where("name", "=", $request->input("tag"))->first();
        if ( $genre  == null) return response()->json(["error"=>"Nincs ilyen műfaj"], 404); 
        
        $letezik = GenreMovie::where("movie_id" ,"=", $movie->id)->where("genre_id" ,"=", $genre->id)->first();
        if ( $letezik != null) return response()->json(["error"=>"Már van ilyen műfaja a filmnek"], 505); 
        
        
        $genreMovie             = new GenreMovie();
        $genreMovie->movie_id   = $movie->id;
        $genreMovie->genre_id   = $genre->id;
        $genreMovie->save();



        $tags = [];
        foreach ($movie->genres as $genre) {
            $tags[] = $genre->name;
        }
        $movie->tags = $tags;
        $movie->stars = round($movie->ratings / 2.0);
        $movie->imageUrl = asset("storage/" . $movie->imageUrl);

        return $movie;
    }

    protected function deleteGenre(Movie $movie, Request $request) {
        
        
  
        $genre = Genre::where("name", "=", $request->input("tag"))->first();
        if ( $genre  == null) return response()->json(["error"=>"Nincs ilyen műfaj"], 404); 
        
        $letezik = GenreMovie::where("movie_id" ,"=", $movie->id)->where("genre_id" ,"=", $genre->id)->first();
        if ( $letezik == null) return response()->json(["error"=>"Nem is volt ilyen műfaja a filmnek"], 505); 
        
        $letezik->delete();

        $tags = [];
        foreach ($movie->genres as $genre) {
            $tags[] = $genre->name;
        }
        $movie->tags = $tags;
        $movie->stars = round($movie->ratings / 2.0);
        $movie->imageUrl = asset("storage/" . $movie->imageUrl);

        return $movie;
    }
}
