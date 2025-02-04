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



        $this->call([
            CategorySeeder::class,
            IndustrySeeder::class,
            UserSeeder::class,
            OrganizationTypeSeeder::class,
            ExperienceLevelSeeder::class,
            EducationLevelSeeder::class,
            SkillSeeder::class,
        ]);
        Employer::factory(10)->create();
        Candidate::factory(20)->create();
    }
}
