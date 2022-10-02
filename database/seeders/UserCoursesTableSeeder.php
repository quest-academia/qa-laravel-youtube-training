<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserCourse::factory(5)->create();
    }
}
