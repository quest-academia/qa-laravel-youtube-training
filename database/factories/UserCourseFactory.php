<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserCourse;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCourseFactory extends Factory
{
    private static int $course_id = 1;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::all()->random(1)[0]->id;

        return [
            'user_id'=>$user_id,
            'course_id'=>function()
            {
                return self::$course_id++;
            },
        ];
    }
}
