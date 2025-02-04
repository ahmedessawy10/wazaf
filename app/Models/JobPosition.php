<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)

class JobPosition extends Model
{
    use HasFactory;
<<<<<<< HEAD

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
=======
       protected $fillable = [
         'job_title',
        'description',
        'employer_id',
        'category_id',
        'experience_id',
        'education_id',
         'deadline',
         'total_positions',
         'status',
         'job_type',
         'job_location',
           'salary_type',
         'min_salary',
         'max_salary',
         'benefits',
          'keywords',
         'is_remote',
         'custom_salary'
    ];
      public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
      public function category()
    {
        return $this->belongsTo(Category::class);
    }
      public function experience()
    {
        return $this->belongsTo(ExperienceLevel::class , 'experience_id');
    }
     public function education()
    {
        return $this->belongsTo(EducationLevel::class, 'education_id');
    }
      public function tags()
    {
        return $this->belongsToMany(Tag::class, 'job_tags');
    }

}
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
