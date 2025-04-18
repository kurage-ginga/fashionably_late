<?php

namespace Database\Factories;

use App\Models\ContactController;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(1,2,3),
            'email' => $this->faker->safeEmail,
            'tel'=> $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'building'=> $this->faker->secondaryAddress,
            'detail' => $this->faker->text(120)
        ];
    }
}
