<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industries = [
            ['name' => 'Information Technology (IT)'],
            ['name' => 'Healthcare'],
            ['name' => 'Finance'],
            ['name' => 'Education'],
            ['name' => 'Manufacturing'],
            ['name' => 'Retail'],
            ['name' => 'Hospitality'],
            ['name' => 'Construction'],
            ['name' => 'Marketing'],
            ['name' => 'Telecommunications'],
            ['name' => 'Automotive'],
            ['name' => 'Media & Entertainment'],
            ['name' => 'Real Estate'],
            ['name' => 'Transportation'],
            ['name' => 'Energy'],
        ];

        foreach ($industries as $industry) {
            Industry::create($industry);
        }
    }
}
