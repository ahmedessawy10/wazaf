<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
use Illuminate\Database\Eloquent\Model;

class ExperienceLevel extends Model
{
<<<<<<< HEAD
    protected $table = 'experience_levels';
}
=======
    use HasFactory;
     protected $fillable = [
        'level'
    ];
      public function jobPositions()
    {
        return $this->hasMany(JobPosition::class , 'experience_id');
    }
}
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
