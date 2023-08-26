<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'last_name' => $this->faker->lastKanaName,
            'first_name' => $this->faker->firstKanaName,
            'gender' => $this->faker->gender,
            'email' => $this->faker->email,
            'post_code' => $this->faker->postcode,
            'address' => $this->faker->address,
            'building_name' =>$this->faker->streetAddress,
            'opinion' => $this->faker->realText(120)
        ];
    }
}
