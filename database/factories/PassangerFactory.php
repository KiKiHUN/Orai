<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Passanger>
 */
class PassangerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" =>$this->faker->name(),
            "bday"=>$this->faker->date($format='Y-m-d',$max='2021-01-01'),
            "pid"=>$this->faker->numberBetween($min=10000,$max=99999).$this->faker->randomLetter().$this->faker->randomLetter(),
            "flightsid"=>$this->faker->numberBetween($min=1,$max=250)
        ];
    }
}
