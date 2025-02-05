<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobPosition extends Model
{
    use HasFactory;

    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employer_id');
    }

    public function educationLevel()
    {
        return $this->belongsTo(EducationLevel::class, 'education_id'); // أضف return هنا
    }

    public function experienceLevel()
    {
        return $this->belongsTo(ExperienceLevel::class, 'experience_id'); // أضف return هنا
    }
}
