<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Movie::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_count = User::all()->count();
        return [
            'user_id' => $this->faker->numberBetween(1,$user_count),
            'title' => $this->faker->title(),
            'description' => $this->faker->paragraph(),
            'url' => 'https://www.youtube.com/watch?v=YI5oU-hKZKM'
        ];
    }
}
