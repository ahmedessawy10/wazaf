<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\EducationLevel;
use App\Models\Employer;
use App\Models\ExperienceLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobPositionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'job_title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraphs(3, true),
            'employer_id' => Employer::factory(),
            'category_id' => $this->faker->randomElement(Category::pluck('id')),
            'experience_id' => $this->faker->randomElement(ExperienceLevel::pluck('id')),
            'education_id' => $this->faker->randomElement(EducationLevel::pluck('id')),
            'deadline' => $this->faker->dateTimeBetween('now', '+2 months'),
            'total_positions' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->randomElement(['open', 'closed']),
            'job_type' => $this->faker->randomElement(['full_time', 'part_time', 'freelance', 'internship']),
            'job_location' => $this->faker->city() . ', ' . $this->faker->country(),
            'salary_type' => $this->faker->randomElement(['hourly', 'monthly', 'yearly', 'project']),
            'min_salary' => $this->faker->numberBetween(30000, 50000),
            'max_salary' => $this->faker->numberBetween(60000, 150000),
        ];
    }

    /**
     * Remote job state
     */
    public function remote(): static
    {
        return $this->state(fn(array $attributes) => [
            'job_location' => 'Remote',
        ]);
    }

    /**
     * Urgent hiring state
     */
    public function urgent(): static
    {
        return $this->state(fn(array $attributes) => [
            'deadline' => now()->addDays(7),
        ]);
    }

    /**
     * Senior level position state
     */
    public function seniorLevel(): static
    {
        return $this->state(fn(array $attributes) => [
            'min_salary' => $this->faker->numberBetween(80000, 100000),
            'max_salary' => $this->faker->numberBetween(120000, 200000),
        ]);
    }
}
