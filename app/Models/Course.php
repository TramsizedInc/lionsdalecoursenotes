<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;
    public function usersCourses(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function type(): HasOne
    {
        return $this->hasOne(Type::class);
    }
}  
