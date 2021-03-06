<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "city_id" => $this->faker->numberBetween(1,144),
            "street" => $this->faker->streetName(),
            "district" => $this->faker->citySuffix(),
            "number" => $this->faker->randomNumber()
        ];
    }
}
