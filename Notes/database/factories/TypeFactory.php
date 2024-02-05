<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type>
 */
class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $typesDictionary = [
            'C#-backend developer' => 'c#Dev',
            'Web development' => 'webDev',
            'Front-end developer' => 'frontDev',
            'Database administrator' => 'dbAdmin'
        ];

        $typeKey = array_rand($typesDictionary);
        $slug = $typesDictionary[$typeKey];

        return [
            'type' => $typeKey,
            'slug' => $slug
        ];

        //return ['type' => fake()->word(), 'slug' => fake()->word()];
    }
}
