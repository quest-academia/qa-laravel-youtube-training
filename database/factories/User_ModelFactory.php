<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\User_model;
use Illuminate\Database\Eloquent\Factories\Factory;

class User_ModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::all()->random(1)[0]->id;
        $followed_user_id = User::inRandomOrder()->where('id','<>','$user_id')->first()->id;

        return [
            'user_id'=>$user_id,
            'followed_user_id'=>$followed_user_id,
        ];
    }
}
