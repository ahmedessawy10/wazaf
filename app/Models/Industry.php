<?php

namespace App\Models;


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
