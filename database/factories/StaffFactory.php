<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   protected $model = Customer::class;
    
    public function definition()
    {
        return [
            'customer_name' => $this->faker->name,
            'contact' => $this->faker->phoneNumber,
            'location' => $this->faker->address,
            // Add any other columns you want to populate here
        ];
    }
}
