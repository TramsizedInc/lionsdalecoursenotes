<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $schools = ['BMSZC Bláthy Ottó Titusz Informatikai Technikum', 
        'BGSZC Eötvös Loránd Technikum', 
        'BMSZC Petrik Lajos Két tanítási Nyelvű Technikum',
        'BMSZC Trefort Ágoston Két Tanítási Nyelvű Technikum'
        ];

        return [
            'name' => fake()->randomElement($schools),
            'address'=> fake()->address(),
            'contact_name' => fake()->name(),
            'contact_email' => fake()->email(),
        ];
    }
}
