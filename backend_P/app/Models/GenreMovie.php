<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GenreMovie extends Model
{
    use HasFactory;
    
    protected $table ="genre_movie";

    public function movies(): BelongsTo
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id')->select(['id', 'name']);
    }

    public function genres(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id')->select(['id', 'name']);
    }
}
