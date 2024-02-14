<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class People extends Model
{
    use HasFactory;
    
    public function rolesPeople(): HasMany
    {
        return $this->hasMany(MovieRolePeople::class, 'id', 'people_id');
    }
}
