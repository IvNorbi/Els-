<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\User;

use App\Http\Requests\StoreRatingtRequest;
use Database\Seeders\CalculateAverageRating;
use Carbon\Carbon;


class RatingController extends Controller
{
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRatingtRequest $request)
    {
        if (Rating::where('movie_id', '=', $request->movie_id)->where('user_id', '=', $request->user()->id)->count() > 0) {
            $rating = Rating::where('movie_id', '=', $request->movie_id)->where('user_id', '=', $request->user()->id)->first();
        }else {
            $rating = new Rating();
            $rating->movie_id = $request->movie_id;
            $rating->user_id = $request->user()->id;
        }  
        
        
        $rating->rating = $request->rating;
    
        $rating->save();       //újra kell számolni a movie rating-jét ha felveszek egy új comment-et
        $c= new CalculateAverageRating(); //ez a két sor leygen a vége, ez az újrakalkuláció
        $c->run();
        return $rating;
    }   

}
