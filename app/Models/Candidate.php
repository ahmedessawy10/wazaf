<?php

namespace App\Models;

use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\JobPosition;
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
        'availability',
        'phone',
        'country',
        'city',
        'address',
        'resume',
        'cover_letter',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experienceLevel()
    {
        return $this->hasMany(ExperienceLevel::class);
    }

    public function educationLevel()
    {
        return $this->hasMany(EducationLevel::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'candidate_skills');
    }

    public function appliedJobs()
    {
        return $this->belongsToMany(JobPosition::class, 'job_applications')
            ->withPivot('status', 'cover_letter')
            ->withTimestamps();
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class, 'candidate_id');
    }


    public function educations()
    {
        return $this->hasMany(Education::class, 'candidate_id');
    }
}
