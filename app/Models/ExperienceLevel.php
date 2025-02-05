<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class ExperienceLevel extends Model
{

    protected $table = 'experience_levels';

    use HasFactory;
    protected $fillable = [
        'level'
    ];
    public function jobPositions()
    {
        return $this->hasMany(JobPosition::class, 'experience_id');
    }
}
