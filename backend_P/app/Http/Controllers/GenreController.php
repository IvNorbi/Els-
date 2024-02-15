<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return Genre::with('movies')->get();
        return Genre::all();
    
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
    public function store(StoreGenreRequest $request)
    {
        $genre = new Genre();

        if($request->name != "") $genre->name = $request->name;
        $genre->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        return $genre;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //nem kell
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        if($request->name != "") $genre->name = $request->name;
        $genre->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return true;
    }
}
