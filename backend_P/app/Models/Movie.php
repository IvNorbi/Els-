<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;

    //protected $table = 'movies';

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function rolesPeople(): HasMany
    {
        return $this->hasMany(MovieRolePeople::class, 'movie_id', 'id');
    }

    public function comments(): hasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function ratings(): hasMany
    {
        return $this->hasMany(Rating::class);
    }

    // public function calculateAverageRating(): float // A felhasználók által adott pontokból kiszámolja egy film átlagos pontozását
    // {
    //     $totalRating = $this->comments()->whereNotNull('rating')->sum('rating');    
    //     $numberOfRatings = $this->comments()->whereNotNull('rating')->count();

    //     return $numberOfRatings > 0 ? $totalRating / $numberOfRatings : 0;
    // }

    protected $casts = array(
        "ratings" => "decimal:1"
    );
}
