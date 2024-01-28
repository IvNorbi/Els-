<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\database\seeders; //ha hiba van, kis/nagy betű csere

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Movie $movie)
    {
       // return $movie;//->with("comments")->get();
       return Movie::where('id', '=', $movie->id)->with(["comments","comments.user"])->get();
       $c= new CalculateAverageRating(); //ez a két sor leygen a vége, ez az újrakalkuláció
       $c->run();
    
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
    public function store(StoreCommentRequest $request)
    {
        //újra kell számolni a movie rating-jét ha felveszek egy új comment-et
        $c= new CalculateAverageRating(); //ez a két sor leygen a vége, ez az újrakalkuláció
        $c->run();
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //nem kell
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //újra kell számolni a movie rating-jét ha felveszek egy új comment-et
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //újra kell számolni a movie rating-jét ha felveszek egy új comment-et
    }
}
