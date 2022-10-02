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
        $this->call(User_TagsTableSeeder::class);
        $this->call(User_CoursesTableSeeder::class);
        $this->call(User_ModelsTableSeeder::class);
    }
}
