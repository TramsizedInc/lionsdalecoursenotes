<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
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
            CourseSeeder::class,
            // LearndaySeeder::class,
            // AttendanceSeeder::class,
            // CourseSeeder::class,
        ]);
         \App\Models\User::factory(10)->create([
            'school_id' => 1
         ]);
         \App\Models\User::factory(10)->create([
            'school_id' => 2
         ]);
         \App\Models\User::factory(10)->create([
            'school_id' => 3
         ]);

         \App\Models\User::factory()->create([
             'username' => 'Test User',
             'email' => 'test@example.com',
             'school_id' => 3

         ]);
        
        \App\Models\Course::factory(3)->create([
            'type_id' => rand(1,3)
        ]);
        \App\Models\Course::factory()->create([
            'name' => 'Php basics',
            'description' => 'Learn the basics of php',
            'level' => 'Beginer',
            'c_route' => 'Database/factories, Database/migrations, Database/seeders',
            'type_id' => rand(1,3)
        ]);
        \App\Models\Course::factory()->create([
            'name' => 'Php advanced',
            'description' => 'Learn the most important parts of php',
            'level' => 'Intermediat',
            'c_route' => 'Database/migrations, ',
            'type_id' => rand(1,3)
        ]);
        \App\Models\Course::factory()->create([
            'name' => 'Php professional',
            'description' => 'Learn php to its core',
            'level' => 'Professional',
            'c_route' => 'Database/seeders',
            'type_id' => rand(1,3)
        ]);
        
        // $users = DB::table('users')->get();
        // dd($users);
    }
}
