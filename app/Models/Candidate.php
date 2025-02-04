<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

<<<<<<< HEAD
    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function skills()
    {
        return $this->belongsToMany(Skill::class, "candidate_skills", 'skill_id', 'candidate_id');
    }
=======


>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
}
