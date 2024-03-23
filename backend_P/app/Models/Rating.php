<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

class Rating extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    //protected $table = 'comments';

    // Egy komment egy Movie-hoz tartozik
    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }

    // Egy komment egy User-hez tartozik
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    protected function setKeysForSaveQuery($query)
    {
        return $query->where('user_id', $this->getAttribute('user_id'))
                     ->where('movie_id', $this->getAttribute('movie_id'));
    }

    //protected $primaryKey = ['user_id', 'movie_id'];
    public $incrementing = false;

    protected $fillable = [
        "rating",
        "user_id",
        "movie_id"    ];
}
