<?php

namespace App\Models;


use App\Models\JobPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Category extends Model
{
  use HasFactory;


  protected $fillable = [
    'name',
    'icon',
  ];
  public function jobPositions()
  {
    return $this->hasMany(JobPosition::class);
  }
}
