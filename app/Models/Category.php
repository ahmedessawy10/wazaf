<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)

class Category extends Model
{
    use HasFactory;
<<<<<<< HEAD
}
=======

      protected $fillable = [
        'name',
        'icon',
    ];
      public function jobPositions()
    {
        return $this->hasMany(JobPosition::class);
    }
}
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
