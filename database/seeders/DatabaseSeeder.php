<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employer;
use App\Models\Candidate;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Employer::factory(10)->create();
        Candidate::factory(20)->create();

        $this->call([
            CategorySeeder::class,
            IndustrySeeder::class,
            OrganizationTypeSeeder::class,
            ExperienceLevelSeeder::class,
            EducationLevelSeeder::class,
            SkillSeeder::class,
        ]);
    }
}
