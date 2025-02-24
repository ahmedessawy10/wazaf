<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Education extends Model
{
    use HasFactory;
    protected $table = 'educations';

    protected $fillable = [
        'candidate_id',
        'institution',
        'degree',
        'field_of_study',
        'start_date',
        'end_date',
        'is_current',
        'description',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class,'candidate_id');
    }
}

   


