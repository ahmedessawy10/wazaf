<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Candidate::class;
    public function definition(): array
    {
        
        return [
            'user_id' => User::factory()->candidate(), 
            'job_title' => $this->faker->jobTitle(),
            'summary' => $this->faker->sentence(),
            'date_of_birth' => $this->faker->date(),
            'phone' => $this->faker->phoneNumber(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
        ];
    }
}
