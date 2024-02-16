<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Role extends Model
{
    use HasFactory;

    public function rolesPeople(): HasMany
    {
        return $this->hasMany(MovieRolePeople::class, 'role_id','id');
    }
}