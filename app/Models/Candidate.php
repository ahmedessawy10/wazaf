<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title',
        'user_id',
        'summary',
        'personal_website',
        'military_status',
        'gender',
        'date_of_birth',
        'avilability',
        'phone',
        'country',
        'city',
        'address',
        'resume',
        'cover_letter',
        'exp_id',
        'edu_id',
    ];

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function skills()
    {
        return $this->belongsToMany(Skill::class, "candidate_skills", 'skill_id', 'candidate_id');
    }
}
