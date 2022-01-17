<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        return [
            'nomDoc'=>$this->faker->name(),
            'experience'=>$this->faker->randomDigit(),
            'specialisation'=>$this->faker->randomElement($array=['Gastroenterologue', 'Hematologue', 'Cardiologue', 'Podologue','Urgentiste','Generaliste'])
        ];
    }
}
