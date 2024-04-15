<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\User;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
//use App\database\seeders; //ha hiba van, kis/nagy betű csere
use Database\Seeders\CalculateAverageRating;
use Carbon\Carbon;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexByMovieID(Movie $movie)
    {
       // return $movie;//->with("comments")->get();
       $seged =  Comment::with(["movie", "user"])->where('movie_id', '=', $movie->id)->get();
       foreach ($seged as $comment) {
            $comment->user->imageUrl = asset("storage/" .  $comment->user->imageUrl);
        }
        return $seged;
        $c= new CalculateAverageRating(); //ez a két sor legyen a vége, ez az újrakalkuláció
        $c->run();
    }

    public function index()
    {
       // return $movie;//->with("comments")->get();
       return Comment::with(["movie","user"])->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        $comment = new Comment();
        
        $comment->movie_id = $request->movie_id;
        $comment->user_id = $request->user()->id;

        $comment->content = $request->content;
        $comment->date = Carbon::now();
       
        $comment->save();     
        $comment->user;  
        return $comment;
    }   

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie, User $user)
    {
        return Comment::with(["movie"])
            ->where('movie_id', '=', $movie->id)
            ->where('user_id', '=', $user->id)
            ->get();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        if($request->content != "") 
            $comment->content = $request->content;
        $comment->date = Carbon::now();
        $comment->save(); 
        return $comment;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        try {
            $comment->delete();
            return true;
        } catch (\Exception $e) {
            return response()->json([
                'Hiba' => 'nem sikerült törölni'
            ], 404);
        }
       
    }
}
