<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'job_position_id',
        'status',
        'cover_letter',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function jobPosition()
    {
        return $this->belongsTo(JobPosition::class);
    }
}
