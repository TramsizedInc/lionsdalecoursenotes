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
        // return [
        //     // 'name' => 'The school of life',
        //     // 'address' => fake()->address(),
        //     // 'contactname' => fake()->name(),
        //     // // 'email' => fake()->unique()->safeEmail() 
        // ];

        $schoolname = "BMSzC" . " " .  fake()->firstNameMale . " " . fake()->firstNameFemale . " Informatikai Technikuma és Bölcsöde";
        $contactname = fake()->firstNameFemale . " " . fake()->firstNameFemale;
        return [
            //
            "name" => $schoolname,
            "address" => fake()->address,
            "contactname" => $contactname,
            "email" => mb_ereg_replace(" ", ".", (mb_convert_case($contactname, MB_CASE_LOWER_SIMPLE))) . "@" . join(array_slice(explode(" ", (mb_strtolower($schoolname))), 1,count(explode(" ",$schoolname))-5)) . ".edu.com",
        ];
    }
}
