<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Web Development'],
            ['name' => 'Graphic Design'],
            ['name' => 'Data Science'],
            ['name' => 'Marketing'],
            ['name' => 'Content Writing'],
            ['name' => 'Sales'],
            ['name' => 'Customer Service'],
            ['name' => 'Project Management'],
            ['name' => 'Digital Marketing'],
            ['name' => 'UI/UX Design'],
            ['name' => 'Mobile Development'],
            ['name' => 'Customer Support'],
        ];


        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
