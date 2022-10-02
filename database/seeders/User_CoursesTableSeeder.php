<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class User_CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User_course::factory(5)->create();
    }
}
