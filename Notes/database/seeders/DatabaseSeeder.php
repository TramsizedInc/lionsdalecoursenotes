<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SchoolSeeder::class,
            TypeSeeder::class,
            UserSeeder::class,
            CourseSeeder::class,
        ]);

        

        User::factory()->create([
            'name' => 'dev',
            'email' => 'dev@gmail.com',
            'password' => '123456',
        ]);
    }
}
