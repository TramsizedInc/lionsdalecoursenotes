<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\School::factory()->create([
            'name' => 'BMSzC Bláthy Ottó Titusz Gondolatolvasó Szakgimnáium',
            'email' => 'krucsay.attia@blathy.info',
            'contactname' => 'Krucsay Attila',
            'address' => '1032 Budapest, Bécsi út 134.',
        ]);
        \App\Models\School::factory()->create([
            'name' => 'BGéSZC Eötvös Loránd Technikum',
            'email' => 'titkarsag@elg-bp.edu.hu',
            'contactname' => 'Szénási Zsolt',
            'address' => '1204 Budapest, Török Flóris u. 89.',
        ]);
        \App\Models\School::factory(3)->create();

        // \App\Models\School::factory(1)->create();
        // \App\Models\School::factory()->create([
        //     'name' => 'Blathy',
        //     'address' => 'Bécsi út 134',
        //     'contactname' => 'Krucsay Attila',
        //     'email' => 'blathy@gmail.com'

        // ]);
        // \App\Models\School::factory()->create([
        //     'name' => 'Eötvös Loránd Technikum',
        //     'address' => 'Török Flóris utca 89',
        //     'contactname' => 'Eötvös Loránd',
        //     'email' => 'eotvos@gmail.com'

        // ]);
    }
}
