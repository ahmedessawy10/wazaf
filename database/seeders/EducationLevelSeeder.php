<?php

namespace Database\Seeders;

use App\Models\EducationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educations = [
            ['level' => 'High School'],
            ['level' => 'Diploma'],
            ['level' => 'Bachelor'],
            ['level' => 'Master'],
            ['level' => 'PhD'],
        ];

        foreach ($educations as $education) {
            EducationLevel::create($education);
        }
    }
}
