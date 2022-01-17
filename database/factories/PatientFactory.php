<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // - Factory de 200 patients
        return [
            'nomPatient'=>$this->faker->lastName(),
            'prenom'=>$this->faker->firstName(),
            'naissance'=>$this->faker->date($format = 'd-m-Y', $max = 'now'),
            'registreNr'=>$this->faker->randomNumber($nbDigits = 8, $strict = false),
            'genre'=>$this->faker->randomElement(['H','F']),
            'adresse'=>$this->faker->streetAddress(),
            'pays'=>$this->faker->country(),
            'ville'=>$this->faker->city(),
            'codePostal'=>$this->faker->postcode(),
            'phone'=>$this->faker->phoneNumber(),
            'contactPers'=>$this->faker->name(),
            'contactPersPhone'=>$this->faker->phoneNumber(),
        ];
    }
}
