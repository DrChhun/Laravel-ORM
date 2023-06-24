<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->sentence(),
            'deadline' => fake()->dateTimeAD(),
            'assigned_user' => fake()->name(),
            'assigned_client' => fake()->name(),
            'status' => fake()->name()
        ];
    }
}
