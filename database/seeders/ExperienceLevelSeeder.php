<?php

namespace Database\Seeders;

use App\Models\ExperienceLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experienceLevels = [
            ['level' => 'Fresher'],
            ['level' => '2-5 years'],
            ['level' => '6-10 years'],
            ['level' => '10+ years'],
        ];

        foreach ($experienceLevels as $level) {
            ExperienceLevel::create($level);
        }
    }
}
