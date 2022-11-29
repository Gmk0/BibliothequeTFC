<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultationTravauxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     
    public function definition()
    {
        return [
            "users_id" => $this->faker->numberBetween(1, 80),
            "travails_id" => $this->faker->numberBetween(1, 80),
            "created_at" => $this->faker->dateTimeBetween('now', '10 months'),
            //
        ];
    }
}
