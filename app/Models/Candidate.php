<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_title',
        'summary',
        'photo',
        'personal_website',
        'military_status',
        'gender',
        'date_of_birth',
        'phone',
        'country',
        'city',
        'address',
        'resume',
        'cover_letter',
        'exp_id',
        'edu_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'candidate_skills', 'candidate_id', 'skill_id');
    }
}
