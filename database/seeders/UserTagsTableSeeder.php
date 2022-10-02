<?php

namespace Database\Seeders;

use App\Models\UserTag;
use Illuminate\Database\Seeder;

class UserTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserTag::factory(5)->create();
    }
}
