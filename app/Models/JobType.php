<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======
    protected $fillable = [
        'name',
          'status',
            'app_name',
             'app_email',
           'logo',
           'favicon',
           'theme_color'
    ];
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
}