<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::Class);
        $this->call(UserTagsTableSeeder::class);
        $this->call(UserCoursesTableSeeder::class);
        $this->call(UserModelsTableSeeder::class);
    }
}
