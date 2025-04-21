<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->numberBetween(1,2,3),
            'email' => $this->faker->safeEmail,
            'tel'=> $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'building'=> $this->faker->secondaryAddress,
            'detail' => $this->faker->text(120)
        ];
    }
}
