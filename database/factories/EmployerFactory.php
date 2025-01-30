<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Employer::class;
    public function definition(): array
    {
        return [

            'user_id' => User::factory()->employer(),
            'about_us' => $this->faker->paragraph(),
            'website_url' => $this->faker->url(),
            'year_establish' => $this->faker->year(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
