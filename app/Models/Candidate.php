<?php

namespace App\Models;

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

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
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
=======


>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
}
