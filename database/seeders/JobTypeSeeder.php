<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobTypes = [
            ['name' => 'Full Time'],
            ['name' => 'Part Time'],
            ['name' => 'Freelance'],
            ['name' => 'Contract'], // Fixed typo in "Contract"
        ];

        DB::table('job_types')->insert($jobTypes);
    }
}
