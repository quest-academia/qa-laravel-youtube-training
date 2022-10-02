<?php

namespace Database\Seeders;

use App\Models\User_tag;
use Illuminate\Database\Seeder;

class User_TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User_tag::factory(5)->create();
    }
}
