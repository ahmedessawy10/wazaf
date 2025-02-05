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
