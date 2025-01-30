<?php

namespace Database\Seeders;

use App\Models\OrganizationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orgaizationTypes = [
            ['name' => 'Private'],
            ['name' => 'Public'],
            ['name' => 'Non-profit'],
            ['name' => 'For-profit'],
            ['name' => 'Government'],
            ['name' => 'Other'],
        ];

        foreach ($orgaizationTypes as $orgaizationType) {
            OrganizationType::create($orgaizationType);
        }
    }
}
