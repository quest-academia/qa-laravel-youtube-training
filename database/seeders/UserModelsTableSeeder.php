<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserModel::factory(5)->create();
    }
}
