<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Thiagoprz\CompositeKey\HasCompositeKey;

class GenreMovie extends Model
{
    use HasFactory;
    use HasCompositeKey;
    
    protected $table ="genre_movie";
    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = ['genre_id', 'movie_id'];



    public function movies(): BelongsTo
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id')->select(['id', 'name']);
    }

    public function genres(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id')->select(['id', 'name']);
    }
}
