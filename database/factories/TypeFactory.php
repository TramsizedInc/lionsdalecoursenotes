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
        $type = fake()->randomElement(["Web, Desktop App, Mobile App"]);
        return [
            "name" => $type  . " Development",
            "slug" => $this->getSlug($type),
        ];
    }
    public function getSlug(string $str): string{
        $str = mb_strtolower($str);
        if(str_contains($str, "desktop")){
            return "appdev";
        }
        return str_contains($str,"web")?"webdev":"mobildev";
    }
}
