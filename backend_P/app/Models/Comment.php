<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    //protected $table = 'comments';

    // Egy komment egy Movie-hoz tartozik
    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }

    // Egy komment egy User-hez tartozik
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->select('id', 'name', 'imageUrl');
    }
}
