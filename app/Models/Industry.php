<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Industry extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function employers()
    {
        return $this->hasMany(Employer::class, 'industry_type');
    }
}
=======
    use HasFactory;
     protected $fillable = [
        'name'
    ];
    public function employers()
    {
        return $this->hasMany(Employer::class);
    }
}
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
