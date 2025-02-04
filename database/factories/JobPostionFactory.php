<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobPostionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   protected  $model=JobPostionFactory::class;
    public function definition(): array
    {
        return [
            'job_position' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(),
            'deadline' => $this->faker->date(),
            'total_positions' => $this->faker->numberBetween(1, 10),
            'company_id' => $this->faker->randomElement(Employer::pluck('id')->toArray()),
            "category_id" => $this->faker->randomElement(\App\Models\Category::pluck('id')->toArray()),
            "experience_level_id" => $this->faker->randomElement(\App\Models\ExperienceLevel::pluck('id')->toArray()),
            "education_level_id" => $this->faker->randomElement(\App\Models\EducationLevel::pluck('id')->toArray()),
            "min_salary"=>$this->faker->numberBetween(1000, 10000),
            "max_salary"=>$this->faker->numberBetween(2000, 20000),
            "salary_type"=>$this->faker->randomElement(['hourly', 'monthly', 'yearly', 'project']),
            "job_type"=>$this->faker->randomElement(['full_time', 'part_time', 'freelance', 'internship']),
            "job_location"=>$this->faker->city(),
            "status"=>$this->faker->randomElement(['open', 'closed']),
            
        ];
    }
}
