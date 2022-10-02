<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class User_ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User_model::factory(5)->create();
    }
}
