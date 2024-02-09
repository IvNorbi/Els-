<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Movie::with(['genres', 'rolesPeople.roles','rolesPeople.people'])->get();

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

        $movie->title = $request->title;
        $movie->release_year = $request->release_year;
        $movie->description = $request->description;
        if( $request->cover != "")  
            $movie->cover = $request->cover;
        $movie->ratings = $request->ratings;
        $movie->length = $request->length;  
        $movie->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
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
        if( $request->title != "")  $movie->title = $request->title;
        if( $request->release_year != "")  $movie->release_year = $request->release_year;
        if( $request->description != "")  $movie->description = $request->description;
        if( $request->cover != "")  $movie->cover = $request->cover;
        if( $request->rating != "")  $movie->rating = $request->rating;
        if( $request->length != "")  $movie->length = $request->length;
        $movie->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return true;
    }
}
