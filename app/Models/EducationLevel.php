<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
<<<<<<< HEAD
    protected $table='education_levels';
}
=======
    use HasFactory;
     protected $fillable = [
        'level'
    ];
       public function jobPositions()
    {
        return $this->hasMany(JobPosition::class, 'education_id');
    }
}
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
