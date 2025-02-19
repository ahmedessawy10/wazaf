<?php

namespace App\Models;

use App\Models\User;
use App\Models\Industry;
use App\Models\JobPosition;
use App\Models\OrganizationType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Employer extends Model
{
    use HasFactory;

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
        'city',
        'address',
        'phone',
        'industry_type',
        'organization_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class, 'industry_type');
    }

    public function organizationType()
    {
        return $this->belongsTo(OrganizationType::class, 'organization_type');
    }

    public function jobs()
    {
        return $this->hasMany(JobPosition::class, 'employer_id');
    }
}
