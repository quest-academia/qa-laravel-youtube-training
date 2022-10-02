<?php

namespace Database\Factories;

use App\Models\User_tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class User_TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1,5),
            'tag_id'=>$this->faker->numberBetween(1,3),
        ];
    }
}
