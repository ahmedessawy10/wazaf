<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{

    protected $table = 'education_levels';

    use HasFactory;

    protected $fillable = [
        'level'
    ];
    public function jobPositions()
    {
        return $this->hasMany(JobPosition::class, 'education_id');
    }
}
