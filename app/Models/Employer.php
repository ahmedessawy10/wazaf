<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)

class Employer extends Model
{
    use HasFactory;
<<<<<<< HEAD

}
=======
    protected $fillable = [
        'user_id',
        'company_name',
        'about_us',
        'website_url',
        'company_vision',
        'company_email',
        'year_establish',
        'team_size',
        'logo',
        'banner_image',
        'latitude',
        'longitude',
        'address',
        'phone',
         'phone_code',
         'country',
        'industry_id',
         'organization_type_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
      public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
     public function organizationType()
    {
        return $this->belongsTo(OrganizationType::class);
    }
     public function jobPositions()
    {
        return $this->hasMany(JobPosition::class);
    }
}
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
