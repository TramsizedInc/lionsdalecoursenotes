<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $courseNames = ['PHP basic', 'PHP authentication', 'WEB development', 'Software development', 'Backend development'];
        $level = ['Beginner', 'Intermediate', 'Advanced', 'Master', 'Jedi Master'];

        return [
            'name' => fake()->randomElement($courseNames),
            'level' => fake()->randomElement($level),         
        ];
    }
}
