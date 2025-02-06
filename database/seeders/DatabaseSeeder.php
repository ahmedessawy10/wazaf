<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employer;
use App\Models\Candidate;

use App\Models\JobPosition;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\IndustrySeeder;
use Database\Seeders\EducationLevelSeeder;
use Database\Seeders\ExperienceLevelSeeder;
use Database\Seeders\OrganizationTypeSeeder;



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

        JobPosition::factory(100)
            ->create();

        // Create some remote jobs
        JobPosition::factory(10)
            ->remote()
            ->create();

        // Create some urgent hiring positions
        // JobPosition::factory(5)
        //     ->urgent()
        //     ->create();

        // Create some senior level positions
        // JobPosition::factory(10)
        //     ->seniorLevel()
        //     ->create();

    }
}
