<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'title' => $this->faker->carModel('BMW'),
            // 'tags' => 'sedan, suv, sport, convertible',
            // 'published' => $this->faker->date('Y_m_d'),
            // 'description' => $this->faker->paragraph(6),
        ];
    }
}
