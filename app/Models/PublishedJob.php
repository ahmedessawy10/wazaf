<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Job;

class PublishedJob extends Job
{
    use HasFactory;

    protected $table = 'jobs';

   
     
    protected static function booted()
    {
        static::addGlobalScope('published', function (Builder $query) {
            $query->where('status', 'published');
        });
    }
}
