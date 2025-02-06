<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'employer_id',
        'job_position_id',  // Changed from job_listing_id to job_position_id
        'cover_letter',
        'status',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function jobPosition()  
    {
        return $this->belongsTo(JobPosition::class);
    }
}
