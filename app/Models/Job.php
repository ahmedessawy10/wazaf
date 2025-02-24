<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'status', 'queue', 'payload', 'attempts', 
        'reserved_at', 'available_at', 'created_at'
    ];

    protected $casts = [
        'status' => 'string',
    ];
    public function getIsPublishedAttribute(): bool
{
    return $this->status === 'published';
}

}


    public function jobType(){
        return $this->belongsTo(JobType::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // hasMany method count your total applications
    public function applications(){
        return $this->hasMany(JobApplication::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

