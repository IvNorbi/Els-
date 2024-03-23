<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class MovieRolePeople extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function movies(): BelongsTo
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id')->select(['id', 'name']);
    }

    public function people(): BelongsTo
    {
        return $this->belongsTo(People::class, 'people_id', 'id' )->select(['id', 'name', 'birth_date']);
    }

    public function roles(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id', 'id' )->select(['id', 'name']);
    }

    
}
