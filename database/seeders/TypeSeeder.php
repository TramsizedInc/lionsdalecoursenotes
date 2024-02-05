<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $options = ["Web", "Desktop App", "Mobile App"];
        foreach ($options as $key => $value) {
            \App\Models\Type::factory()->create([
                'name' => $value . " Developer"
            ]);
        }
    }
}
