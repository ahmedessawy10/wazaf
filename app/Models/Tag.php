<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
<<<<<<< HEAD
    //
}
=======
    use HasFactory;
        protected $fillable = [
        'name'
    ];
    public function jobPositions()
    {
        return $this->belongsToMany(JobPosition::class, 'job_tags');
    }
}
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
